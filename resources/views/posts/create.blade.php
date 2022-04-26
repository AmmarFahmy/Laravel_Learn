@extends('layouts.app')

@section('title', 'Create the post')

@section('content')
    <form action="{{ route('posts.store') }}" method="post">
        @csrf

        @include('posts.partials.form')
        <br>
        <div class="d-grid gap-2">
            <input type="submit" value="Create" class="btn btn-primary">
        </div>
    </form>

@endsection
