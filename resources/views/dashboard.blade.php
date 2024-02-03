<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h2>User Dashboard</h2>

    <p>Welcome, {{ $user->name }}!</p>

    <h3>Your Account Information</h3>

    <p><strong>Name:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>

    <h3>Edit Your Account</h3>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/dashboard') }}" method="post">
        @csrf

        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $user->name }}" required>
        <br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ $user->email }}" required>
        <br>

        <button type="submit">Update Account</button>
    </form>

    <p><a href="{{ url('/logout') }}">Logout</a></p>
</body>
</html>
