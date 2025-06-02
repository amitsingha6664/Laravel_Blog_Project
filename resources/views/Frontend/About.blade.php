@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- About Header -->
<section class="Header_Name py-5">
  <div class="container py-4 text-center">
    <h1 class="display-5 fw-bold mb-3">About Us</h1>
    <p class="lead mx-auto" style="max-width: 700px;">Our goal is to spread quality and knowledge-rich content</p>
  </div>
</section>

<!-- About Content -->
<section class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <article class="about-content">
          <h3 class="fw-bold mb-4">Our Blog</h3>
          <p class="mb-4">
            BlogSite is a Bengali blog platform where you will find quality articles on technology, education, lifestyle, health, and many other topics. Our aim is to provide informative and inspiring content for Bengali-speaking readers.
          </p>

          <h4 class="mt-5 mb-3 fw-bold">Our Mission</h4>
          <p class="mb-5">
            Easy access to information and knowledge sharing play a vital role in realizing the dream of a Digital Bangladesh. BlogSite is working towards that goal.
          </p>

          <!-- Team Section -->
          <div class="team-section mt-5 pt-4">
            <h4 class="fw-bold mb-4">Our Team</h4>
            <div class="row g-4">
              <div class="col-md-4 text-center">
                <div class="team-member p-3">
                  <img src="{{ asset('Assets/img/first.jpg') }}" alt="Jhony Rahaman" class="img-fluid mb-3">
                  <h5 class="mb-1">Jony Rahaman</h5>
                  <p class="text-muted mb-0">Founder & Writer</p>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="team-member p-3">
                  <img src="{{ asset('Assets/img/second.jpg') }}" alt="Shumi Aktar" class="img-fluid mb-3">
                  <h5 class="mb-1">Sumi Aktar</h5>
                  <p class="text-muted mb-0">Editor</p>
                </div>
              </div>
              <div class="col-md-4 text-center">
                <div class="team-member p-3">
                  <img src="{{ asset('Assets/img/thard.jpg') }}" alt="Tanver Hosain" class="img-fluid mb-3">
                  <h5 class="mb-1">Tanver Hosain</h5>
                  <p class="text-muted mb-0">Tech Writer</p>
                </div>
              </div>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
</section>

@endsection