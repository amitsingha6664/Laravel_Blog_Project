<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Assets/css/frontendstyle.css') }}" rel="stylesheet">
  <link href="{{ asset('Assets/fontawesome/css/all.min.css') }}" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm py-3 fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-light" href="{{ route('Home')}}">BlogSite</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-light {{ request()->routeIs('Home') ? 'active' : '' }}" href="{{ route('Home')}}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
              <li><a class="dropdown-item" href="#">Tech</a></li>
              <li><a class="dropdown-item" href="#">Education</a></li>
              <li><a class="dropdown-item" href="#">Lifestyle</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light {{ request()->routeIs('Articale') ? 'active' : '' }}" href="{{ route('Articale')}}">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light {{ request()->routeIs('About') ? 'active' : '' }}" href="{{ route('About')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light {{ request()->routeIs('Contact') ? 'active' : '' }}" href="{{ route('Contact')}}">Contact</a>
          </li>
        </ul>

        <!-- Smart Search Bar -->
        <form class="d-flex position-relative me-3" action="" method="GET">
          <div class="input-group">
            <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
            <input type="search" class="form-control border-start-0" name="query" placeholder="Search..." aria-label="Search">
          </div>
        </form>
        
        <div class="d-flex">
          <a class="btn btn-login" href="{{ route('Dashboard')}}">Log in</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <main style="padding-top: 80px;">
    @yield('Content')
  </main>
    
  <!-- Footer -->
  <footer class="bg-dark text-white">
    <div class="container py-4">
      <div class="footer-content">
        &copy; 2025 BlogSite. All Rights Reserved
      </div>
    </div>
  </footer>

  <script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>