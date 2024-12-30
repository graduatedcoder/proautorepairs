<nav class="navbar navbar-expand-lg ">
    <div class="container">
      <!-- Left-aligned Logo -->
      <a class="navbar-brand p-0" href="/">
        <img src="public/uploads/logo/logo-png.png" alt="App Logo" title="App Logo" style="width:70px;">
      </a>
      
      <!-- Mobile Toggle Button -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!-- Navbar Links and Button -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <!-- Centered Navigation Links -->
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{URL('/')}}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('services') ? 'active' : '' }}" href="{{URL('/services')}}">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('about-us') ? 'active' : '' }}" href="{{URL('/about-us')}}">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('contact-us') ? 'active' : '' }}" href="{{URL('/contact-us')}}">CONTACT US</a>
          </li>
        </ul>
        <a href="tel:+64210392541" class=""><i class="fa fa-phone text-danger me-2"></i><span class="">+64210392541</span></a>
        <!-- Right-aligned Button -->
        <a href="#" class="btn btn-book ms-5">Book Appointment</a>
      </div>
    </div>
  </nav>
