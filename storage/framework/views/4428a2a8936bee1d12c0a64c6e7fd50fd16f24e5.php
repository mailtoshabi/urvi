<!-- Sidenav start -->
<nav id="sidebar" class="nav-sidebar">
    <!-- Close btn-->
    <div id="dismiss">
        <i class="fa fa-close"></i>
    </div>
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <img src="<?php echo e(asset(Utility::FRONT_END.'assets/img/black-logo.jpg')); ?>" alt="sidebarlogo">
        </div>
        <div class="sidebar-navigation">
            <h3 class="heading">Pages</h3>
            <ul class="menu-list">
                <li><a href="<?php echo e(route('index')); ?>" class="active pt0">Home </a>
                    
                </li>
                <li>
                    <a href="<?php echo e(route('about')); ?>">About Us </a>
                    
                </li>
                <li>
                    <a href="<?php echo e(route('urvi_kosa')); ?>">Urvikosa
                        
                    </a>
                    
                </li>
                <li>
                    <a href="<?php echo e(route('workshops.upcoming')); ?>"> Workshops <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('workshops.upcoming')); ?>">Up Coming
                                
                            </a>
                            
                        </li>
                        <li>
                            <a href="<?php echo e(route('workshops.completed')); ?>">Completed </a>
                            
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="<?php echo e(route('active.projects')); ?>">Projects <em class="fa fa-chevron-down"></em></a>
                    <ul>
                        <li>
                            <a href="<?php echo e(route('active.projects')); ?>">Active Projects<em class="fa fa-chevron-down"></em></a>
                            <!-- <ul>
                                <li><a href="blog-columns-2col.html">2 Columns</a></li>
                                <li><a href="blog-columns-3col.html">3 Columns</a></li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="<?php echo e(route('upcoming.projects')); ?>">Upcoming Projects <em class="fa fa-chevron-down"></em></a>
                            <!-- <ul>
                                <li><a href="blog-classic-sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="blog-classic-sidebar-left.html">Left Sidebar</a></li>
                                <li><a href="blog-classic-fullwidth.html">FullWidth</a></li>
                            </ul> -->
                        </li>

                    </ul>
                </li>
                <li><a href="<?php echo e(route('researches')); ?>">R&D</a></li>
                <li><a href="<?php echo e(route('events')); ?>">Events</a></li>
                <li><a href="<?php echo e(route('media')); ?>">Media</a></li>
                <li><a href="<?php echo e(route('contact')); ?>">Contact</a></li>


                
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
<?php /**PATH C:\xampp\htdocs\admin_urvi\resources\views/front/includes/nav.blade.php ENDPATH**/ ?>