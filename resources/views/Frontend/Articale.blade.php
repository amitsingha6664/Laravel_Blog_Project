@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- Article Header -->
<section class="py-5 Header_Name">
  <div class="container py-4">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h1 class="display-5 fw-bold mb-3">Article</h1>
        <p class="lead">Discover how future technology is shaping our world.</p>
      </div>
    </div>
  </div>
</section>

<!-- Article Content -->
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <article>
        <!-- Article Header -->
        <header class="mb-5">
          <h1 class="fw-bold mb-3 display-4">The Future of Technology: Changes in Our Lives</h1>
          <div class="d-flex align-items-center mb-4">
            <span class="text-muted me-3"><i class="far fa-calendar-alt me-2"></i>Published: May 5, 2025</span>
            <span class="text-muted"><i class="far fa-clock me-2"></i>5 min read</span>
          </div>
          <img src="{{ asset('Assets/img/four.jpg') }}" alt="Technology Future" class="img-fluid rounded-3 shadow-sm w-100">
        </header>

        <!-- Article Body -->
        <div class="article-body">
          <p class="lead mb-4">
            The present world is technology-dependent. Day by day, this dependence is increasing. We have now become accustomed to smartphones, artificial intelligence (AI), robots, and many other modern technologies.
          </p>

          <p class="mb-4">
            In this article, we will discuss how future technology will help make our lives easier, more efficient, and faster.
          </p>

          <div class="my-5 p-4 bg-light rounded-3">
            <h5 class="fw-bold mb-3">Key Takeaways:</h5>
            <ul class="mb-0">
              <li class="mb-2">AI will transform professional services</li>
              <li class="mb-2">Blockchain will revolutionize finance</li>
              <li class="mb-2">Technology brings both opportunities and challenges</li>
            </ul>
          </div>

          <h4 class="mt-5 mb-3 fw-bold">The Rise of Artificial Intelligence</h4>
          <p class="mb-4">
            Artificial intelligence is a technology capable of mimicking human thinking. In the next decade, AI-driven robots will be able to work as doctors, lawyers, and even teachers. At the same time, blockchain technology will make financial transactions more secure and transparent.
          </p>

          <div class="row g-4 my-4">
            <div class="col-md-6">
              <div class="p-3 border rounded-3 h-100">
                <h5 class="fw-bold"><i class="fas fa-robot text-primary me-2"></i>AI Applications</h5>
                <p class="mb-0">From healthcare diagnostics to personalized education, AI is set to transform every sector of our economy.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="p-3 border rounded-3 h-100">
                <h5 class="fw-bold"><i class="fas fa-link text-primary me-2"></i>Blockchain Impact</h5>
                <p class="mb-0">Decentralized finance and smart contracts will create more transparent and efficient systems.</p>
              </div>
            </div>
          </div>

          <h4 class="mt-5 mb-3 fw-bold">Conclusion</h4>
          <p>
            The advancement of technology is a blessing for us, but it also brings some challenges. By overcoming these challenges, we should use technology for the welfare of humanity.
          </p>

          <div class="mt-5 pt-4 border-top">
            <div class="d-flex align-items-center">
              <div class="flex-shrink-0">
                <img src="{{ asset('Assets/img/second.jpg') }}" alt="Author" class="rounded-circle" width="60">
              </div>
              <div class="flex-grow-1 ms-3">
                <h6 class="mb-0 fw-bold">Written by</h6>
                <p class="mb-0">Sumi Aktar</p>
              </div>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>

@endsection

<style>

</style>