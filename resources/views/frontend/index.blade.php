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
          <p>
            AutoCare phone number <strong><a href="tel:+64210392541">+64210392541</a></strong> | All auto mechanical needs.<br>
            <strong>CLOSED SATURDAY</strong>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="text-center stripped-line-call py-3">
    <div class="container">
        <p class="text-striped-line-p">
            Call us today on <strong><a class="text-danger" href="tel:+64210392541">+64210392541</a></strong>
            for your next warrant of fitness/car repair/full car service!    
        </p>
    </div>
</section>
<section class="services-section ">
    <div class="container py-4">
        <h1 class="fw-bold mb-4">Our Services</h1>
        <div class="row">
            <div class="col-sm-4">
                <div class="card my-3">
                    <div class="card-img" style="background-image: url('https://www.pitstop.co.nz/photos/shares/Service-Tiles-2023/Car-Service-514x416.png');">
                        <div class="card-overlay d-flex justify-content-between align-items-end">
                            <div class="me-2">
                                <h4 class="fw-bold">Car Servicing</h4>
                                <p class="fw-light">Comprehensive vehicle servicing to keep your car running smoothly.</p>
                            </div>
                            <a href="#book" class="btn btn-danger">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card my-3">
                    <div class="card-img" style="background-image: url('https://www.pitstop.co.nz/photos/shares/Service-Tiles-2023/Vehicel-Brakes-514x416.png');">
                        <div class="card-overlay d-flex justify-content-between align-items-end">
                            <div class="me-2">
                                <h4 class="fw-bold">Brakes & Tyres</h4>
                                <p class="fw-light">Ensure safety and performance with expert brake and tyre services.</p>
                            </div>
                            <a href="#book" class="btn btn-danger">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card my-3">
                    <div class="card-img" style="background-image: url('https://www.pitstop.co.nz/photos/shares/Service-Tiles-2023/Car-Service-514x416.png');">
                        <div class="card-overlay d-flex justify-content-between align-items-end">
                            <div class="me-2">
                                <h4 class="fw-bold">Engine Diagnostics</h4>
                                <p class="fw-light">Diagnosing and fixing engine issues for optimal performance.</p>
                            </div>
                            <a href="#book" class="btn btn-danger">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="card my-3">
                    <div class="card-img" style="background-image: url('https://www.pitstop.co.nz/photos/shares/Service-Tiles-2023/Car-Service-514x416.png');">
                        <div class="card-overlay d-flex justify-content-between align-items-end">
                            <div class="me-2">
                                <h4 class="fw-bold">Car Servicing</h4>
                                <p class="fw-light">Comprehensive vehicle servicing to keep your car running smoothly.</p>
                            </div>
                            <a href="#book" class="btn btn-danger">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card my-3">
                    <div class="card-img" style="background-image: url('https://www.pitstop.co.nz/photos/shares/Service-Tiles-2023/Vehicel-Brakes-514x416.png');">
                        <div class="card-overlay d-flex justify-content-between align-items-end">
                            <div class="me-2">
                                <h4 class="fw-bold">Brakes & Tyres</h4>
                                <p class="fw-light">Ensure safety and performance with expert brake and tyre services.</p>
                            </div>
                            <a href="#book" class="btn btn-danger">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card my-3">
                    <div class="card-img" style="background-image: url('https://www.pitstop.co.nz/photos/shares/Service-Tiles-2023/Car-Service-514x416.png');">
                        <div class="card-overlay d-flex justify-content-between align-items-end">
                            <div class="me-2">
                                <h4 class="fw-bold">Engine Diagnostics</h4>
                                <p class="fw-light">Diagnosing and fixing engine issues for optimal performance.</p>
                            </div>
                            <a href="#book" class="btn btn-danger">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>
@endsection
