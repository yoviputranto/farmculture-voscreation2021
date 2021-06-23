<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*$admin = User::create([
            'name' => 'Admin',
            'email' => 'voscreation@admin.test',
            'profession' => 'Administrator',
            'password' => bcrypt('12345678')
        ]);*/

        $user = User::create([
            'name' => 'user',
            'email' => 'voscreation@user.test',
            'profession' => 'User',
            'password' => bcrypt('12345678')
        ]);
    }
}
