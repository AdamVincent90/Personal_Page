<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Adam Vincent',
            'email' => 'juddulat@gmail.com',
            'password' => bcrypt('123!Ghetto'),
            'remember_token' => 'gravy',
        ]);
    }
}