<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $announcements = [
            [
                'title' => 'Announcement 1',
                'content' => 'Welcome to the Football Academy!',
                'created_at' => now(),
            ],
            [
                'title' => 'Announcement 2',
                'content' => 'Announcement of the opening of the academy.',
                'created_at' => now(),
            ],
            [
                'title' => 'Announcement 3',
                'content' => 'Schedule of official training days.',
                'created_at' => now(),
            ],
            [
                'title' => 'Announcement 4',
                'content' => 'Summer sports camps.',
                'created_at' => now(),
            ],
            [
                'title' => 'Announcement 5',
                'content' => 'Players nominated to go professional abroad.',
                'created_at' => now(),
            ],
            [
                'title' => 'Announcement 6',
                'content' => 'Important lectures for players.',
                'created_at' => now(),
            ],
        ];

        foreach ($announcements as $announcement) {
            DB::table('announcements')->insert($announcement);
        }
    }
}
