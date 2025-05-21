@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- Article Header -->
<section class="contact-header mt-5">
  <div class="container">
    <h1 class="display-5 fw-bold">Article</h1>
    <p class="lead">Discover how future technology is shaping our world.</p>
  </div>
</section>

<!-- Article Content -->
<div class="container my-5">
  <div class="article-header">
    <h1 class="fw-bold">The Future of Technology: Changes in Our Lives</h1>
    <p class="text-muted">Publish: 5 may 2025</p>
    <img src="{{ asset('Assets/img/four.jpg') }}" alt="Technology Future">
  </div>

  <div class="article-body">
    <p>
      The present world is technology-dependent. Day by day, this dependence is increasing. We have now become accustomed to smartphones, artificial intelligence (AI), robots, and many other modern technologies. In this article, we will discuss how future technology will help make our lives easier, more efficient, and faster.
    </p>

    <p>
      Artificial intelligence is a technology capable of mimicking human thinking. In the next decade, AI-driven robots will be able to work as doctors, lawyers, and even teachers. At the same time, blockchain technology will make financial transactions more secure and transparent.
    </p>

    <h4>Conclusion</h4>
    <p>
      The advancement of technology is a blessing for us, but it also brings some challenges. By overcoming these challenges, we should use technology for the welfare of humanity.
    </p>
  </div>
</div>

@endsection