@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<div class="content-card">
    <h2>My Profile</h2>
    <p class="text-muted">User information and account details.</p>
    <hr>

    @if ($user)
        <div class="mb-3">
            <label class="fw-bold">Username</label>
            <p>{{ $user->username }}</p>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Full Name</label>
            <p>{{ $user->full_name }}</p>
        </div>
        <div class="mb-3">
            <label class="fw-bold">Email Address</label>
            <p>{{ $user->email }}</p>
        </div>
    @else
        <div class="alert alert-warning">No user profile found.</div>
    @endif
</div>
@endsection
