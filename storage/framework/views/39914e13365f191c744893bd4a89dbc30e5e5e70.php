<?php $__env->startSection('title'); ?> <?php echo e($research->title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1><?php echo e($research->title); ?></h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active"><?php echo e($research->title); ?></li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-2">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-8 col-md-12 slider">

                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">

                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="<?php echo e(URL::asset(App\Models\Research::DIR_STORAGE . $research->image)); ?>" class="img-fluid" alt="properties-photo">
                        </div>

                    </div>

                </div>

                <!-- Property description start -->
                <div class="property-description mb-60">
                    <h3 class="heading-3"><?php echo e($research->title); ?></h3>
                    <?php echo $research->description; ?>

                </div>



                <!-- Property vedio start -->
                

            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Recent Researches</h5>
                        <?php $__currentLoopData = $recentResearches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recentResearch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="media mb-4">
                            <a href="<?php echo e(route('research_detail',['id'=>encrypt($recentResearch->id)])); ?>">
                                <img src="<?php echo e(URL::asset(App\Models\Research::DIR_STORAGE . $recentResearch->image)); ?>" alt="sub-property">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="<?php echo e(route('research_detail',['id'=>encrypt($recentResearch->id)])); ?>"><?php echo e($recentResearch->title); ?></a>
                                </h5>
                                
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                    <!-- Social list start -->
                    

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page start -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin_urvi\resources\views/front/pages/research_details.blade.php ENDPATH**/ ?>