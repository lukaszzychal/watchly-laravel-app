<?php

use App\Models\Movie;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/movies', function () {
    $movies = Movie::all();
    return view('movies', [
        'movies' => $movies
    ]);
});

Route::get('/movies/{movie}', function (Movie $movie) {
    return view('movie-card', [
        'movie' => $movie
    ]);
});

Route::get('/series', function () {
    return view('series');
});

Route::get('/cinema', function () {
    return view('cinema');
});

Route::get('/tv', function() {
   return view('tv');
});

