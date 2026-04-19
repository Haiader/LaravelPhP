@extends('student.layout')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 fw-bold">Passing Data to Blade View</h1>

    {{-- ── String ──────────────────────────────────────────────────────── --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-primary text-white fw-semibold">
            📌 String
        </div>
        <div class="card-body">
            <p class="mb-0">Name: <strong>{{ $name }}</strong></p>
        </div>
    </div>

    {{-- ── Array ────────────────────────────────────────────────────────── --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-success text-white fw-semibold">
            🍎 Array (Fruits)
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                @foreach($fruits as $fruit)
                    <li class="list-group-item">{{ $fruit }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- ── Associative Array ────────────────────────────────────────────── --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-warning fw-semibold">
            👤 Associative Array (User)
        </div>
        <div class="card-body">
            <p>Name: <strong>{{ $user['name'] }}</strong></p>
            <p>Email: <strong>{{ $user['email'] }}</strong></p>
            <p class="mb-0">
                Status:
                <span class="badge {{ $user['is_active'] ? 'bg-success' : 'bg-danger' }}">
                    {{ $user['is_active'] ? 'Active' : 'Inactive' }}
                </span>
            </p>
        </div>
    </div>

    {{-- ── Object ───────────────────────────────────────────────────────── --}}
    <div class="card mb-4 shadow-sm">
        <div class="card-header bg-info text-white fw-semibold">
            💻 Object (Product)
        </div>
        <div class="card-body">
            <p>ID: <strong>{{ $product->id }}</strong></p>
            <p>Product: <strong>{{ $product->name }}</strong></p>
            <p class="mb-0">Price: <strong>Rp{{ number_format($product->price, 0, ',', '.') }}</strong></p>
        </div>
    </div>
</div>
@endsection
