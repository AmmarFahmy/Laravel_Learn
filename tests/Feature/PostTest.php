<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\BlogPost;
use App\Models\Comment;

class PostTest extends TestCase
{

    use RefreshDatabase;
    
    public function test_example()
    {
        // $this->assertTrue(true);
        $response = $this->get('/posts');
        $response -> assertSeeText('No posts found');
    }

    // public function testSee1BlogPostWhenThereIs1 () 
    // {
    //     $post = new BlogPost();
    //     $post->title = 'New Title';
    //     $post->title = 'New content of the blog';
    //     $post->save();

    //     //act part
    //     $response = $this->get('/posts');


    //     //assert
    //     $response -> assertSeeText('New Title');
    // }

    public function testSee1BlogPostWithComments()
    {
        $post = $this->createDummyBlogPost();
        factory(Comment::class, 4)->create([
            'blog_post_id' => $post->id
        ]);

        $response = $this->get('/posts');

        $response ->assertSeeText('4 comments');
    }
}