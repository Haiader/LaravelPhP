<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.rtl.min.css" integrity="sha384-CfCrinSRH2IR6a4e6fy2q6ioOX7O6Mtm1L9vRvFZ1trBncWmMePhzvafv7oIcWiW" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="icon" href="https://api.iconify.design/cryptocurrency-color:loom.svg">
</head>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="">
      <img src="https://api.iconify.design/cryptocurrency-color:loom.svg" alt="Bootstrap" width="30" height="24">
      <span><b>LOOM</b></span>
    </a>
  </div>
</nav>

<div class="content p-5">
    @yield('content')
</div>

 <footer class="bg-dark text-white py-4 p-5">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>Company Name</h5>
        <p>Short description about your brand or mission.</p>
      </div>
      <div class="col-md-4">
        <h5>Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="#" class="text-white text-decoration-none">Home</a></li>
          <li><a href="#" class="text-white text-decoration-none">About</a></li>
          <li><a href="#" class="text-white text-decoration-none">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <!-- Icons often use Bootstrap Icons or FontAwesome -->
        <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white"><i class="bi bi-twitter"></i></a>
      </div>
    </div>
    <hr class="my-4">
    <p class="text-center mb-0">&copy; 2024 Your Company. All rights reserved.</p>
  </div>
</footer>

</body>
</html>
