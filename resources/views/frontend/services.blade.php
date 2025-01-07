@extends('layouts.frontend.layout')

@section('css')
<style>
    :root {
    --site-color-grey: #D9D9D9;
    --site-color-red: #FF0000;

  }
   /* Hero Section */
   .hero {
      background: url('public/uploads/images/services-hero-section-img.jpg') no-repeat center center/cover;
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
        .service-title {
          margin-top: 1rem !important;
        }
    }
</style>
@endsection
@section('content')
<!-- Hero Section -->
<section class="hero">
  <div class="bg-dark-transparent-bg p-4 rounded">
    <h1>Services</h1>
    <p class="lead mb-4">
    Pro Auto Repairs delivers reliable auto repair and maintenance services to keep your vehicle running smoothly and safely.
      </p>
          
  </div>
</section>
<section>
<div class="container my-5">
    <!-- Card 1 -->
      <div class="card card-body mb-4 services_card" id="engine_repair_service">
        <div class="row p-4">
          <div class="col-md-5">
            <img class="rounded w-100" src="public/uploads/images/car-ingine-repair.jpg" alt="Engine Repair">
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 service-content">
            <h2 class="service-title text-center mb-3">Engine Repair</h2>
            <p class="service-text">
              Our expert technicians provide comprehensive engine diagnostics and repair services to keep your vehicle running smoothly. Whether you're dealing with unusual engine noises, overheating, we diagnose and fix the root cause efficiently. We specialize in handling all types of engines, from gasoline to diesel, ensuring optimal performance. Trust us for regular engine maintenance, component replacements, and complete overhauls to keep your vehicle at its peak.
            </p>
          </div>
        </div>
      </div>
    

    <!-- Card 2 -->
    <div class="card card-body mb-4 services_card" id="brake_service">
      <div class="row p-4">
        <div class="col-md-5">
          <img class="rounded w-100" src="public/uploads/images/car-brake-service.jpg" alt="Brake Services">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 service-content">
          <h2 class="service-title text-center mb-3">Brake Services</h2>
          <p class="service-text">
            Your safety is our priority. Our brake services include everything from brake pad replacement and rotor resurfacing to complete brake system inspections. Squeaky brakes, reduced stopping power, or unusual vibrations can compromise your driving safety—our team addresses these issues promptly. We use high-quality brake components and fluids to ensure your braking system is reliable and durable under all driving conditions.
          </p>
        </div>
      </div>
      
    </div>

    <!-- Card 3 -->
    <div class="card card-body mb-4 services_card" id="oil_change_service">
      <div class="row p-4">
        <div class="col-md-5">
          <img class="rounded w-100" src="public/uploads/images/car-oil-change.jpg" alt="Oil Change">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 service-content">
          <h2 class="service-title text-center mb-3">Oil Change</h2>
          <p class="service-text">
            Regular oil changes are essential for your engine’s longevity and performance. We use premium-quality oils tailored to your vehicle’s specifications, ensuring proper lubrication and reduced wear on engine parts. Our oil change service includes a complimentary filter check, fluid top-up, and a quick inspection of your vehicle’s critical systems. Experience smoother rides and improved fuel efficiency with our fast and affordable oil change solutions.
          </p>
        </div>
      </div>
     
    </div>

     <!-- Card 4 -->
     <div class="card card-body mb-4 services_card" id="tire_service">
      <div class="row p-4">
        <div class="col-md-5">
          <img class="rounded w-100" src="public/uploads/images/car-tyre.jpg" alt="Tire Services">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 service-content">
          <h2 class="service-title text-center mb-3">Tire Services</h2>
          <p class="service-text">
            Ensure a smooth and safe ride with our comprehensive tire services. From tire rotation and balancing to alignment and puncture repairs, we help extend the life of your tires and improve your vehicle's handling. If you need replacements, we offer a wide selection of high-quality tires for all makes and models. Properly maintained tires enhance fuel efficiency, safety, and driving comfort—let us take care of yours.
          </p>
        </div>
      </div>
     
    </div>

     <!-- Card 5 -->
     <div class="card card-body mb-4 services_card" id="battery_replacement_service">
      <div class="row p-4">
        <div class="col-md-5">
          <img class="rounded w-100" src="public/uploads/images/battery-replacement.jpg" alt="Battery Replacement">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 service-content">
          <h2 class="service-title text-center mb-3">Battery Replacement</h2>
          <p class="service-text">
            Don’t get stranded with a dead battery. Our team performs thorough battery tests to ensure your vehicle’s electrical system is running at its best. If a replacement is needed, we stock a range of reliable, high-performance batteries to match your vehicle. With expert installation and testing, we’ll have you back on the road quickly and confidently, no matter the weather.
          </p>
        </div>
      </div>
     
    </div>

    <!-- Card 6 -->
    <div class="card card-body mb-4 services_card" id="suspension_service">
      <div class="row p-4">
        <div class="col-md-5">
          <img class="rounded w-100" src="public/uploads/images/SuspensionandAlignment.jpg" alt="Suspension and Alignment">
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 service-content">
          <h2 class="service-title text-center mb-3">Suspension and Alignment</h2>
          <p class="service-text">
            Maintain control and stability with our suspension and alignment services. Whether you're experiencing uneven tire wear, pulling to one side, or a bumpy ride, we diagnose and resolve suspension issues to restore your vehicle’s performance. Our precise wheel alignment services ensure optimal handling, increased tire longevity, and a safer driving experience. Trust us for a smoother and safer ride.
          </p>
        </div>
      </div>
     
    </div>
  </div>
</section>
@endsection