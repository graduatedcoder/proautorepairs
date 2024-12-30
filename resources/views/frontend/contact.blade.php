@extends('layouts.frontend.layout')

@section('css')
<style>
    /* Full-width background styling */
    .contact-hero {
      background: url('public/uploads/images/car-repair-contact.jpg') no-repeat center center/cover;
      height: 88vh;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    @media (max-width: 768px) {
      /* Reduce height on smaller devices */
      .contact-hero {
        height: 60vh;
      }
    }

    .contact-hero h1 {
      font-size: 3rem;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .contact-hero p {
      font-size: 1.25rem;
      line-height: 1.75;
      max-width: 600px;
    }

    .contact-view-services {
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }
</style>
@endsection
@section('content')
    <section class="contact-hero">
        <div class="bg-dark-transparent-bg p-4 rounded">
            <h1>Contact Us</h1>
            <p>We are here to assist you. Feel free to reach out with your questions, comments, or inquiries. Let’s connect today!</p>
            <div class="arrow_down mt-4">
                <button class="btn btn-light rounded-circle" onclick="scrollToSection('contact-form')"><i class="fa fa-arrow-down text-danger"></i></button>
            </div>
        </div>
    </section>
    <section id="contact-form" class="contact-section py-5" style="background:#D9D9D9;">
        <div class="container">
            <div class="row" >
                <!-- Contact Info -->
                <div class="col-md-6">
                    <h3 class="fw-bold my-3" style="font-size:x-large;">GET IN TOUCH</h3>
                    <p>
                    The team at Pro Auto Repairs is here to help. Give us a call or fill out our enquiry form, and we will get in touch with you as soon as possible.
                    </p>
                    <ul class="list-unstyled mt-4">
                    <li class="mb-3">
                        <i class="fa fa-phone text-danger me-3"></i> +64210392541
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
                <div class="col-md-6 card p-3">
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
    <section class="contact-view-services py-5">
        <div class="container">
            <h1 class="mb-4 text-dark">Our Services</h1>
            <p class="lead mb-4 text-dark">
                At Pro Auto Repairs, we provide a comprehensive range of services designed to keep your vehicle in top shape. From routine maintenance like oil changes and tire rotations to complex engine repairs and diagnostics, our skilled technicians are here to meet all your automotive needs. We take pride in offering personalized solutions to ensure your car runs smoothly and reliably, so you can focus on the road ahead.
            </p>
            <a href="{{ URL('/services') }}" class="btn btn-danger">Explore Our Services</a>
        </div>
    </section>
<script>

    function scrollToSection(section) {
      // Scroll to the target section
      document.getElementById(section).scrollIntoView({ behavior: 'smooth',block: 'start' });
    }
</script>
@endsection