<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Film;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;


class FilmCommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        db::table('comments')->truncate();
        Comment::factory()->count(19)->create();
    }
}
