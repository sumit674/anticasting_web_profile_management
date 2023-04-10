<header class="header">
    <div class="navbar-area shadow-sm bg-body rounded">
        <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand logo" href="{{ url('/') }}">
                <!-- <img class=logo1 src="assets/images/logo/logo.svg" alt=Logo data-pagespeed-url-hash=1728553520 onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> -->
                <img src="{{ asset('./assets/website/images/anticasting-logo.png') }}" alt="{{ Config::get('name', 'Anti-Casting') }}">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
                <span class="toggler-icon"></span>
            </button>
            <div id="navbar"class="collapse navbar-collapse justify-content-end">
                <ul id="nav"class="navbar-nav">
                    <li class="nav-item">
                        <a href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/our-work') }}">Our Work</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ url('/contact') }}">Contact</a>
                    </li>
                      @auth
                      <li class="nav-item">
                        <a  href="{{ route('users.view-profile') }}">View Profile</a>
                    </li>
                        <li class="nav-item">
                            <a  href="{{ route('users.submitProfile') }}">Submit Profile</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.logout') }}">Logout</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a href="{{ route('users.login') }}">Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </nav>
        </div>
     </div>
</header>
