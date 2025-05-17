<?php

use function Pest\Laravel\get;


//test('the application returns a successful response in the test', function () {
//    $this->withoutExceptionHandling();
//   $response = get('/test');
//   $response->dd();
//    $response->assertStatus(200);
//});

test('the application returns a successful response in the home page', function () {
    $this->withoutExceptionHandling();
   $response = get('/');
    $response->dd();
    $response->assertStatus(200);
});

//test('the application returns a successful response in the movies page', function () {
//    $this->withoutExceptionHandling();
//    get('/movies')->assertStatus(200);
//});
//
//test('the application returns a successful response in the series page', function () {
//    get('/series')->assertStatus(200);
//});
//
//test('the application returns a successful response in the cinema page', function () {
//    get('/cinema')->assertStatus(200);
//});
//
//test('the application returns a successful response in the tv page', function () {
//    get('/tv')->assertStatus(200);
//});
