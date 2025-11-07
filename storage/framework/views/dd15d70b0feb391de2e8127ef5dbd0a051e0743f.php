<?php $__env->startSection('title'); ?> <?php echo e($type); ?> workshops <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    
    <!-- ========================  Products ======================== -->

<!-- Sub banner start -->
<div class="sub-banner">
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

<!-- properties list fullwidth start -->
<div class="properties-list-fullwidth content-area-2">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">

                <?php $__currentLoopData = $workshops; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $workshop): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="property-box-5 p-box">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-pad">
                                <div class="property-thumbnail">
                                    <a href="<?php echo e(route('workshop_detail',['id'=>encrypt($workshop->id)])); ?>" class="property-img">
                                        <?php if(!empty($workshop->image)): ?>
                                            <img src="<?php echo e(URL::asset(App\Models\Event::DIR_STORAGE . $workshop->image)); ?>" alt="property-box-5" class="img-fluid">
                                        <?php else: ?>
                                            <img src="#" alt="property-box-5" class="img-fluid">
                                        <?php endif; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 align-self-center col-pad">
                                <div class="detail">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="<?php echo e(route('workshop_detail',['id'=>encrypt($workshop->id)])); ?>"><?php echo e($workshop->title); ?></a>
                                    </h1>
                                    <?php if(empty($workshop->location)): ?>

                                    <?php else: ?>
                                    <!-- Location -->
                                    <div class="location">
                                        <a href="<?php echo e(route('workshop_detail',['id'=>encrypt($workshop->id)])); ?>">
                                            <i class="fa fa-map-marker"></i><?php echo e($workshop->location); ?>

                                        </a>
                                    </div>
                                    <?php endif; ?>

                                    <!-- Paragraph -->
                                    <p><?php echo e($workshop->short_description); ?></p>
                                    <p style="text-align: right;"><a href="<?php echo e(route('workshop_detail',['id'=>encrypt($workshop->id)])); ?>" class="text-primary">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="pagination-box text-center">
                    <?php echo e($workshops->links()); ?>

                    

                </div>
            </div>
        </div>
    </div>
</div>
<!-- properties list fullwidth end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/urvifoundation/public_html/admin_urvi/resources/views/front/pages/workshops.blade.php ENDPATH**/ ?>