<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'id' => 1,
            'movie_id' => '1',
            'user' => 'Satoso',
            'rating' => '9/10',
            'date' => '2020-11-14',
        ]);
        Review::create([
            'id' => 2,
            'movie_id' => '4',
            'user' => 'Hidan',
            'rating' => '8/10',
            'date' => '2023-07-23',
        ]);
        Review::create([
            'id' => 3,
            'movie_id' => '5',
            'user' => 'Overdosez',
            'rating' => '7/10',
            'date' => '2024-02-10',
        ]);
        Review::create([
            'id' => 4,
            'movie_id' => '2',
            'user' => 'Genta',
            'rating' => '10/10',
            'date' => '2020-12-11',
        ]);
        Review::create([
            'id' => 5,
            'movie_id' => '3',
            'user' => 'Shiki',
            'rating' => '9/10',
            'date' => '2022-10-06',
        ]);
    }
}