<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('students')->insert([
            [
                'name' => 'Ali Yilrdim',
                'email' => 'Ali@football.com',
                'department' => 'Football Sciences',
            ],
            [
                'name' => 'Ahmed Islam',
                'email' => 'ahmed.islam@football.com',
                'department' => 'Football Sciences',
            ],
            [
                'name' => 'Mbarek Arafat',
                'email' => 'mbarek@mail.com',
                'department' => 'Football Sciences',
            ],
            [
                'name' => 'Asad imad',
                'email' => 'asad@football.com',
                'department' => 'Football Sciences',
            ],
        ]);


    }
}
