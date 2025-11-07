<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Meta tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <!--Title-->
    <title><?php echo $__env->yieldContent('title'); ?> | Urvi Foundation</title>

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/bootstrap.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/magnific-popup.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/jquery.selectBox.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/dropzone.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/rangeslider.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/animate.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/leaflet.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/slick.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/slick-theme.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/map.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/jquery.mCustomScrollbar.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset(Utility::FRONT_END.'assets/fonts/font-awesome/css/font-awesome.min.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset(Utility::FRONT_END.'assets/fonts/flaticon/font/flaticon.css')); ?>">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="<?php echo e(URL::asset('front/assets/img/favicon.ico" type="image/x-icon')); ?>" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800%7CPlayfair+Display:400,700%7CRoboto:100,300,400,400i,500,700">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="<?php echo e(URL::asset('front/assets/css/style.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('front/assets/css/skins/default.css')); ?>">
    <style>
        .option-panel {
            display: none;
        }

        .main-header .logo-2 img {
            height: 65px;
        }

        .main-header .logo-2 {
            padding: 10px 0;
        }

        .main-header .navbar-expand-lg .navbar-nav .submit-btn {
            background: #35241e;
        }

        .top-header-bg {
            background: #35241e;
        }

        .main-header .navbar-expand-lg .navbar-nav .active .nav-link {
            color: #35241e !important;
        }

        .main-header .navbar-expand-lg .navbar-nav .nav-link:hover {
            color: #35241e !important;
        }

        .banner .banner-slider-inner {
            background-color:rgba(0, 0, 60, 0.45);
        }

        .btn-secton .carousel-indicators .active {
    background-color: #35241e;
        }

        .property-box-6 h3 a {
            color: #35241e;
        }
        #page_scroller {
            background: #35241e;
        }
        .btn-4 {
            background: #35241e;
        }

        .btn-4:after {
            background: #063810;
        }
        .services-info .icon i {
            color: #35241e;
        }

        .services-info:hover h3 a:hover {
            color: #35241e;
        }

        .services-info:after {
            background: #35241e;
        }
        .services-info:before {
            background: #35241e;
        }

        .btn-5:after {
            background: #063810;
        }

        a:hover {
            color: #35241e;
            text-decoration: underline;
        }

        .btn-5 {
            color: #35241e;
        }

        .blog-2 .title::before {
            background: #063810;
        }

        .testimonial-3 .testimonial-info .carousel-indicators .active {
            background: #35241e;
        }


        element.style {
        }
        .fa {
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }

        .testimonial-inner ul {
            list-style: inside;
            margin: 0;
            padding: 0;
            color: #535353;
            text-align: left;
        }

        .project_details ul {
            list-style: outside;
            margin: 0;
            padding: 0;
            color: #535353;
            text-align: left;
        }

        .urvi_cosa.sub-banner {
            background: url(<?php echo e(asset(Utility::FRONT_END.'assets/img/urvi_kosa_main.jpg')); ?>) top left repeat;
            background-size: cover;
            height: 350px;
            background-position: center center;
            background-repeat: no-repeat;
            position: relative;
            /* background-color: rgba(36, 42, 53, 0.7); */
        }

        .urvi_cosa.sub-banner:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: none;
        }

        .workshops.sub-banner {
            background: url(<?php echo e(asset(Utility::FRONT_END.'assets/img/workshop_main.jpg')); ?>) top left repeat;
            background-size: cover;
            height: 350px;
            background-position: center center;
            background-repeat: no-repeat;
            position: relative;
            /* background-color: rgba(36, 42, 53, 0.7); */
        }

        .workshops.sub-banner:before {
            position: absolute;
            content: '';
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 60, 0.45);
        }

        @media (max-width: 992px) {
        .navbar-light .navbar-toggler {
            background: #35241e;
            color: #fff;
        }
        }

        .activities p {
            text-align: justify;
        }
        .activities p i {
            font-size: 15px;
            margin-right: 10px;
        }
    </style>
<?php echo $__env->yieldContent('css'); ?>
</head>

<body id="top" class="index-body">

    <?php echo $__env->make('front.includes.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('front.includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('front.includes.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('script'); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\admin_urvi\resources\views/front/layouts/master.blade.php ENDPATH**/ ?>