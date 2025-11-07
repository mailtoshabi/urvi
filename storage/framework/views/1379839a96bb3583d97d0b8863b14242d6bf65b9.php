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
                    <a class="navbar-brand logo-2" href="<?php echo e(route('index')); ?>">
                        <img src="<?php echo e(asset(Utility::FRONT_END.'assets/img/black-logo.jpg')); ?>" alt="logo">
                    </a>
                    <button class="navbar-toggler" type="button" id="drawer">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav  justify-content-center">
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="<?php echo e(route('index')); ?>" id="as" >
                                    Home
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?php echo e(route('about')); ?>" aria-haspopup="true" aria-expanded="false">
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
                                <a class="nav-link dropdown-toggle" href="<?php echo e(route('urvi_kosa')); ?>" id="as" >
                                    Urvikosa
                                </a>
                            </li>

                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="<?php echo e(route('workshops.upcoming')); ?>" id="as" >
                                    Workshops
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="<?php echo e(route('workshops.upcoming')); ?>">Upcoming</a>

                                    </li>
                                    <li class="dropdown-submenu"><a class="dropdown-item" href="<?php echo e(route('workshops.completed')); ?>">Completed</a>

                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink6" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Projects
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li class="dropdown-submenu"><a class="dropdown-item " href="<?php echo e(route('active.projects')); ?>">Active Projects</a></li>
                                    <li class="dropdown-submenu"><a class="dropdown-item " href="<?php echo e(route('upcoming.projects')); ?>">Upcoming Projects</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?php echo e(route('researches')); ?>" aria-haspopup="true" aria-expanded="false">
                                    R&D
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?php echo e(route('events')); ?>" aria-haspopup="true" aria-expanded="false">
                                    Events
                                </a>
                            </li>
                            
                            
                            

                            

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?php echo e(route('media')); ?>" aria-haspopup="true" aria-expanded="false">
                                    Media
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="<?php echo e(route('contact')); ?>" aria-haspopup="true" aria-expanded="false">
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


<?php /**PATH C:\xampp\htdocs\admin_urvi\resources\views/front/includes/header.blade.php ENDPATH**/ ?>