@extends('Frontend.Layout.MasterLayout')

@section('Content')

<!-- Contact Header -->
<section class="contact-header mt-5">
  <div class="container">
    <h1 class="display-5 fw-bold">Contact Us</h1>
    <p class="lead">Feel free to reach out to us with any questions or suggestions</p>
  </div>
</section>

<!-- Contact Form and Info -->
<section class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-md-6">
        <h4 class="text-center">Send a Message</h4>
        <form>
          <div class="mb-3">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" placeholder="example@email.com">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Write your message..."></textarea>
          </div>
          <button type="submit" class="btn btn-primary d-flex mx-auto">Send</button>
        </form>
      </div>

      <div class="col-md-6">
        <h4 class="text-center">Contact Details</h4>
        <div class="contact-info">
          <h5>Address:</h5>
          <p>Road 12, Dhanmondi, Dhaka-1209</p>
          <h5>Email:</h5>
          <p>contact@blogsite.com</p>
          <h5>Phone:</h5>
          <p>+88 01700 000000</p>
        </div>
        <div class="map-placeholder mt-4">
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
</section>

@endsection