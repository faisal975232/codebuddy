<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::create([
            'name'=>'Admin',
            'email'=>'king975232@gmail.com',
            'is_admin'=>1,
            'password'=>Hash::make('9806818722')
        ]);

        User::create([
            'name'=>'User',
            'email'=>'Faisal@gmail.com',
            'password'=>Hash::make('9806818722')
        ]);
    }
}
