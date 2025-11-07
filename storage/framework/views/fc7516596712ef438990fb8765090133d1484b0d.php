<?php $__env->startSection('title'); ?> Competitions <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    
    <!-- ========================  Products ======================== -->

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Competitions</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Competitions</li>
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

                <?php $__currentLoopData = $competitions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $competition): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="property-box-5 p-box">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-pad">
                                <div class="property-thumbnail">
                                    <a href="<?php echo e(route('competition_detail',['id'=>encrypt($competition->id)])); ?>" class="property-img">
                                        <?php if(!empty($competition->image)): ?>
                                            <img src="<?php echo e(URL::asset(App\Models\Competition::DIR_STORAGE . $competition->image)); ?>" alt="property-box-5" class="img-fluid">
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
                                        <a href="<?php echo e(route('competition_detail',['id'=>encrypt($competition->id)])); ?>"><?php echo e($competition->title); ?></a>
                                    </h1>


                                    <!-- Paragraph -->
                                    <p><?php echo e($competition->short_description); ?></p>
                                    <p style="text-align: right;"><a href="<?php echo e(route('competition_detail',['id'=>encrypt($competition->id)])); ?>" class="text-primary">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="pagination-box text-center">
                    <?php echo e($competitions->links()); ?>

                    

                </div>
            </div>
        </div>
    </div>
</div>
<!-- properties list fullwidth end -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin_urvi\resources\views/front/pages/competitions.blade.php ENDPATH**/ ?>