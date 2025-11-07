<?php $__env->startSection('title'); ?> <?php echo e($type); ?> workshops <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    
    <!-- ========================  Products ======================== -->

<!-- Sub banner start -->
<div class="workshops sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1><?php echo e($type); ?> workshops</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active"><?php echo e($type); ?> workshops</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Photo gallery start -->
<div class="photo-gallery content-area-2">
    <div class="container">
        <div class="main-title">
            
            
        </div>
        <div class="row filter-portfolio">
            <div class="gallery">
                <?php $__currentLoopData = $workshops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workshop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                        <div class="portfolio-item property-magnify-gallery">
                            <?php if(!empty($workshop->image)): ?>
                            <?php
                                $image_url = URL::asset(App\Models\Event::DIR_STORAGE . $workshop->image);
                                $target = '_self';
                                $class = '';
                            ?>

                            <?php endif; ?>


                            <?php if(!empty($workshop->image)): ?>
                                <a href="<?php echo e($image_url); ?>" title="" target="<?php echo e($target); ?>" class="<?php echo e($class); ?>">
                                    <img src="<?php echo e(URL::asset(App\Models\Event::DIR_STORAGE . $workshop->image)); ?>" alt="gallery" class="img-fluid">
                                </a>
                            <?php endif; ?>
                            
                            <div class="portfolio-content">
                                <div class="portfolio-content-inner">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<!-- Photo gallery end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin_urvi\resources\views/front/pages/workshops.blade.php ENDPATH**/ ?>