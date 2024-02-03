<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome to Account Management!</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="container mt-5">
        <div class="jumbotron text-center">
            <h1 class="display-4">Welcome to Account Management</h1>
            <p class="lead">Your one-stop solution for managing accounts</p>
            <hr class="my-4">
            @if (Route::has('login'))
                <p class="lead">
                    @auth
                        <a class="btn btn-primary btn-lg" href="{{ url('/home') }}" role="button">Go to Dashboard</a>
                    @else
                        <a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Log in</a>

                        @if (Route::has('register'))
                            <a class="btn btn-secondary btn-lg" href="{{ route('register') }}" role="button">Register</a>
                        @endif
                    @endauth
                </p>
            @endif
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
