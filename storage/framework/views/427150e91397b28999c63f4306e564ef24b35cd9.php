<?php $__env->startSection('title'); ?> <?php echo e($project->title); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1><?php echo e($project->title); ?></h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active"><?php echo e($project->title); ?></li>
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
                            <img src="<?php echo e(URL::asset(App\Models\Project::DIR_STORAGE . $project->image)); ?>" class="img-fluid" alt="properties-photo">
                        </div>

                    </div>

                </div>

                <!-- Property description start -->
                <div class="property-description mb-60">
                    <h3 class="heading-3"><?php echo e($project->title); ?></h3>
                    <?php echo $project->description; ?>

                </div>



                <!-- Property vedio start -->
                

            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        <h5 class="sidebar-title">Recent Projects</h5>
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
                    <!-- Social list start -->
                    

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page start -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/urvifoundation/public_html/admin_urvi/resources/views/front/pages/project_details.blade.php ENDPATH**/ ?>