<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        User::create([
            'name' => 'Fatih Amala Mutawazin',
            'identity_id' => '3217080204960017',
            'gender' => 1,
            'address' => 'Jayamekar Padalarang',
            'photo' => null,
            'email' => 'fatihamalam@gmail.com',
            'password' => app('hash')->make('secret'),
            'phone_number' => '082217189815',
            'api_token' => Str::random(40),
            'role' => 0,
            'status' => 1
        ]);
    }
}
