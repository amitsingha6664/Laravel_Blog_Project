@extends('Backend.Layout.MasterLayout')

@Section('Content')

<div class="container my-1 p-5">
  <h1 class="mb-4">Dashboard</h1>

  <div class="row g-4">
    <div class="col-12 col-md-6">
      <div class="card text-white bg-primary h-100">
        <div class="card-body">
          <h5 class="card-title">Total Posts</h5>
          <p class="card-text fs-4">{{ $all_post_count }}</p>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="card text-white bg-success h-100">
        <div class="card-body">
          <h5 class="card-title">Total Users</h5>
          <p class="card-text fs-4">{{ $all_user_count }}</p>
        </div>
      </div>
    </div>

  <h2 class="mt-5 text-center">Recent Posts</h2>
  <div class="table-responsive">
    <table class="table table-striped align-middle">
      <thead class="table-light">
        <tr>
          <th>#</th>
          <th>Title</th>
          <th>Author</th>
          <th>Date</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($all_posts as $post)
        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->post_title}}</td>
          <td>{{$post->author_id}}</td>
          <td>{{$post->created_at}}</td>
          <td>
            <a class="btn btn-sm btn-primary" href="{{ route('ViewPost', $post->slug) }}">View</a>
            <a class="btn btn-sm btn-success" href="{{ route('editpsot') }}">Edit</a>
            <a class="btn btn-sm btn-danger" href="{{ route('deletepost') }}">Delete</a>
          </td>
        </tr>
        @endforeach
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>
</div>


@endsection