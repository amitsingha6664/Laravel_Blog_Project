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

  <div class="row g-4">
    <div class="col-12 col-md-6">
      <div class="card text-white h-100" style="background-color: #007A74;">
        <div class="card-body">
          <h5 class="card-title">Total Posts</h5>
          <p class="card-text fs-4">{{ $all_post_count }}</p>
        </div>
      </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="card text-white h-100" style="background-color: #4B0082;">
        <div class="card-body">
          <h5 class="card-title">Total Users</h5>
          <p class="card-text fs-4">{{ $all_user_count }}</p>
        </div>
      </div>
    </div>
  </div>

  <h2 class="mt-4 text-center">Recent Posts</h2>

  <div class="table-responsive mt-4">
    <table class="table table-bordered border-primary">
      <thead class="table-info">
        <tr>
          <th class="text-center">Id</th>
          <th class="text-center">Title</th>
          <th class="text-center">Author</th>
          <th class="text-center">Date</th>
          <th class="text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($all_posts as $post)
        <tr>
          <td class="text-center">{{ $post->id }}</td>
          <td class="text-center">{{ $post->post_title }}</td>
          <td class="text-center">{{ $post->author_id }}</td>
          <td class="text-center">{{ $post->created_at->format('Y-m-d') }}</td>
          <td class="text-center">
            <a class="btn btn-sm btn-primary mb-1" href="{{ route('View-Post', $post->slug) }}"><i class="fa-solid fa-eye"></i></a>
            <a class="btn btn-sm btn-success mb-1" href="{{ route('Edit-Post', $post->slug) }}"><i class="fa-solid fa-pen"></i></a>
            <a class="btn btn-sm btn-danger mb-1" href="{{ route('Delete-Post', $post->id) }}"><i class="fa-solid fa-trash"></i></a>
          </td>
        </tr>
        @endforeach
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
