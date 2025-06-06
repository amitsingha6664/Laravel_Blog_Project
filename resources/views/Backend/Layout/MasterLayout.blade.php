<!DOCTYPE html>
<html lang="bn">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ $title }}</title>
  <link href="{{ asset('Assets/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Assets/fontawesome/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Assets/css/backendstyle.css') }}" rel="stylesheet">
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-dark fixed-top">
    <div class="container-fluid py-2">
      <button class="btn btn-outline-light d-md-none border-0" type="button" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
      </button>
      <a class="navbar-brand ms-2 fw-bold" href="#">
        <i class="fas fa-cog me-2"></i>Admin Panel
      </a>
    </div>
  </nav>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <a href="{{ route('Dashboard')}}" class="{{ request()->routeIs('Dashboard') ? 'active' : '' }}">
      <i class="fas fa-tachometer-alt"></i>
      <span class="nav-text">Dashboard</span>
    </a>
    
    <a href="{{ route('Create-Post-View')}}" class="{{ request()->routeIs('Create-Post-View') ? 'active' : '' }}">
      <i class="fas fa-plus-circle"></i>
      <span class="nav-text">Create New Post</span>
    </a>

    <!-- Settings Dropdown -->
    <div class="dropdown">
      <a class="dropdown-toggle d-flex align-items-center px-3 py-2 {{ request()->routeIs(['GeneralSettingsView', 'ProfileSettingsView', 'AddCategoryView']) ? 'active' : '' }}" 
         href="#" id="settingsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-cog"></i>
        <span class="nav-text">Settings</span>
      </a>
      <ul class="dropdown-menu" aria-labelledby="settingsDropdown">
        <li><a class="dropdown-item {{ request()->routeIs('General-Settings-View') ? 'active' : '' }}" 
               href="{{ route('General-Settings-View') }}">General Settings</a></li>
        <li><a class="dropdown-item {{ request()->routeIs('Users-List-View') ? 'active' : '' }}" 
               href="{{ route('Users-List-View') }}">Users List</a></li>
        <li><a class="dropdown-item {{ request()->routeIs('Profile-Settings-View') ? 'active' : '' }}" 
               href="{{ route('Profile-Settings-View') }}">Profile Settings</a></li>
        <li><a class="dropdown-item {{ request()->routeIs('Add-Category-View') ? 'active' : '' }}" 
               href="{{ route('Add-Category-View') }}">Add Category</a></li>
      </ul>
    </div>

    <a href="{{ route('Home')}}">
      <i class="fas fa-sign-out-alt"></i>
      <span class="nav-text">Log out</span>
    </a>
  </div>

  <!-- Content -->
  <div class="content">
    @if(session('success'))
      <div id="customAlert" class="custom-toast position-fixed top-0 end-0 m-4" style="z-index: 1050;">
          <div class="toast-body d-flex align-items-center shadow-lg rounded-3 px-4 py-3" style="background: #00563B; color: white; backdrop-filter: blur(10px); border-left: 5px solid #fff;">
              <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 10.03a.75.75 0 0 0 1.08.022l3.992-4.99a.75.75 0 1 0-1.144-.976L7.525 8.37 5.383 6.234a.75.75 0 1 0-1.06 1.06l2.647 2.736z"/>
              </svg>
              <span>{{ session('success') }}</span>
          </div>
      </div>
    @endif

    @if(session('error'))
        <div id="customAlert" class="custom-toast position-fixed top-0 end-0 m-4" style="z-index: 1050;">
            <div class="toast-body d-flex align-items-center shadow-lg rounded-3 px-4 py-3" style="background: rgba(202, 16, 16, 0.85); color: white; backdrop-filter: blur(10px); border-left: 5px solid #fff;">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 10.03a.75.75 0 0 0 1.08.022l3.992-4.99a.75.75 0 1 0-1.144-.976L7.525 8.37 5.383 6.234a.75.75 0 1 0-1.06 1.06l2.647 2.736z"/>
                </svg>
                <span>{{ session('error') }}</span>
            </div>
        </div>
    @endif

    @yield('Content')
  </div>

  <script src="{{ asset('Assets/js/bootstrap.bundle.min.js') }}"></script>
  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      sidebar.classList.toggle('show');
    }
    
    // For desktop hover effect
    document.addEventListener('DOMContentLoaded', function() {
      const sidebar = document.getElementById('sidebar');
      const content = document.querySelector('.content');
      
      // For desktop
      if (window.innerWidth > 768) {
        sidebar.addEventListener('mouseenter', function() {
          this.classList.add('expanded');
        });
        
        sidebar.addEventListener('mouseleave', function() {
          this.classList.remove('expanded');
        });
      }
      
      // Close sidebar when clicking outside on mobile
      document.addEventListener('click', function(event) {
        if (window.innerWidth <= 768 && sidebar.classList.contains('show')) {
          if (!sidebar.contains(event.target) && !document.querySelector('.navbar').contains(event.target)) {
            sidebar.classList.remove('show');
          }
        }
      });
    });
  </script>
</body>
</html>