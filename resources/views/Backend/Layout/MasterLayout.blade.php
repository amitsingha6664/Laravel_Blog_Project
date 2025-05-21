<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/backendstyle.css') }}" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
      <button class="btn btn-outline-light d-md-none" type="button" onclick="toggleSidebar()">
        ☰
      </button>
      <a class="navbar-brand ms-2" href="#">Admin Panel</a>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <h4 class="text-white text-center">Admin Panel</h4>
    <a href="{{ route('dashboard')}}" onclick="showSection('dashboard')">Dashboard</a>
    <a href="{{ route('CreatePostView')}}" onclick="showSection('createPost')">Create New Post</a>

    <!-- Settings Dropdown -->
    <div class="dropdown">
      <a class="dropdown-toggle text-white d-block px-3 py-2" href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Settings
      </a>
      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="settingsDropdown">
        <li><a class="dropdown-item" href="{{ route('GeneralSettingsView') }}">General Settings</a></li>
        <li><a class="dropdown-item" href="{{ route('ProfileSettingsView') }}">Profile Settings</a></li>
        <li><a class="dropdown-item" href="{{ route('AddCategoryView') }}">Add Category</a></li>
      </ul>
    </div>

    <a href="{{ route('home')}}">Log out</a>
  </div>

  <!-- Content -->
  <div class="content">
    @yield('Content')
  </div>

  <script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('show');
    }
  </script>
</body>
</html>
