<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('indonesia'),
            'level' => 'admin'
        ]);

        \App\Models\User::create([
            'name' => 'Petugas',
            'username' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('indonesia'),
            'level' => 'petugas'
        ]);

        \App\Models\User::create([
            'name' => 'Administrator',
            'username' => 'Hollow',
            'email' => 'hollowdream@gmail.com',
            'password' => Hash::make('aqila123'),
            'level' => 'admin'
        ]);

    }
}