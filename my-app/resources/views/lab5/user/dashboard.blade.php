@extends('layouts.app')

@section('title', 'User Dashboard')

@section('content')
<h2 class="mb-4 fw-bold">User Dashboard</h2>
<p class="text-muted">Welcome to your dashboard, <strong>{{ $username }}</strong>!</p>
<div class="list-group shadow-sm">
    <a href="#" class="list-group-item list-group-item-action">🧑 View Profile</a>
    <a href="#" class="list-group-item list-group-item-action">🔧 Edit Settings</a>
    <a href="#" class="list-group-item list-group-item-action">🚪 Logout</a>
</div>
@endsection
