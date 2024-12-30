@extends('layouts.frontend.layout')

@section('css')
<style>
    :root {
    --site-color-grey: #D9D9D9;
    --site-color-red: #FF0000;

  }
  .team-imgs img {
    width: 150px;
  }
    /* Hero Section */
    .hero {
      background: url('public/uploads/images/car-repair-about-1.jpg') no-repeat center center/cover;
      height: 88vh;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .hero h1 {
      font-weight: bold;
    }

    .hero p {
      font-size: 1.25rem;
    }

    /* About Section */
    .about-section {
        background:unset !important;
        padding: 3rem 1rem;
    }

    .about-section img {
      max-width: 100%;
      border-radius: 0.5rem;
    }

    /* Services Section */
    .services-section {
      /* background-color: #f8f9fa; */
      /* padding: 3rem 1rem; */
    }

    .services-section h3 {
      margin-bottom: 2rem;
    }

    .service-card {
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      border-radius: 0.5rem;
    }

    .service-card img {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    /* Team Section */
    .team-section img {
      border-radius: 50%;
    }

    /* CTA Section */
    .cta-section {
      background-color:var(--site-color-red);
      color: white;
      padding: 2rem;
      text-align: center;
    }

    .cta-section h2 {
      margin-bottom: 1rem;
    }
    .hero p {
        font-size: 1.25rem;
        line-height: 1.75;
        max-width: 600px;
    }
    .hero h1 {
        font-weight: bold;
        margin-bottom: 1rem;
    }
    @media (max-width: 767px) {
        .hero {
            height: 60vh;
        }
    }
</style>
@endsection
@section('content')
<!-- Hero Section -->
<section class="hero">
    <div class="bg-dark-transparent-bg p-4 rounded">
      <h1>About Pro Auto Repairs</h1>
      <p class="lead mb-4">
            Pro Auto Repairs is your one-stop destination for all your vehicle repair and maintenance needs.
            
        </p>
           
    </div>
  </section>

  <!-- About Section -->
  <section class="about-section container text-center py-5">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <h1 class="mb-3 fw-bold">About Us</h1>
            <p>At Pro Auto Repairs, we take pride in delivering high-quality vehicle repair and maintenance services. With years of expertise and a team of skilled technicians, we ensure your car is always running at its best. Our mission is to provide reliable, affordable, and professional auto care for our community.</p>
      </div>
      <div class="col-lg-6 mb-4 mb-lg-0">
        <img src="public/uploads/images/car-repair-about.jpg" alt="Pro Auto Repairs" class="rounded">
      </div>
      
    </div>
  </section>

  <!-- Services Section -->
  <section class="services-section text-center py-5">
    <div class="container">
      <h1 class="mb-4  fw-bold">Our Services</h1>
      <div class="row gy-4">
        <div class="col-md-4">
          <div class="card service-card">
            <img src="public/uploads/images/car-ingine-repair.jpg" class="card-img-top" alt="Service 1">
            <div class="card-body">
              <h5 class="card-title">Engine Repair</h5>
              <p class="card-text">Expert engine diagnostics and repairs to keep your car running smoothly.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card service-card">
            <img src="public/uploads/images/car-brake-service.jpg" class="card-img-top" alt="Service 2">
            <div class="card-body">
              <h5 class="card-title">Brake Services</h5>
              <p class="card-text">Ensure your safety with our professional brake inspection and repair services.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card service-card">
            <img src="public/uploads/images/car-oil-change.jpg" class="card-img-top" alt="Service 3">
            <div class="card-body">
              <h5 class="card-title">Oil Change</h5>
              <p class="card-text">Quick and efficient oil changes to keep your engine in top condition.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3 justify-center">
            <a href="{{URL('/services')}}" class="text-danger text-center" style="text-decoration:underline;width:fit-content;"> View All Services <i class="fa fa-arrow-right mt-1"></i></a>
        </div>
    </div>
  </section>

  <!-- Team Section -->
<section class="team-section container text-center py-5">
    <h1 class="fw-bold mb-4">Meet Our Team</h1>
    <div class="row gy-4">
        <div class="col-md-4">
            <div class="d-flex flex-column align-items-center team-imgs">
                <img src="public/uploads/images/technician-usr.jpg" alt="Team Member 1" class="img-fluid mb-2">
                <h5>John Doe</h5>
                <p>Head Technician</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex flex-column align-items-center team-imgs">
                <img src="public/uploads/images/support-usr.jpg" alt="Team Member 2" class="img-fluid mb-2">
                <h5>Jane Smith</h5>
                <p>Customer Support</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="d-flex flex-column align-items-center team-imgs">
                <img src="public/uploads/images/technician-usr2.jpg" alt="Team Member 3" class="img-fluid mb-2">
                <h5>Robert Brown</h5>
                <p>Technician</p>
            </div>
        </div>
    </div>
</section>


  <!-- CTA Section -->
  <section class="cta-section">
    <h1 class="mb-3 fw-bold">Ready to Get Started?</h1>
    <p class="mb-3">Contact us today or schedule your appointment or learn more about our services.</p>
    <a href="{{URL('/contact-us')}}" class="btn btn-grey btn-lg m-2">Contact Us</a>
    <a href="{{URL('/book-appointment')}}" class="btn btn-grey btn-lg m-2">Book Appointment</a>
  </section>
@endsection