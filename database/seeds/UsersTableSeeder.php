<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new \App\User([
            'fname' => '1',
            'lname' => '1',
            'username' => '1',
            'email' => '1@gmail.com',
            'password' => '1',
            'permissions' => '0',
        ]);
           $users->save();
           
           $users = new \App\User([
            'fname' => '2',
            'lname' => '2',
            'username' => '2',
            'email' => '2@gmail.com',
            'password' => '2',
            'permissions' => '1',
        ]);
           $users->save();

           $users = new \App\User([
            'fname' => '3',
            'lname' => '3',
            'username' => '3',
            'email' => '3@gmail.com',
            'password' => '3',
            'permissions' => '2',
        ]);
           $users->save();
    }
}
