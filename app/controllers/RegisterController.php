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
}