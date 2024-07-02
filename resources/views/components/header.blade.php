<!-- .....:::::: Start Header Section :::::.... -->
<header class="header-section sticky-header d-none d-lg-block">
    <div class="header-wrapper">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <!-- Start Header Logo -->
                    <a href="{{ route('home') }}" class="header-logo">
                        <img src="{{asset('assets/images/logo.png')}}" alt="">
                    </a>
                    <!-- End Header Logo -->
                </div>
                <div class="col-auto">
                    <!-- Start Header Menu -->
                    <ul class="header-nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('services') }}">Service</a></li>
                        <li><a href="{{ route('projects') }}">Projects</a></li>
                        <li><a href="{{ route('blogs') }}">Blog</a></li>
                        <li><a href="{{ route('about')}}">About Me</a></li>
                        <li><a href="{{ route('contact')}}">Contact</a></li>
                    </ul>
                    <!-- End Header Menu -->
                </div>
                <div class="col">
                    <div class="header-btn-link text-end">
                        @if (Route::has('login'))
                        @auth

                            <a href="{{ url('dashboard')}}" class="btn btn-sm btn-outline-one icon-space-left">Dashboard <i class="fa-solid fa-arrow-right"></i></a>
                        @else
                            <a href="{{ route('login')}}" class="btn btn-sm btn-outline-one icon-space-left">Login <i class="fa-solid fa-arrow-right"></i></a>
                        @endauth
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- .....:::::: End Header Section :::::.... -->
