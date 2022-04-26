@extends('layout')
@section('content')
    <form method="post" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" required class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label for="">E-mail</label>
            <input type="text" name="email" required class="form-control" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" required class="form-control">
        </div>
        <div class="form-group">
            <label for="">Retype Password</label>
            <input type="text" name="password_confirmation" required class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
@endsection('content')
