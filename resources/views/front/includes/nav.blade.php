<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="{{ asset(Utility::FRONT_END.'assets/img/black-logo.jpg') }}" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li><a href="{{ route('index') }}" class="active pt0">Home </a>
                    {{-- <ul>
                        <li><a href="index.html">Index 1</a></li>
                        <li><a href="index-2.html">Index 2</a></li>
                        <li><a href="index-3.html">Index 3</a></li>
                        <li><a href="index-4.html">Index 4</a></li>
                        <li><a href="index-5.html">Index 5</a></li>
                        <li><a href="index-6.html">Index 6</a></li>
                        <li><a href="index-7.html">Index 7</a></li>
                        <li><a href="index-8.html">Index 8</a></li>
                        <li><a href="index-9.html">Index 9</a></li>
                    </ul> --}}
                </li>
                <li>
                    <a href="{{ route('about') }}">About Us </a>
                    {{-- <ul>
                        <li>
                            <a href="#">List Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-list-rightside.html">Right Sidebar</a></li>
                                <li><a href="properties-list-leftside.html">Left Sidebar</a></li>
                                <li><a href="properties-list-fullwidth.html">Fullwidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Grid Layout <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-grid-rightside.html">Right Sidebar</a></li>
                                <li><a href="properties-grid-leftside.html">Left Sidebar</a></li>
                                <li><a href="properties-grid-fullwidth.html">Fullwidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Map View <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-map-rightside-list.html">Map List Right Sidebar</a></li>
                                <li><a href="properties-map-leftside-list.html">Map List Left Sidebar</a></li>
                                <li><a href="properties-map-rightside-grid.html">Map Grid Right Sidebar</a></li>
                                <li><a href="properties-map-leftside-grid.html">Map Grid Left Sidebar</a></li>
                                <li><a href="properties-map-full.html">Map FullWidth</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Property Detail <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="properties-details.html">Property Detail 1</a></li>
                                <li><a href="properties-details-2.html">Property Detail 2</a></li>
                                <li><a href="properties-details-3.html">Property Detail 3</a></li>
                            </ul>
                        </li>
                    </ul> --}}
                </li>
                <li>
                    <a href="{{ route('urvi_kosa') }}">Urvikosa
                        {{-- <em class="fa fa-chevron-down"></em> --}}
                    </a>
                    {{-- <ul>
                        <li>
                            <a href="#">My Account <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="user-profile.html">User profile</a></li>
                                <li><a href="my-properties.html">My Properties</a></li>
                                <li><a href="favorited-properties.html">Favorited Properties</a></li>
                                <li><a href="submit-property.html">Submit Property</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">About <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="about-me.html">About Me</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Services <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="services.html">Services 1</a></li>
                                <li><a href="services-2.html">Services 2</a></li>
                                <li><a href="services-details.html">Services Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pricing Tables <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="pricing-tables-1.html">Pricing Tables 1</a></li>
                                <li><a href="pricing-tables-2.html">Pricing Tables 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Gallery <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="gallery-1.html">Gallery 1</a></li>
                                <li><a href="gallery-2.html">Gallery 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Faq <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="faq-1.html">Faq 1</a></li>
                                <li><a href="faq-2.html">Faq 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Typography <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="typography.html">Typography 1</a></li>
                                <li><a href="typography-2.html">Typography 2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">404 Error <em class="fa fa-chevron-down"></em></a>
                            <ul>
                                <li><a href="pages-404.html">404 Error 1</a></li>
                                <li><a href="pages-404-2.html">404 Error 2</a></li>
                            </ul>
                        </li>
                        <li><a href="properties-comparison.html">Properties Comparison</a></li>
                        <li><a href="search-brand.html">Search Brand</a></li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                        <li><a href="login.html">Login/Register</a></li>
                    </ul> --}}
                </li>
                <li>
                    <a href="{{ route('workshops.upcoming') }}"> Workshops <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="{{ route('workshops.upcoming') }}">Up Coming
                                {{-- <em class="fa fa-chevron-down"></em> --}}
                            </a>
                            {{-- <ul>
                                <li><a href="agent-list.html">Agent List 1</a></li>
                                <li><a href="agent-list-2.html">Agent List 2</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            <a href="{{ route('workshops.completed') }}">Completed </a>
                            {{-- <ul>
                                <li><a href="agent-grid.html">Agent Grid 1</a></li>
                                <li><a href="agent-grid-2.html">Agent Grid 2</a></li>
                                <li><a href="agent-grid-3.html">Agent Grid 3</a></li>
                            </ul> --}}
                        </li>
                        {{-- <li><a href="agent-detail.html">Agent Detail</a></li> --}}
                    </ul>
                </li>
                <li>
                    <a href="{{ route('active.projects')}}">Projects <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="{{ route('active.projects')}}">Active Projects<em class="fa fa-chevron-down"></em></a>
                            <!-- <ul>
                                <li><a href="blog-columns-2col.html">2 Columns</a></li>
                                <li><a href="blog-columns-3col.html">3 Columns</a></li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="{{ route('upcoming.projects')}}">Upcoming Projects <em class="fa fa-chevron-down"></em></a>
                            <!-- <ul>
                                <li><a href="blog-classic-sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="blog-classic-sidebar-left.html">Left Sidebar</a></li>
                                <li><a href="blog-classic-fullwidth.html">FullWidth</a></li>
                            </ul> -->
                        </li>

                    </ul>
                </li>
                <li><a href="{{ route('researches')}}">R&D</a></li>
                <li><a href="{{ route('events')}}">Events</a></li>
                <li><a href="{{ route('media')}}">Media</a></li>
                <li><a href="{{ route('contact')}}">Contact</a></li>


                {{-- <li><a href="#">Contact <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li><a class="dropdown-item" href="contact-1.html">Contact 1</a></li>
                        <li><a class="dropdown-item" href="contact-2.html">Contact 2</a></li>
                        <li><a class="dropdown-item" href="contact-3.html">Contact 3</a></li>
                    </ul>
                </li>
                <li>
                    <a href="submit-property.html">Submit Property</a>
                </li> --}}
            </ul>
        </div>
        <div class="get-in-touch">
            <h3 class="heading">Get in Touch</h3>
            <div class="media">
                <i class="fa fa-phone"></i>
                <div class="media-body">
                    <a href="tel:0477-0477-8556-552">+91 9746638023</a>
                </div>
            </div>
            <div class="media">
                <i class="fa fa-envelope"></i>
                <div class="media-body">
                    <a href="#">urvifoundation.env@gmail.com</a>
                </div>
            </div>
            {{-- <div class="media mb-0">
                <i class="fa fa-fax"></i>
                <div class="media-body">
                    <a href="#">info@urvifoundation.org</a>
                </div>
            </div> --}}
        </div>
        <div class="get-social">
            <h3 class="heading">Get Social</h3>
            <a href="#" class="facebook-bg">
                <i class="fa fa-facebook"></i>
            </a>
            <a href="#" class="twitter-bg">
                <i class="fa fa-twitter"></i>
            </a>
            <a href="#" class="google-bg">
                <i class="fa fa-google"></i>
            </a>
            <a href="#" class="linkedin-bg">
                <i class="fa fa-linkedin"></i>
            </a>
        </div>
    </div>
</nav>
<!-- Sidenav end -->
