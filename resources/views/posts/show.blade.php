@extends('layouts.app')

@section('title', $post->title)

@section('content')

    {{-- @if ($post['is_new'])
        <div>A new blog post! using if</div>
    @else
        <div>Blog post is old! using else</div>
    @endif

    @unless($post['is_new'])
        <div>It is an old post... using unless</div>
    @endunless --}}

    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content }}</p>
    <p>Added {{ $post->created_at->diffForHumans() }}</p>

    @if (now()->diffInMinutes($post->created_at) < 5)
        <div class="alert alert-info">New!</div>
    @endif


    <h4 class="mt-5">Comments</h4>

    @forelse ($post->comments as $comment)
        <p>
            {{ $comment->content }},
        <p class="text-muted">updated {{ $comment->updated_at->diffForHumans() }}</p>
        </p>
    @empty
        <p>
            No comments yet!
        </p>
    @endforelse

    {{-- @isset($post['has_comments'])
        <div>The post has some comments</div>
    @endisset --}}
@endsection
