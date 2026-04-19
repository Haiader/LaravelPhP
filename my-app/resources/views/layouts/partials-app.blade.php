<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Partial Views</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
          crossorigin="anonymous">
</head>
<body>

@include('partials.navbar')

<div class="container mt-4">
    @include('partials.alert', ['message' => $alertMessage ?? null])

    @yield('content')
</div>

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf4Xg5MbS1v6AHhGSNkNiNXK9PnrFChQ5Ueq1S0TPUE/EjiBs5+K9LVD3j"
        crossorigin="anonymous"></script>
</body>
</html>
