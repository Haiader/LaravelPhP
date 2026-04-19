@extends('student.layout')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 fw-bold">Blade Control Structures Demo</h1>

    {{-- ── 1. @if / @else ──────────────────────────────────────────────── --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white fw-semibold">1. @@if / @@else</div>
        <div class="card-body">
            @if($isLoggedIn)
                <div class="alert alert-success mb-0">✅ Welcome back, user!</div>
            @else
                <div class="alert alert-warning mb-0">⚠️ Please log in.</div>
            @endif
        </div>
    </div>

    {{-- ── 2. @foreach ─────────────────────────────────────────────────── --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-success text-white fw-semibold">2. @@foreach</div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                @foreach($users as $user)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{ $user['name'] }}
                        <span class="badge bg-secondary">{{ $user['role'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- ── 3. @forelse ─────────────────────────────────────────────────── --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-warning fw-semibold">3. @@forelse</div>
        <div class="card-body">
            @forelse($products as $product)
                <p>{{ $product }}</p>
            @empty
                <div class="alert alert-info mb-0">📦 No products found.</div>
            @endforelse
        </div>
    </div>

    {{-- ── 4. @isset ───────────────────────────────────────────────────── --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white fw-semibold">4. @@isset</div>
        <div class="card-body">
            @isset($profile['email'])
                <p class="mb-0">User Email: <strong>{{ $profile['email'] }}</strong></p>
            @endisset
        </div>
    </div>

    {{-- ── 5. @empty ───────────────────────────────────────────────────── --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-secondary text-white fw-semibold">5. @@empty</div>
        <div class="card-body">
            @empty($profile['phone'] ?? null)
                <div class="alert alert-secondary mb-0">📵 No phone number available.</div>
            @endempty
        </div>
    </div>

    {{-- ── 6. @switch ──────────────────────────────────────────────────── --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-dark text-white fw-semibold">6. @@switch</div>
        <div class="card-body">
            @switch($status)
                @case('active')
                    <span class="badge bg-success fs-6">Status: Active</span>
                    @break
                @case('inactive')
                    <span class="badge bg-danger fs-6">Status: Inactive</span>
                    @break
                @default
                    <span class="badge bg-secondary fs-6">Status: Unknown</span>
            @endswitch
        </div>
    </div>
</div>
@endsection
