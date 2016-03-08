<?php
/**
 * Created by PhpStorm.
 * User: Test
 * Date: 3/8/2016
 * Time: 5:15 AM
 */

class UsersTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 10; $i++)
        {
            $user = User::create(array(
                'email' => $faker->email,
                'username' => $faker->unique->username,
                'password' => $faker->word,
                'remember_token' => str_random(50)
            ));
        }
    }
}