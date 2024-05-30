<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            // Original messages from standard users
            [
                'sender_id' => 2,
                'receiver_id' => 1,
                'parent_id' => null,
                'subject' => 'Academy opening date',
                'content' => 'When is the opening date of the academy?',
                'is_read' => false,
            ],
            [
                'sender_id' => 3,
                'receiver_id' => 1,
                'parent_id' => null,
                'subject' => 'Playing times',
                'content' => 'When are the players playing times?',
                'is_read' => false,
            ],
            [
                'sender_id' => 2,
                'receiver_id' => 1,
                'parent_id' => null,
                'subject' => 'Registering!',
                'content' => 'What are the ages for registering?',
                'is_read' => true,
            ],
            [
                'sender_id' => 3,
                'receiver_id' => 1,
                'parent_id' => null,
                'subject' => 'Registering!',
                'content' => 'How can I register in the academy?',
                'is_read' => true,
            ],
            [
                'sender_id' => 2,
                'receiver_id' => 1,
                'parent_id' => null,
                'subject' => 'Positions',
                'content' => 'Can a player play in any position?',
                'is_read' => false,
            ],
            // Replies from the administrator
            [
                'sender_id' => 1,
                'receiver_id' => 2,
                'parent_id' => 1,
                'subject' => 'Academy opening date',
                'content' => 'The academy will open in 03 october',
                'is_read' => false,
            ],
            [
                'sender_id' => 1,
                'receiver_id' => 3,
                'parent_id' => 2,
                'subject' => 'Playing times',
                'content' => 'We have 4 playing times in the day 9:00, 12:00, 17:00, 21:00',
                'is_read' => false,
            ],
            [
                'sender_id' => 1,
                'receiver_id' => 2,
                'parent_id' => 3,
                'subject' => 'Registering!',
                'content' => 'Until 20 years you can join us!',
                'is_read' => true,
            ],
            [
                'sender_id' => 1,
                'receiver_id' => 3,
                'parent_id' => 4,
                'subject' => 'Registering!',
                'content' => 'To register come to our office with one of your parents.',
                'is_read' => true,
            ],
            [
                'sender_id' => 1,
                'receiver_id' => 2,
                'parent_id' => 5,
                'subject' => 'Positions!',
                'content' => 'No, we evaluate the player and put them in a specific place or let him play in any position if we think that he can do that.',
                'is_read' => false,
            ],
                ];
                foreach ($messages as $message) {
                    DB::table('messages')->insert(array_merge($message, [
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]));
                }
    }
}
