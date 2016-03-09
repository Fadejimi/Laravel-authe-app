<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 3/8/2016
 * Time: 5:34 AM
 */

class RegisterController extends BaseController
{
    public function showRegister()
    {
        return View::make('register');
    }

    public function doRegister()
    {
        $user = new User;
        $user->email = Input::get('email');
        $user->username = Input::get('username');
        $user->password = Hash::make(Input::get('password'));
        $user->save();
        $theEmail = Input::get('email');
        return View::make('thanks')->with('theEmail', $theEmail);
    }
}

