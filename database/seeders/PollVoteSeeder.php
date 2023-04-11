<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        \App\Models\PollVote::create([
            'poll_id' => 1,
            'poll_option_id' => 1,
            'user_id' => '192.168.0.1',
            'created_at' => '2021-04-11 10:23:11',
        ]);

        \App\Models\PollVote::create([
            'poll_id' => 1,
            'poll_option_id' => 1,
            'user_id' => '192.168.0.2',
            'created_at' => '2021-04-11 10:23:11',
        ]);

        \App\Models\PollVote::create([
            'poll_id' => 1,
            'poll_option_id' => 2,
            'user_id' => '192.168.0.3',
            'created_at' => '2021-04-11 10:23:11',
        ]);

        \App\Models\PollVote::create([
            'poll_id' => 2,
            'poll_option_id' => 1,
            'user_id' => '192.168.0.4',
            'created_at' => '2021-04-11 10:23:11',
        ]);

        \App\Models\PollVote::create([
            'poll_id' => 2,
            'poll_option_id' => 2,
            'user_id' => '192.168.0.5',
            'created_at' => '2021-04-11 10:23:11',
        ]);
    }
}
