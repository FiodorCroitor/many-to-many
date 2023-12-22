<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Cinema;
use App\Models\CinemaMovie;
use App\Models\Movie;
use Database\Factories\CinemaMovieFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Cinema::factory(5)->create();
        Movie::factory(25)->create();
        CinemaMovie::factory(30)->create();
    }
}
