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
        <a href="tel:+64021860001" class=""><i class="fa fa-phone text-danger me-2"></i><span class="">+64021860001</span></a>
        <!-- Right-aligned Button -->
        <!-- <a href="#" class="btn btn-book ms-5"></a> -->
        <button type="button" class="btn btn-book ms-3" data-bs-toggle="modal" data-bs-target="#bookAppointmentModal">
          Book an Appointment
        </button>
      </div>
    </div>
  </nav>
<!-- Modal -->
<div class="modal fade" id="bookAppointmentModal" tabindex="-1" aria-labelledby="bookAppointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bookAppointmentModalLabel">Book an Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="form-group">
                <label for="name">Name <span class="text-danger">*</span></label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter you full name!">
                <span class="errorClass" id="name_error"></span>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
                <label for="phone">Phone<span class="text-danger">*</span></label>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Enter you phone number!">
                <span class="errorClass" id="phone_error"></span>

              </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="form-group">
                <label for="email">Email<span class="text-danger">*</span></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter you email!">
                <span class="errorClass" id="email_error"></span>

              </div>
          </div>
          <div class="col-md-12 mb-3">
            <div class="form-group">
                <label for="description">Description<span class="text-danger">*</span></label>
                <textarea name="description" id="description" row="5" class="form-control" placeholder="Briefly describe the issue with your vehicle (e.g., engine noise, tire problem, etc.)"></textarea>
                <span class="errorClass" id="description_error"></span>

              </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger">Submit</button>
      </div>
    </div>
  </div>
</div>
  