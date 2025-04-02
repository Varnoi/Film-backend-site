<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;
use Illuminate\Support\Facades\DB;



class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table('genres')->insert([
            [
                'name' => 'Action',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Comedy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Drama',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Horror',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sci-Fi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fantasy',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Romance',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Thriller',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Documentary',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        
        
        // You can also use the factory to create genres
        // \App\Models\Genre::factory(10)->create();
    }
}
