<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html">Adventure</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('tours') }}" class="nav-link">Places</a></li>
                <li class="nav-item"><a href="{{ route('hotels') }}" class="nav-link">Hotels</a></li>
                <li class="nav-item"><a href="{{ route('news') }}" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
    <div id="user-info-top" class="user-info pull-right">
                @if (Auth::check())
                <div class="dropdown">

                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="home">

                        <span>{{ Auth::user()->name }}</span></a>
                        <ul class="dropdown-menu mega_dropdown" role="menu">
                            <li><a href="{{ route('logout') }}">{{ __('Logout') }}</a></li>
                            <li><a href="order_history">{{ __('Tour Booked') }}</a></li>
                        </ul>
                    </div>
                </div>
                @else
                <a href="{{ route('login') }}">{{ __('Login') }}</a>
                <a href="{{ route('register') }}">Register</a>
            </div>
            @endif
        </div>
</nav>

    <!-- END nav -->