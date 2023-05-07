  <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
          <a href="{{ url('/') }}" class="logo d-flex align-items-center">
              <img src="{{ asset('./assets/website/images/anticasting-logo.png') }}"
                  alt="{{ Config::get('name', 'Anti-Casting') }}">
          </a>
          <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
          <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
          <nav id="navbar" class="navbar">
              <ul>
                  <li><a href="{{ url('/') }}" class="active">Home</a></li>
                  <li><a href="{{ url('/about') }}">About Us</a></li>
                  <li><a href="{{ route('our-work') }}">Our Work</a></li>
                  <li><a href="{{ url('/contact') }}">Contact</a></li>
                  @auth
                      <li><a class="get-a-quote" href="{{ route('users.submitProfile') }}">Submit Profile</a></li>
                      <li><a class="get-a-quote" href="{{ route('users.logout') }}">Logout</a></li>
                  @else
                      <li><a class="get-a-quote" href="{{ route('users.submitProfile') }}">Submit Profile</a></li>
                  @endauth
                  
              </ul>
          </nav>
      </div>
  </header>