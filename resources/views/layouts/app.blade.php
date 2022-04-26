<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>

    </script>
    <title>Laravel App - @yield('title')</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            {{-- <p class="navbar-brand">Navbar</p> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link p-2 text-dark" href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 text-dark" href="{{ route('home.contact') }}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 text-dark" href="{{ route('posts.index') }}">Blog Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2 text-dark" href="{{ route('posts.create') }}">Add Blog Post</a>
                    </li>
                </ul>
                {{-- <span class="navbar-text">
                    Navbar text with an inline element
                </span> --}}
            </div>
        </div>
    </nav>
    {{-- <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white border-bottom shadow-sm mb-3">
        <h5 class="my-0 mr-md-auto font-weight-normal">
            Laravel App
        </h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="{{ route('home.index') }}">Home</a>
            <a class="p-2 text-dark" href="{{ route('home.contact') }}">Contact</a>
            <a class="p-2 text-dark" href="{{ route('posts.index') }}">Blog Post</a>
            <a class="p-2 text-dark" href="{{ route('posts.create') }}">Add Blog Post</a>
        </nav>
    </div> --}}
    <div class="container">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        @yield('content')
    </div>
</body>

</html>
