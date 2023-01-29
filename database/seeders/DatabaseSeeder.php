<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder 
{
    /**
     * Seed the application's ;database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('12345678')
        ]);

        \App\Models\User::create([
            'name' => 'a user',
            'email' => 'auser@mail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
