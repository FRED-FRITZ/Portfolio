<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AboutSeeder extends Seeder
{

    public function run(): void
    {
        $name = 'Fred Fritz Agustin';
        $job = 'student';
        $description = 'is still learning and improving.';
        $from = 'Philippines,Leyte';
        $lives_in = 'Mabini St. Hilongos,Leyte';
        $birthday = 'July 08,2003';
        $gender = 'Male';

        DB::table('abouts')->insert ([
            [
                'name' => $name,
                'job' => $job,
                'description' => $description,
                'from' => $from,
                'lives_in' => $lives_in,
                'birthday' => $birthday,
                'gender' => $gender,
            ],
        ]);
    }
}
