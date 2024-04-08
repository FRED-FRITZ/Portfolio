<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{

    public function run(): void
    {
        $name = 'Fred Fritz Agustin';
        $role = 'admin';
        $email = 'fredfritza@gmail.com';

        DB::table('users')->insert ([
            [
                'name' => $name,
                'role' => $role,
                'email' => $email,
                'password' => Hash::make('12345678'),
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
