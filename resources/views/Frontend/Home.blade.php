@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- Hero Section -->
<section class="hero mt-5">
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
      <div class="col-md-4">
        <div class="card blog-card">
          <img src="{{ asset('Assets\img\three.jpg') }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $post->post_title }}</h5>
            <p class="card-text">{{ $post->post_content }}</p>
            <a href="#" class="btn btn-outline-primary btn-sm">Read more</a>
          </div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>

@endsection