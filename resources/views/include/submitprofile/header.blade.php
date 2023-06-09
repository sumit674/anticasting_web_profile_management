<header class="header">
    <div class="navbar-area shadow-sm bg-body rounded">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand logo" href="{{ url('/') }}">
                    <!-- <img class=logo1 src="assets/images/logo/logo.svg" alt=Logo data-pagespeed-url-hash=1728553520 onload="pagespeed.CriticalImages.checkImageForCriticality(this);" /> -->
                    <img src="{{ asset('./assets/website/images/anticasting-logo.png') }}"
                        alt="{{ Config::get('name', 'Anti-Casting') }}">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar" aria-expanded="false"
                    aria-label="Toggle navigation">
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
                                <a href="{{ route('users.view-profile') }}">View Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.profile') }}">Submit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('users.logout') }}">Logout</a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('users.login') }}">Login</a>
                            </li>
                        @endauth
                        {{-- <li class="nav-item dropdown ">
                            <a href="#" id="drop1" data-toggle="dropdown"
                                class="nav-link dropdown-toggle" role="button">Music <b class="caret"></b></a>
                            <ul role="menu" class="dropdown-menu" aria-labelledby="drop1">
                                <li role="presentation"><a class="dropdown-item" href="#" role="menuitem">Bootdey.com</a></li>
                                <li role="presentation"><a class="dropdown-item" href="#" role="menuitem">Option 2</a></li>
                                <li role="presentation"><a class="dropdown-item" href="#" role="menuitem">Option 3</a></li>
                                <li role="presentation"><a class="dropdown-item" href="#" role="menuitem">New Snippets</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>
