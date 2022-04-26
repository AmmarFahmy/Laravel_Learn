<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testHomePageIsWorkingCorrectly()
    {
        $response = $this->get('/');
        $response -> assertSeeText("Hello");
        $response -> assertSeeText("World");

        // $response->assertStatus(200);
    }

    public function testContactPageIsWorkingCorrectly()
    {
        $response = $this->get('/contact');
        $response -> assertSeeText("Contact Page!");
    }

    use RefreshDatabase;
    
    public function test_example()
    {
        $this->assertTrue(true);
        // $response = $this->get('/posts');
        // $response -> assertSeeText('No posts found');
    }

}