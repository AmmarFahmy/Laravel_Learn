@extends('layouts.app')

@section('title', 'Blog Post')

@section('content')

    @forelse ($posts as $key => $post)
        @include('posts.partials.post')
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
