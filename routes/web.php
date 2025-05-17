<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('home');
});

Route::get('/movies', function () {
    return view('movies');
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

