@extends('Backend.Layout.MasterLayout')

@section('Content')

@if(session('success'))
<div id="customAlert" class="custom-toast position-fixed top-0 end-0 m-4" style="z-index: 1050;">
    <div class="toast-body d-flex align-items-center shadow-lg rounded-3 px-4 py-3" style="background: rgba(40, 167, 69, 0.85); color: white; backdrop-filter: blur(10px); border-left: 5px solid #fff;">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-check-circle-fill me-2" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.97 10.03a.75.75 0 0 0 1.08.022l3.992-4.99a.75.75 0 1 0-1.144-.976L7.525 8.37 5.383 6.234a.75.75 0 1 0-1.06 1.06l2.647 2.736z"/>
        </svg>
        <span>{{ session('success') }}</span>
    </div>
</div>
@endif

<div class="container p-3">
  <h1 class="mb-4">Dashboard</h1>
    <h2 class="mt-4 text-center">Users List ({{ $user_count }})</h2>
    <div class="d-flex justify-content-end">
        <a class="btn btn-outline-success" href="{{ route('Add-New-User') }}">
            Add New User
        </a>
    </div>

  <div class="table-responsive mt-4">
<table class="table table-bordered">
  <thead class="table-info">
    <tr>
      <th class="text-center">Id</th>
      <th class="text-center">Name</th>
      <th class="text-center">Role</th>
      <th class="text-center">Created Date</th>
      <th class="text-center">Actions</th>
    </tr>
  </thead>
  <tbody>
    @if($user_count == 0)
      <tr>
        <td colspan="5">
          <div class="align-items-center py-2 text-center">
            <strong>No users found.</strong> You can add a new user by clicking the button below.
          </div>
        </td>
      </tr>
    @else
      @foreach($all_user as $user)
        <tr>
          <td class="text-center">{{ $user->id }}</td>
          <td class="text-center">{{ $user->name }}</td>
          <td class="text-center">{{ $user->role }}</td>
          <td class="text-center">{{ $user->created_at }}</td>
          <td class="text-center">
            <a class="btn btn-sm btn-primary mb-1" href="{{ route('User-Profile-View', $user->id) }}" target="_blank"><i class="fa-solid fa-eye"></i></a>
            <a class="btn btn-sm btn-danger mb-1" href="{{ route('Delete-User', $user->id) }}"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
      @endforeach
    @endif
  </tbody>
</table>

  </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const alertBox = document.getElementById("customAlert");
        if (alertBox) {
            alertBox.style.opacity = "1";
            setTimeout(() => {
                alertBox.style.transition = "opacity 0.6s ease";
                alertBox.style.opacity = "0";
                setTimeout(() => alertBox.remove(), 600);
            }, 5000);
        }
    });
</script>

@endsection
