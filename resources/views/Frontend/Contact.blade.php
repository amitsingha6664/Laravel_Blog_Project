@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- Contact Header -->
<section class="Header_Name py-5">
  <div class="container py-4 text-center">
    <h1 class="display-5 fw-bold mb-3">Contact Us</h1>
    <p class="lead mx-auto" style="max-width: 700px;">Feel free to reach out to us with any questions or suggestions</p>
  </div>
</section>

<!-- Contact Form and Info -->
<section class="py-5">
  <div class="container">
    <div class="row g-4 justify-content-center">
      <div class="col-lg-10">
        <div class="row g-4">
          <!-- Contact Form -->
          <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
              <div class="card-body p-4">
                <h4 class="text-center mb-4 fw-bold">Send a Message</h4>
                <form class="contact-form">
                  <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" placeholder="Write your message..." required></textarea>
                  </div>
                  <button type="submit" class="btn btn-primary px-4 py-2 d-flex mx-auto mt-3">
                    <i class="fas fa-paper-plane me-2"></i> Send Message
                  </button>
                </form>
              </div>
            </div>
          </div>

          <!-- Contact Info -->
          <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100">
              <div class="card-body p-4">
                <h4 class="text-center mb-4 fw-bold">Contact Details</h4>
                <div class="contact-info">
                  <div class="d-flex align-items-start mb-4">
                    <div class="icon-circle bg-primary text-white me-3">
                      <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                      <h5 class="mb-1">Address</h5>
                      <p class="mb-0 text-muted">Road 12, Dhanmondi, Dhaka-1209</p>
                    </div>
                  </div>
                  
                  <div class="d-flex align-items-start mb-4">
                    <div class="icon-circle bg-primary text-white me-3">
                      <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                      <h5 class="mb-1">Email</h5>
                      <p class="mb-0 text-muted">contact@blogsite.com</p>
                    </div>
                  </div>
                  
                  <div class="d-flex align-items-start mb-4">
                    <div class="icon-circle bg-primary text-white me-3">
                      <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                      <h5 class="mb-1">Phone</h5>
                      <p class="mb-0 text-muted">+88 01700 000000</p>
                    </div>
                  </div>
                </div>
                
                <div class="map-container mt-4 rounded overflow-hidden">
                  <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8649.39612254306!2d91.85683391209477!3d24.28989171247214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375182f057b7e5ff%3A0xb604516146d1efee!2sAdampur%20Bazar!5e0!3m2!1sen!2sbd!4v1747556708691!5m2!1sen!2sbd" 
                    width="100%" 
                    height="250" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection