  <header id="header" class="position-relative">
    <div class="position-absolute" style="width:100%;height:100%" id="particles-js"></div>
    <div class="container" >

      <div class="tm-site-header">
        <div class="wrapper">
            <div class="top">My Profile</div>
            <div class="bottom" aria-hidden="true">My Profile</div>
        </div>
        <img src={{ asset ("frontend/img/underline.png")}} class="img-fluid mb-4">
        <p>Go to reach your dream</p>        
      </div>    

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link active" href="#header">Home</a></li>
          <li><a class="nav-link" href="#about">About</a></li>
          <li><a class="nav-link" href="#resume">Resume</a></li>
          <li><a class="nav-link" href="#services">Services</a></li>
          <li><a class="nav-link" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link" href="#contact">Contact</a></li>
          <li>
            <div class="col-lg-2 col-8 text-end header-btn">
              @if(empty(getLogInUser()))
                  <a class="btn btn-primary nav-btn" href="{{ route('login') }}" data-turbo="false">
                      {{ __('auth.sign_in') }}
                  </a>
              @else
                  @if(getLogInUser()->hasrole('admin') || getLogInUser()->hasrole('user'))
                      <a class="btn btn-primary nav-btn" href="{{ route('admin.dashboard') }}" data-turbo="false">
                          {{ __('messages.dashboard') }}
                      </a>
                  @endif
                  @if(getLogInUser()->hasrole('super_admin'))
                      <a class="btn btn-primary nav-btn" href="{{ route('sadmin.dashboard') }}" data-turbo="false">
                          {{ __('messages.dashboard') }}
                      </a>
                  @endif
              @endif
            </div>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" id="twitter" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" id="facebook" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" id="github" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" id="apple" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>

    </div>
  </header><!-- End Header -->