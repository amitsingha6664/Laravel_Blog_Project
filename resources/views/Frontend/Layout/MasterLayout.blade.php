<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/frontendstyle.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home')}}">BlogSite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto fw-bold">
                <li class="nav-item"><a class="nav-link active" href="{{ route('home')}}">Home</a></li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="categoryDropdown" role="button" data-bs-toggle="dropdown">Category</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Tech</a></li>
                    <li><a class="dropdown-item" href="#">Education</a></li>
                    <li><a class="dropdown-item" href="#">Lifestyle</a></li>
                </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="{{ route('articale')}}">Article</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('contact')}}">Contact</a></li>
                <li class="nav-item"><a class="nav-link btn btn-success text-light mx-3 px-3" href="{{ route('dashboard')}}">Log in</a></li>
            </ul>
            </div>
        </div>
    </nav>

    @yield('Content')
    
    <!-- Footer -->
    <footer class="bg-dark text-white mt-5">
        <div class="container py-4">
            <hr class="border-light">
            <div class="text-center">
            &copy; 2025 BlogSite. @Copyright
            </div>
        </div>
    </footer>

    <script src="{{ asset('Assets/js/bootstrap.min.js') }}"></script>
</body>
</html>