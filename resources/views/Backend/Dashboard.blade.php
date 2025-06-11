@extends('Backend.Layout.MasterLayout')

@section('Content')

<div class="container p-3">

  <div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="mb-4">Dashboard</h1>
    <!-- Smart Search Bar -->
    <form class="d-flex position-relative me-3" action="" method="GET">
      <div class="input-group">
        <span class="input-group-text bg-white border-end-0"><i class="fas fa-search text-muted"></i></span>
        <input type="search" class="form-control border-start-0" name="query" placeholder="Search..." aria-label="Search">
      </div>
    </form>
  </div>

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
    <table class="table table-bordered">
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
        @if($all_post_count == 0)
        <tr>
          <td colspan="5">
            <div class="align-items-center py-2 text-center">
              <strong>No post found.</strong> You can add a new post by clicking the button below.
            </div>
          </td>
        </tr>
        @endif
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
