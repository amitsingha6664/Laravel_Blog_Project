@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- Hero Section -->
<section class="Header_Name">
  <div class="container">
    <h1 class="display-5 fw-bold">Welcome to our blog!</h1>
    <p class="lead">Explore new articles and categories.</p>
    <a href="#" class="btn btn-primary btn-lg">Get started</a>
  </div>
</section>

<!-- Blog Cards -->
<section class="py-5">
  <div class="container">
    <h2 class="mb-4 text-center">Recent Posts</h2>
    <div class="row g-4">
      @foreach($all_posts as $post)
      <div class="col-12 col-sm-6 col-md-4">
        <div class="card blog-card h-100">
          <img src="{{ asset('Assets/img/two.jpg') }}" class="card-img-top img-fluid" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $post->post_title }}</h5>
            <p class="card-text flex-grow-1">{{ Str::limit($post->post_content, 100) }}</p>
            <a href="#" class="btn btn-outline-primary btn-sm mt-auto">Read more</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>

@endsection