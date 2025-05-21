@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- About Header -->
<section class="about-header mt-5">
  <div class="container">
    <h1 class="display-5 fw-bold">About Us</h1>
    <p class="lead">Our goal is to spread quality and knowledge-rich content</p>
  </div>
</section>

<!-- About Content -->
<section class="py-5">
  <div class="container">
    <h3>Our Blog</h3>
    <p>
      BlogSite is a Bengali blog platform where you will find quality articles on technology, education, lifestyle, health, and many other topics. Our aim is to provide informative and inspiring content for Bengali-speaking readers.
    </p>

    <h4 class="mt-4">Our Mission</h4>
    <p>
      Easy access to information and knowledge sharing play a vital role in realizing the dream of a Digital Bangladesh. BlogSite is working towards that goal.
    </p>

    <!-- Optional Team Section -->
    <div class="mt-5">
      <h4>Our Team</h4>
      <div class="row mt-3">
        <div class="col-md-4 text-center">
          <div class="team-member">
            <img src="{{ asset('Assets/img/first.jpg') }}" alt="Team Member">
            <h6 class="mt-2">Jhony Rahaman</h6>
            <p class="text-muted">Founder & Writer</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="team-member">
            <img src="{{ asset('Assets/img/second.jpg') }}" alt="Team Member">
            <h6 class="mt-2">Shumi Aktar</h6>
            <p class="text-muted">Editor</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="team-member">
            <img src="{{ asset('Assets/img/thard.jpg') }}" alt="Team Member">
            <h6 class="mt-2">Tanver Hosain</h6>
            <p class="text-muted">Tech Writer</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection