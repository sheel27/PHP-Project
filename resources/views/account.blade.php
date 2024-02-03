<!-- resources/views/account.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h2 class="mb-4">Account Information</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User Information</h5>
                <p class="card-text"><strong>Name:</strong> {{ $user->name }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $user->email }}</p>
            </div>
        </div>

        <div class="mt-4">
            <h2>Edit Account Information</h2>
            <form action="{{ route('account.update') }}" method="post">
                @csrf
                @method('patch')

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
