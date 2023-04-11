<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\PollOption::create([
            'poll_id' => 1,
            'option_text' => 'Merah',
            'option_order' => 1,
            'votes' => 8,
        ]);

        \App\Models\PollOption::create([
            'poll_id' => 1,
            'option_text' => 'Biru',
            'option_order' => 2,
            'votes' => 10,
        ]);

        \App\Models\PollOption::create([
            'poll_id' => 1,
            'option_text' => 'Hijau',
            'option_order' => 3,
            'votes' => 5,
        ]);

        \App\Models\PollOption::create([
            'poll_id' => 2,
            'option_text' => 'Nasi Goreng',
            'option_order' => 1,
            'votes' => 5,
        ]);

        \App\Models\PollOption::create([
            'poll_id' => 2,
            'option_text' => 'Ayam Goreng',
            'option_order' => 2,
            'votes' => 10,
        ]);
    }
}
