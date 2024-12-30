<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Pro Auto Repairs</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="stylesheet" href="resources/css/style.css">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/js/all.min.js"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @yield('css')
    </head>
    <body class="font-sans antialiased">
        @include('layouts.frontend.header')
        <div id="app">
            <div class="main-container" id="container">
                <div id="content" class="main-content">
                    <main class="">
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>
        <footer class="">
            <div class="footer-main bg-dark text-white py-4">

                <div class="container">
                    <div class="row">
                    <!-- Logo and Contact Section -->
                    <div class="col-lg-3 col-md-3 col-12">
                        <div class="footer-logo">
                        <img src="public/uploads/logo/logo-png.png" alt="Pro Auto Repairs" style="max-width: 100px;">
                        </div>
                        <p class="mt-3">If you'd like to contact us, we'd be delighted to hear from you.</p>
                        <div class="external-links my-3 d-flex">
                            <a href="{{URL('/contact-us')}}" class="btn btn-danger me-3">Contact Us</a>
                            <div style="font-size:x-large;">
                                <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="text-white"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Navigation Section -->
                    <div class="col-lg-3 col-md-3 col-6">
                        <ul class="list-unstyled">
                        <li><a href="{{URL('/')}}" class="text-white">Home</a></li>
                        <li><a href="{{URL('/services')}}" class="text-white">Services</a></li>
                        <li><a href="{{URL('/about-us')}}" class="text-white">About Us</a></li>
                        <li><a href="{{URL('/contact-us')}}" class="text-white">Contact Us</a></li>
                        </ul>
                    </div>
                    <!-- Products & Services Section -->
                    <div class="col-lg-3 col-md-3 col-6">
                        <h6 class="mb-2">Our Services</h6>
                        <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Car Servicing</a></li>
                        <li><a href="#" class="text-white">Brakes & Tyres</a></li>
                        <li><a href="#" class="text-white">Engine Diagnostics</a></li>
                        </ul>
                    </div>
                    <!-- Finance Section -->
                    <div class="col-lg-3 col-md-3 col-12">
                        <h5 class="my-2">Make an Appointment</h5>
                        <p>Schedule your car servicing with ease through our reliable appointment options.</p>
                        <div class="mt-3">
                            <a href="#" class="text-white me-3" style="font-size:14px;">Terms and Conditions</a><br>
                            <a href="#" class="text-white" style="font-size:14px;">Privacy Policy</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="text-center text-white py-3" style="background:#000;">
                <p class="mb-0">© 2025 Pro Auto Repairs. ALL RIGHTS RESERVED</p>
                <!-- <p class="mb-0">Designed & Developed by <a href="#" class="text-danger">Storm IMC</a></p> -->
            </div>
        </footer>

    </body>
</html>
