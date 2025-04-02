<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call(UsersSeeder::class);
        $this->call(FilmSeeder::class);
        $this->call(FilmCommentsSeeder::class);
        $this->call(GenresSeeder::class);
        $this->call(FilmGenreSeeder::class);
    }
}
