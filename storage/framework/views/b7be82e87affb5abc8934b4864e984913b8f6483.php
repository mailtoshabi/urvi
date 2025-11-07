<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Home_Page'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    
    <!-- ========================  Products ======================== -->

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Urvi Kosa</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Urvi Kosa</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- About us start -->
<div class="about-us content-area-7 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="about-carousel">
                    <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            
                            
                            
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo e(asset(Utility::FRONT_END.'assets/img/urvi_kosa2.jpg')); ?>" alt="Urvi Kosa" class="img-fluid">
                            </div>
                            

                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="about-info">
                    <br>
                    <h4><small>Seed vessel for a sustainable globe</small></h4>
                    
                    <p>The history of Kerala in Vernacular Architecture is the still existing centuries old buildings constructed with locally available materials. The building culture currently in practice has been diverted a lot from the vernacular practices which caused over exploitation of natural resources and negative impact on the climate.
                        As the current education and practices in the construction industry is based on the modern technologies and materials, there is a lack of knowledge and skills on vernacular architecture among the stakeholders in construction. Institutions to promote such vernacular architecture are thus a need as solution for the current environmental issues in line with the climatic conditions of Kerala.
                        </p>
                        <p><img src="<?php echo e(asset(Utility::FRONT_END.'assets/img/urvi_kosa.jpg')); ?>" alt="Urvi Kosa" class="img-fluid"></p>
                    <p>URVI FOUNDATION started an institute which aims to create a Hub of Alternative Education and Environmental Research Atmosphere. it’s a kind of seed vessel full of knowledge for a sustainable world. We named as ‘URVIKOSA’</p>
                    <p>This is acts as finishing school to provide guidance for new generation professional in developing their career in line with land typology and climatic conditions of Kerala. And it facilitates the research and development in the streams of sustainable, alternative and responsive architecture. Such developments and innovations only can keep the vernacular architecture live with developing lifestyle.</p>
                    <p>Considering the nature, resource and climate of Kerala, the institute’s major concentration is to be on earth, lime, bamboo, scrap, etc as building materials.</p>
                    <h3><small>Training Programs</small></h3>
                    <p>Trainings for professionals and students in Architecture and Engineering</p>
                    <ul>
                        <li><span><i class="fa fa-arrow-right"></i> Rammed Earth & Poured Earth Construction</span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	Arches, Vaults and Domes</span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	CSEB Production and Masonry</span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	Ferrocement Construction </span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	Mud and Lime Plastering</span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	Adobe Production and Masonry </span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	Cob and Wattle & Daub construction</span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	Bamboo for construction </span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	Technical testing of earth and earth based materials </span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	Design of Arches, Vaults and Domes </span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	Design of masonry walls with CSEB and Adobe </span></li>
                    </ul>
                    <h3><small>Courses (on campus)</small></h3>
                    <p><strong> School (for Architects & Engineers):</strong> The curriculum for this course will emphasize design practice and related theory, with case studies and an independent design-research project. Students will also work on practical, hands-on exercises related to materials and will have a short-term residency period on site. This program will target university level graduates of architecture and engineering (B.Arch, M.Arch, B.Eng, M.Eng).</p>
                    <p><strong> Course (for Masonry Technicians):</strong> The curriculum for this course will be similar to the curriculum for the Post-graduate course, with notable differences emphasizing techniques of earth, lime, bamboo, scrap materials, etc best suited for the climates in Kerala. The curriculum and student design projects will focus on the translation between design, engineering and construction through technical design, site supervision and enterprise management. There will be a medium term residency for on-site training. </p>
                    <p><strong> Course (for Masonry Craftsmen):</strong> The curriculum for this course will focus on topics pertaining to masonry craftsmanship, with additional topics selected according to the students’ level of knowledge and skill. The teaching methodology for this program will be predominantly hands-on and practice-oriented, with a long-term vocational residency of on-site training. This program will target underprivileged building craftsmen and unskilled workers with a strong motivation to invest in professional education, and will be subsidized to answer to an acute need for more skilled and resource-conscious building professionals in India.</p>
                    <h3><small>Online + On Campus Courses</small></h3>
                    <p>Online courses will be conducted for the theoretical part of the above trainings and courses. Completion of these courses will be after practical training on the same subject in the campus.</p>
                    <ul>
                        <li><span><i class="fa fa-arrow-right"></i> Research Assistance</span></li>
                        <li><span><i class="fa fa-arrow-right"></i>	Self sustainable village planning</span></li>
                    </ul>
                    <!-- Counters start -->
                    <!-- <div class="counters cts">
                        <div class="counter-box">
                            <h1 class="counter">850</h1>
                            <h5>Deals Success</h5>
                        </div>
                        <div class="counter-box">
                            <h1 class="counter">786</h1>
                            <h5>Finincing</h5>
                        </div>
                        <div class="counter-box">
                            <h1 class="counter">950</h1>
                            <h5>Insurance Done</h5>
                        </div>
                    </div> -->
                    <!-- Counters end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About us end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/urvifoundation/public_html/admin_urvi/resources/views/front/pages/urvi_kosa.blade.php ENDPATH**/ ?>