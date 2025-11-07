<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.Home_Page'); ?> <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    
    <!-- ========================  Products ======================== -->

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Media</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Media</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Photo gallery start -->
<div class="photo-gallery content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Media</h1>
            
        </div>
        <div class="row filter-portfolio">
            <div class="gallery">
                <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $media): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                        <div class="portfolio-item property-magnify-gallery">
                            <?php if($media->type==Utility::MEDIA_TYPE_IMAGE): ?>
                            <?php
                                $image_url = URL::asset('storage/medias/' . $media->image);
                                $target = '_self';
                                $class = '';
                            ?>
                            <?php elseif($media->type==Utility::MEDIA_TYPE_VIDEO && (!empty($media->youtube_code))): ?>
                            <?php
                                $image_url = $media->youtube_code;
                                $target = '_blank';
                                $class = 'media_link';
                            ?>
                            <?php elseif($media->type==Utility::MEDIA_TYPE_LINK && (!empty($media->media_link))): ?>
                            <?php
                                $image_url = $media->media_link;
                                $target = '_blank';
                                $class = 'media_link';
                            ?>
                            <?php endif; ?>


                            <?php if(!empty($media->image)): ?>
                                <a href="<?php echo e($image_url); ?>" title="<?php echo e($media->title); ?>" target="<?php echo e($target); ?>" class="<?php echo e($class); ?>">
                                    <img src="<?php echo e(URL::asset('storage/medias/' . '750x500_' . $media->image)); ?>" alt="gallery" class="img-fluid">
                                </a>
                            <?php else: ?>
                                <a href="<?php echo e($image_url); ?>" title="<?php echo e($media->title); ?>" target="<?php echo e($target); ?>" class="<?php echo e($class); ?>">
                                    <img src="<?php echo e(asset(Utility::FRONT_END.'assets/img/gallery_default.png')); ?>" alt="gallery" class="img-fluid">
                                </a>
                            <?php endif; ?>
                            
                            <div class="portfolio-content">
                                <div class="portfolio-content-inner">
                                    <p><?php echo e($media->title); ?></p>
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

<?php $__env->startSection('script'); ?>
<script>
    $(document).ready(function() {
        $('a.media_link').click(function(event){
        event.preventDefault();
        window.open(this.href);
        return false;
  });

    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin_urvi\resources\views/front/pages/media.blade.php ENDPATH**/ ?>