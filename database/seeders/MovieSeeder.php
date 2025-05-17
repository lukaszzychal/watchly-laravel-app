<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(database_path('seeders/movies.json'));

        $movies = json_decode($json, true);

        foreach ($movies['movies'] as $movie) {

            Movie::factory()->create([
                'title' => $movie['Title'],
                'year' => $movie['Year'] ?? null,
                'duration' => $movie['Duration'] ?? null,
                'poster' => $movie['Poster'] ?? 'https://img.freepik.com/premium-vector/default-image-icon-vector-missing-picture-page-website-design-mobile-app-no-photo-available_87543-11093.jpg',
                'description' => $movie['Description'] ?? '',
                'country' => $movie['Country'] ?? '',
                'genre' => json_encode($movie['Genre']) ?? json_encode([]),
                'rating' => $movie['Rating'] ?? 0,
                'release_date' => $movie['Release Date'] ?? null,
                'actors' => json_encode($movie['Actors']) ?? json_encode([]),
                'director' => $movie['Director'] ?? '',
                'writer' => $movie['Writer'] ?? ''
            ]);
        }


        Movie::factory()->count(10)->create();

    }
}
