@extends('layouts.components-app')

@section('title', 'Home')

@section('content')
<h1 class="fw-bold mb-3">🏠 Home Page</h1>
<x-alert type="success">
    Welcome to the homepage!
</x-alert>
<p class="text-muted">This page uses Blade <strong>x-components</strong> for both the navbar and this alert box.</p>
@endsection
