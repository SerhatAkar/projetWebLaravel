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
            'fname' => 'student',
            'lname' => 'student',
            'username' => 'student',
            'email' => 'student@viacesi.fr',
            'password' => 'student',
            'permissions' => '0',
        ]);
           $users->save();
           
           $users = new \App\User([
            'fname' => 'bde',
            'lname' => 'bde',
            'username' => 'bde',
            'email' => 'bde@viacesi.fr',
            'password' => 'bde',
            'permissions' => '1',
        ]);
           $users->save();

           $users = new \App\User([
            'fname' => 'cesi',
            'lname' => 'cesi',
            'username' => 'cesi',
            'email' => 'cesi@viacesi.fr',
            'password' => 'cesi',
            'permissions' => '2',
        ]);
           $users->save();
    }
}
