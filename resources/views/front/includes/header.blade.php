<!-- Google Tag Manager (noscript) -->
<!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PDTWJ3Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
<!-- End Google Tag Manager (noscript) -->
<!-- <div class="page_loader"></div> -->

<!-- Top header start -->
<header class="top-header top-header-bg" id="top-header-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-7">
                {{-- <div class="list-inline">
                    <a href="tel:1-7X0-555-8X22"><i class="fa fa-phone"></i>+0477 85X6 552</a>
                    <a href="#" class="mr-0"><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>20/F Green Road, Dhanmondi,</a>
                </div> --}}
            </div>
            <div class="col-lg-6 col-md-5 col-sm-5">
                <ul class="top-social-media pull-right">
                    <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                    <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <!-- <li>
                        <a href="login.html" class="sign-in"><i class="fa fa-sign-in"></i> Login or Register</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
</header>
<!-- Top header end -->

<!-- main header start -->
<header class="main-header do-sticky" id="main-header-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light rounded">
                    <a class="navbar-brand logo-2" href="{{ route('index') }}">
                        <img src="{{ asset(Utility::FRONT_END.'assets/img/black-logo.jpg') }}" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" id="drawer">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav  justify-content-center">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="{{ route('index') }}" id="as" >
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('about') }}" aria-haspopup="true" aria-expanded="false">
                                    About Us
                                </a>
                                <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Who we are</a>

                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Mission</a>

                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="#">Vision</a>

                                    </li>

                                </ul> -->
                            </li>

                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="{{ route('urvi_kosa') }}" id="as" >
                                    Urvikosa
                                </a>
                            </li>

                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="{{ route('workshops.upcoming') }}" id="as" >
                                    Workshops
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="{{ route('workshops.upcoming') }}">Upcoming</a>

                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="{{ route('workshops.completed') }}">Completed</a>

                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Projects
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item " href="{{ route('active.projects')}}">Active Projects</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item " href="{{ route('upcoming.projects')}}">Upcoming Projects</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('researches')}}" aria-haspopup="true" aria-expanded="false">
                                    R&D
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('events')}}" aria-haspopup="true" aria-expanded="false">
                                    Events
                                </a>
                            </li>
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('campigns')}}" aria-haspopup="true" aria-expanded="false">
                                    Campigns
                                </a>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('researches')}}" aria-haspopup="true" aria-expanded="false">
                                    Recognitions
                                </a>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('researches')}}" aria-haspopup="true" aria-expanded="false">
                                    Competitions
                                </a>
                            </li> --}}

                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Events
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item " href="{{ route('events')}}">Events</a>
                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item " href="{{ route('workshops')}}">Workshops</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item " href="{{ route('campigns')}}">Campigns</a></li>
                                </ul>
                            </li> --}}

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('media')}}" aria-haspopup="true" aria-expanded="false">
                                    Media
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('contact')}}" aria-haspopup="true" aria-expanded="false">
                                    Contact
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav ml-auto  justify-content-end">
                            <li class="nav-item">
                                <a  href="#" class="submit-btn">
                                    Join Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->


