@extends('layouts.app')

@section('title', 'Blog Post')

@section('content')

    @forelse ($posts as $key => $post)
        @include('posts.partials.post')

        @if ($post->comments_count)
            <p>{{ $post->comments_count }} comments</p>
        @else
            <p>No comments yet!</p>
        @endif
    @empty
        No posts found
    @endforelse


    {{-- same result as above code segment --}}
    {{-- @if (count($posts))

        @foreach ($posts as $key => $post)
            <div>{{ $key }}.{{ $post['title'] }}</div>
        @endforeach
    @else
        No posts found

    @endif --}}

@endsection


{{-- @section('content')
    @forelse ($posts as $post)
        <p>
        <h3>
            <a href="{{ route('posts.show', ['post' => $post->id]) }}">{{ $post->title }}</a>
        </h3>

        @if ($post->comments_count)
            <p>{{ $post->comments_count }} comments</p>
        @else
            <p>No comments yet!</p>
        @endif

        <a href="{{ route('posts.edit', ['post' => $post->id]) }}" class="btn btn-primary">
            Edit
        </a>

        <form method="POST" class="fm-inline" action="{{ route('posts.destroy', ['post' => $post->id]) }}">
            @csrf
            @method('DELETE')

            <input type="submit" value="Delete!" class="btn btn-primary" />
        </form>
        </p>
    @empty
        <p>No blog posts yet!</p>
    @endforelse
@endsection('content') --}}
