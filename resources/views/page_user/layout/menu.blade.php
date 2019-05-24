<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}">Adventure</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>        
        @if(session('lang') == 'vi')
        <a href="{{ route('change_language', 'en') }}"><span style="font-size: 15px; font-weight: 500;">{{ __('text.en') }}</span></a>
        @else
        <a href="{{ route('change_language', 'vi') }}"><span style="font-size: 15px; font-weight: 500;">{{ __('text.vi') }}</span></a>
        @endif
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if ($current == 'home')active @endif"><a href="{{ route('home') }}" class="nav-link">{{ __('text.Home') }}</a></li>
                <li class="nav-item @if ($current == 'about')active @endif"><a href="about.html" class="nav-link">{{ __('text.About') }}</a></li>
                <li class="nav-item @if ($current == 'Tour')active @endif"><a href="{{ route('tours') }}" class="nav-link">{{ __('text.Tours') }}</a></li>
                <li class="nav-item @if ($current == 'hotel')active @endif"><a href="{{ route('hotels') }}" class="nav-link">{{ __('text.Hotels') }}</a></li>
                <li class="nav-item @if ($current == 'news')active @endif"><a href="{{ route('news') }}" class="nav-link">{{ __('text.News') }}</a></li>
                <li class="nav-item @if ($current == 'contact')active @endif"><a href="{{ route('contact') }}" class="nav-link">{{ __('text.Contact') }}</a></li>
            </ul>
        </div>
    </div>
    <div id="user-info-top" class="user-info pull-right">
        @if (Auth::check())
        <div class="dropdown">

            <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="home">

                <span>{{ Auth::user()->name }}</span></a>
                <ul class="dropdown-menu mega_dropdown" role="menu">
                    <li><a href="{{ route('logout') }}">{{ __('text.Logout') }}</a></li>
                    <li><a href="order_history">{{ __('text.Tour Booked') }}</a></li>
                </ul>
            </div>
        </div>
        @else
        <a href="{{ route('login') }}"><span style="font-size: 15px; font-weight: 500;">{{ __('text.Login') }}/</span></a>
        <a href="{{ route('register') }}"><span style="font-size: 15px; font-weight: 500;">{{ __('text.Register') }}</span></a>
    </div>
    @endif
</div>
</nav>

    <!-- END nav -->