@extends('layouts.app')

@section('title', 'Profile - StepNStyle')

@section('content')

<section class="profile">
    <div class="container">
        <h2 class="section-title">Profile</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="profile-details">
            <form action="{{ route('profile.update') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" id="password_confirmation" name="password_confirmation">
                </div>
                <button type="submit" class="profile-update-button">Update Profile</button>
            </form>
        </div>

        
</section>

<footer class="footer">
    <div class="container">
        <p class="footer-text">&copy; 2024 StepNStyle. All rights reserved.</p>
    </div>
</footer>
@endsection
