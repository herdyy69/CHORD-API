<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Poll::create([
            'question' => 'Apa Warna Favorit Anda?',
            'end_date' => '2023-04-11',
            'is_published' => true,
            'is_multiple_choice' => true,
        ]);

        \App\Models\Poll::create([
            'question' => 'Apa Makanan Favorit Anda?',
            'end_date' => '2023-04-12',
            'is_published' => true,
            'is_multiple_choice' => false,
        ]);
    }
}
