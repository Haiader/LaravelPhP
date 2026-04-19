<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Layout & Personalisation</title>
    {{-- Bootstrap 5.3.8 (same version used in student.layout) --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
</head>
<body>

{{-- ── Navbar ─────────────────────────────────────────────────────────────── --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">UOK – Lab 5</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav" aria-controls="mainNav"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <span class="nav-link active">Welcome, {{ $username }}</span>
                </li>
            </ul>
        </div>
    </div>
</nav>

{{-- ── Role alert ──────────────────────────────────────────────────────────── --}}
<div class="container">
    @if($role === 'admin')
        <div class="alert alert-info">🔐 Admin Access Granted</div>
    @elseif($role === 'user')
        <div class="alert alert-success">👤 User Area</div>
    @endif

    @yield('content')
</div>

{{-- ── Footer ──────────────────────────────────────────────────────────────── --}}
<footer class="bg-body-tertiary text-center mt-5 p-3 border-top">
    <p class="mb-0">&copy; 2026 Copyright: <a class="text-body" href="#">Haider Ahmed</a></p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf4Xg5MbS1v6AHhGSNkNiNXK9PnrFChQ5Ueq1S0TPUE/EjiBs5+K9LVD3j"
        crossorigin="anonymous"></script>
</body>
</html>
