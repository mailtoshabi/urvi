<!-- Footer 2 start -->
<footer class="footer-1">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>Contact Us</h4>
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i>20/F Green Road, Dhanmondi, Dhaka
                        </li>
                        <li>
                            <i class="fa fa-envelope"></i><a href="mailto:sales@hotelempire.com">info@urvifoundation.org</a>
                        </li>
                        <li>
                            <i class="fa fa-phone"></i><a href="tel:+55-417-634-7071">+0477 85X6 552</a>
                        </li>
                        <li>
                            <i class="fa fa-fax"></i>+0487 85X6 224
                        </li>
                        <li>
                            <i class="fa fa-skype"></i><a href="mailto:info@urvifoundation.org">info@urvifoundation.org</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6">
                <div class="footer-item">
                    <h4>
                        Useful Links
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="<?php echo e(route('index')); ?>"><i class="fa fa-angle-right"></i>Home</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('about')); ?>"><i class="fa fa-angle-right"></i>About us</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('workshops.upcoming')); ?>"><i class="fa fa-angle-right"></i>Projects</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('researches')); ?>"><i class="fa fa-angle-right"></i>Researches</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('events')); ?>"><i class="fa fa-angle-right"></i>Events</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('media')); ?>"><i class="fa fa-angle-right"></i>Media</a>
                        </li>
                        <li>
                            <a href="<?php echo e(route('contact')); ?>"><i class="fa fa-angle-right"></i>Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-item recent-posts">
                    <h4>RECENT PROJECTS</h4>
                    <?php $__currentLoopData = $recentProjects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentProject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="media mb-4">
                            <a href="<?php echo e(route('project_detail',['id'=>encrypt($recentProject->id)])); ?>">
                                <img src="<?php echo e(URL::asset(App\Models\Project::DIR_STORAGE . $recentProject->image)); ?>" alt="<?php echo e($recentProject->title); ?>">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="<?php echo e(route('project_detail',['id'=>encrypt($recentProject->id)])); ?>"><?php echo e($recentProject->title); ?></a>
                                </h5>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-item clearfix">
                    <div class="submitNewsletter">
                        <h4>About US</h4>
                        <div class="Subscribe-box">
                            <p>URVI foundation is an NGO founded for a vision for creating self-sustainable and value-based society embedded in social justice and humanity.</p>
                            
                            <a href="<?php echo e(route('about')); ?>" class="text-primary text-right">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <p class="copy">© 2024 <a href="#">Urvi Foundation.</a> All Rights Reserved. | Powered by <a href="https://webmahal.com">Web Mahal.</a></p>
                </div>
                <div class="col-lg-4 col-md-12">
                    <ul class="social-list clearfix">
                        <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer 2 end -->



<!-- External JS libraries -->
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/jquery-2.2.0.min.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/popper.min.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/bootstrap.min.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/jquery.selectBox.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/rangeslider.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/jquery.magnific-popup.min.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/jquery.filterizr.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/wow.min.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/backstretch.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/jquery.countdown.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/jquery.scrollUp.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/particles.min.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/typed.min.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/dropzone.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/jquery.mb.YTPlayer.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/leaflet.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/leaflet-providers.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/leaflet.markercluster.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/slick.min.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/maps.js"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4omYJlOaP814WDcCG8eubXcbhB-44Uac"></script>
<script src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/ie-emulation-modes-warning.js"></script>
<!-- Custom JS Script -->
<script  src="https://storage.googleapis.com/theme-vessel-items/checking-sites/xero-2-html/HTML/main/assets/js/app.js"></script>
<?php /**PATH /home/urvifoundation/public_html/admin_urvi/resources/views/front/includes/footer.blade.php ENDPATH**/ ?>