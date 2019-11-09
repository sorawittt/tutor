<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Admin';
        $user->lastname = 'Me';
        $user->phone_number = '0800000000';
        $user->email = 'admin@tutor.com';
        $user->password = Hash::make('admin');
        $user->email_verified_at = now();
        $user->role = 'ADMIN';
        $user->save();
    }
}
