@extends('layouts.frontend.layout')

@section('content')
<section class="hero-section py-5 d-flex align-items-center" style="background: url('public/uploads/images/pexels-gustavo-fring-6870313.jpg') center/cover no-repeat;">
  <div class="container-fluid h-100">
    <div class="d-flex ">
      <div class="">
        <div class="hero-text bg-dark-transparent-bg text-white p-4">
          <h1 class="fw-bold">WELCOME TO PRO AUTO REPAIRS</h1>
          <p class="mb-3">
            POWERED BY PASSION DRIVEN BY SERVICE
          </p>
          <!-- <h4 class="text-danger">Business Hours</h4> -->
          <p class=" mb-0"><strong>Monday - Friday:</strong> 08:00 AM - 05:30 PM</p>
          <p class="mb-0"><strong>Saturday:</strong> 08:00 AM - 12:00 PM</p>
          <p><strong>Sunday & Public Holidays Closed</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-center stripped-line-call py-3">
  <div class="container">
    <p class="text-striped-line-p">
      Contact us for your warrant of fitness,car service & repairs,new & used tyres
    </p>
  </div>
</section>
<section class="services-section ">
  <div class="container py-4">
    <h1 class="fw-bold mb-3 text-center">Our Most Popular Services</h1>
    <div class="row">
      <div class="col-sm-4">
        <div class="card my-3">
          <div class="card-img" style="background-image: url('public/uploads/images/car-ingine-repair.jpg');">
            <div class="card-overlay d-flex flex-column align-items-center justify-content-between">
              <div class="me-2">
                <h4 class="fw-bold pb-2">Engine Repair</h4>
                <p class="fw-light mt-3">Our experts provide comprehensive engine diagnostics to keep your vehicle running smoothly. Trust us for regular engine maintenance to keep your vehicle at its peak</p>
              </div>
              <a href="#" data-bs-toggle="modal" data-bs-target="#bookAppointmentModal" class="btn btn-danger p-2 mt-2">Book Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card my-3">
          <div class="card-img" style="background-image: url('public/uploads/images/car-brake-service.jpg');">
            <div class="card-overlay d-flex flex-column justify-content-between align-items-center">
              <div class="me-2">
                <h4 class="fw-bold pb-2">Brake Services</h4>
                <p class="fw-light mt-3">Enhance safety and performance with professional brake and tyre services. We use high-quality brake components and fluids to ensure reliability and durability in all driving conditions.</p>
              </div>
              <a href="#" data-bs-toggle="modal" data-bs-target="#bookAppointmentModal" class="btn btn-danger p-2 mt-2">Book Now</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card my-3">
          <div class="card-img" style="background-image: url('public/uploads/images/car-oil-change.jpg');">
            <div class="card-overlay d-flex flex-column justify-content-between align-items-center">
              <div class="me-2">
                <h4 class="fw-bold pb-2">Oil Change</h4>
                <p class="fw-light mt-3">Regular oil changes are essential for your engine’s longevity and performance. We use premium-quality oils, ensuring proper lubrication and reduced wear on engine parts.</p>
              </div>
              <a href="#" data-bs-toggle="modal" data-bs-target="#bookAppointmentModal" class="btn btn-danger p-2 mt-2">Book Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-center">
      <a href="{{URL('/services')}}" class="text-danger text-center" style="text-decoration:underline;width:fit-content;"> View All Services <i class="fa fa-arrow-right mt-1"></i></a>
    </div>
  </div>

</section>
<section class="about-section py-5">
  <div class="container">
    <div class="row align-items-center">
      <!-- Image Section -->
      <div class="col-md-6">
        <img src="public/uploads/images/car-repair-about.jpg" alt="Pro Auto Repairs" class="img-fluid rounded">
      </div>
      <!-- Content Section -->
      <div class="col-md-6">
        <h2 class="fw-bold text-center home-about-section h2 mb-3 py-3">About Pro Auto Repairs</h2>
        <p>
          Pro Auto Repairs is dedicated to providing high-quality automotive services to ensure your vehicle runs at its best. With a passion for excellence and customer satisfaction, our skilled team of mechanics specializes in a range of services, including engine diagnostics, brake repairs, tyre replacements, and general maintenance.
        </p>
        <p>
          At Pro Auto Repairs, we take pride in delivering trustworthy and efficient services tailored to your needs.
          <!-- Whether it’s routine maintenance or complex repairs, you can rely on us for professional expertise and friendly service. -->
        </p>
      </div>
    </div>
  </div>
</section>

<section class="contact-section py-5" style="background:#D9D9D9;">
  <div class="container">
    <div class="row">
      <!-- Contact Info -->
      <div class="col-md-6">
        <h3 class="fw-bold my-3" style="font-size:x-large;">GET IN TOUCH</h3>
        <p>
          The team at Pro Auto Repairs is here to help. Give us a call or fill out our enquiry form, and we will get in touch with you as soon as possible.
        </p>
        <ul class="list-unstyled mt-4">
          <li class="mb-3">
            <i class="fa fa-phone text-danger me-3"></i> +64021860001
          </li>
          <li class="mb-3">
            <i class="fas fa-envelope text-danger me-3"></i> info@proautorepairs.net
          </li>
          <li class="mb-3">
            <i class="fas fa-map-marker-alt text-danger me-3"></i> 2/18 Croskery road, Papakura
          </li>
        </ul>
      </div>
      <!-- Contact Form -->
      <div class="col-md-6">
        <form>
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="firstName" class="form-label">First Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="firstName" placeholder="First">
            </div>
            <div class="col-md-6">
              <label for="lastName" class="form-label">Last Name <span class="text-danger">*</span></label>
              <input type="text" class="form-control" id="lastName" placeholder="Last">
            </div>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" id="email" placeholder="Your Email">
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
            <textarea class="form-control" id="message" rows="4" placeholder="Your Message"></textarea>
          </div>
          <div class="mb-3">
            <!-- Placeholder for ReCAPTCHA -->
            <!-- <div class="recaptcha-placeholder">
              <input type="checkbox" id="recaptcha" class="me-2">
              <label for="recaptcha">I'm not a robot</label>
            </div> -->
          </div>
          <button type="submit" class="btn btn-danger">SEND</button>
        </form>
      </div>
    </div>
  </div>
</section>


@endsection