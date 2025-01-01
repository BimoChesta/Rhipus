<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
<<<<<<< HEAD
     */
    public function test_the_application_returns_a_successful_response(): void
=======
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
>>>>>>> b32844b544a6c3e6a9bc6819f994b9ff5bbaf64a
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
