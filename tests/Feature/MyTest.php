<?php

declare(strict_types=1);

namespace Tests\Feature;

use Tests\TestCase;

class MyTest extends TestCase
{
    /**
     * @test
     */
    public function the_application_returns_a_successful_response_in_the_home_page(): void
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertOk()
            ->assertSee([
                '<title>Watchly - </title>',
                ''
            ], false);
    }

    /**
     * @test
     */
    public function the_application_returns_a_successful_response_in_the_movies_page(): void
    {
         $this->get('/movies')
            ->assertStatus(200)
            ->assertOk()
            ->assertSee([
                '<title>Watchly - Movies</title>',
            ], false);
    }

    /**
     * @test
     */
    public function the_application_returns_a_successful_response_in_the_series_page(): void
    {
        $this->get('/series')
            ->assertStatus(200)
            ->assertOk()
            ->assertSee([
                '<title>Watchly - Series</title>'
            ], false);
    }

    /**
     * @test
     */
    public function the_application_returns_a_successful_response_in_the_cinema_page(): void
    {
        $this->get('/cinema')
            ->assertStatus(200)
            ->assertOk()
            ->assertSee([
                '<title>Watchly - Cinema</title>'
            ], false);
    }

    /**
     * @test
     */
    public function the_application_returns_a_successful_response_in_the_tv_page(): void
    {
        $this->get('/tv')
            ->assertStatus(200)
            ->assertOk()
            ->assertSee([
                '<title>Watchly - TV</title>'
            ], false);
    }

}
