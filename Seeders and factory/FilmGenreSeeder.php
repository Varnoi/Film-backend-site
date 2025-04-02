<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Film;
use App\Models\Genre;

class FilmGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Film::all()->each(function ($film) {
            $genreCount = rand(1, 3); // Random number of genres between 1 and 3
            $film->genres()->attach(
            Genre::InRandomOrder()->limit($genreCount)->pluck('id')->toArray()
            
            
        );
        });
    
    }
}
