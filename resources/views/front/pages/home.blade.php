@extends('front.layouts.master')
@section('title') @lang('translation.Home_Page') @endsection

@section('content')

    {{-- @component('front.components.breadcrumb')
        @slot('title') Categories @endslot
        @slot('bg_img', 'assets/images/gallery-2.jpg')
    @endcomponent --}}
    <!-- ========================  Products ======================== -->

<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active item-bg">
                <img class="d-block w-100 h-100" src="{{ asset(Utility::FRONT_END.'assets/img/slider/1.JPG') }}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner-2">
                        <div class="t-center">
                            {{-- <h5 data-animation="animated fadeInDown delay-05s">Urvi is</h5> --}}
                            <h1 data-animation="animated fadeInDown delay-05s">Eco conscious practices</h1>
                            <!-- <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-2 btn-theme"><span>More Details</span></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="{{ asset(Utility::FRONT_END.'assets/img/slider/2.JPG') }}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner-2">
                        <div class="t-right">
                            {{-- <h5 data-animation="animated fadeInDown delay-05s">Urvi promots</h5> --}}
                            <h1 data-animation="animated fadeInDown delay-05s">Traditional knowledge and sustainability</h1>
                            <!-- <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-2 btn-theme"><span>More Details</span></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="{{ asset(Utility::FRONT_END.'assets/img/slider/3.JPG') }}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner-2">
                        <div class="t-left">
                            <!-- <h5 data-animation="animated fadeInDown delay-05s">The Best Real Estate Deals</h5> -->
                            <h1 data-animation="animated fadeInDown delay-05s">Global Dialogues. Local Impact</h1>
                            <!-- <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-2 btn-theme"><span>More Details</span></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="{{ asset(Utility::FRONT_END.'assets/img/slider/7.jpg') }}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner-2">
                        <div class="t-left">
                            <!-- <h5 data-animation="animated fadeInDown delay-05s">The Best Real Estate Deals</h5> -->
                            <h1 data-animation="animated fadeInDown delay-05s">Locally rooted, globally known</h1>
                            <!-- <a data-animation="animated fadeInUp delay-10s" href="#" class="btn btn-2 btn-theme"><span>More Details</span></a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="{{ asset(Utility::FRONT_END.'assets/img/slider/4.JPG') }}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner-2">
                        <div class="t-left">
                            <h1 data-animation="animated fadeInDown delay-05s">Hands on training programs</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="{{ asset(Utility::FRONT_END.'assets/img/slider/5.jpg') }}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner-2">
                        <div class="t-left">
                            <h1 data-animation="animated fadeInDown delay-05s">Research and Developments</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item item-bg">
                <img class="d-block w-100 h-100" src="{{ asset(Utility::FRONT_END.'assets/img/slider/6.jpg') }}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner-2">
                        <div class="t-left">
                            <h1 data-animation="animated fadeInDown delay-05s">Skill training in different layers</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="btn-secton">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
        </div>
    </div>
</div>
<!-- banner end -->
{{-- @if(!empty($recentWorkshop)) --}}
<!-- Testimonial 3 start -->
<div class="testimonial-3 content-area-2 ">
    <div class="container">
        <!-- Main title -->
        {{-- <div class="main-title">
            <h1>Our Testimonial</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div> --}}
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="row testimonial-info">
                    <div class="col-lg-6 col-md-12 col-pad none-992">
                        <div class="photo">
                            {{-- <img src="{{ asset(Utility::FRONT_END.'assets/img/workshop1.jpg') }}" alt="testimonia3" class="img-fluid"> --}}
                                <img src="{{ asset(Utility::FRONT_END.'assets/img/home.jpg') }}" alt="property-box-5" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-pad align-self-center">
                        <div class="detail">
                            <div class="testimonial-inner">
                                <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner" style="text-align: justify;">
                                        <div class="carousel-item active">
                                            {{-- <h4>{{ $recentWorkshop->title }}</h4> --}}
                                            <p>URVI foundation is an NGO founded for a vision for creating self-sustainable and value-based society embedded in social justice and humanity. It was formed in 2017 at the Capital of Kerala, Trivandrum.</p><p>A group of Environmentalists, with deep concerns about the Mother Earth and Human Habitat, from different locations across Kerala is working together for two missions of the foundation.</p>
                                            <ul><li>Enabling the deprived society to develop themselves.</li><li>Environmental conservation and restoration.</li></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial 3 end -->
{{-- @endif --}}
<!-- Featured properties start -->
<div class="featured-properties content-area-2 bg-white">
    <div class="container">
        <div class="main-title">
            {{-- <h1>Welcome to Urvi Foundation</h1> --}}

        </div>
        <div class="col-lg-12">
            <div class="row property-box-6">
                <div class="col-lg-6 col-pad">
                    <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide">
                        <!-- main slider carousel items -->
                        <div class="carousel-inner">
                            <div class="active item carousel-item" data-slide-number="0">
                                <img src="{{ asset(Utility::FRONT_END.'assets/img/stone_free.jpg') }}" class="img-fluid" alt="property-box-6">
                            </div>
                            {{-- <div class="item carousel-item" data-slide-number="1">
                                <img src="{{ asset(Utility::FRONT_END.'assets/img/awards.jpg') }}" class="img-fluid" alt="property-box-6">
                            </div>
                            <div class="item carousel-item" data-slide-number="2">
                                <img src="{{ asset(Utility::FRONT_END.'assets/img/urvi_kosa.jpg') }}" class="img-fluid" alt="property-box-6">
                            </div>
                            <div class="item carousel-item" data-slide-number="4">
                                <img src="{{ URL::asset('front/assets/img/property/img-2.jpg') }}" class="img-fluid" alt="property-box-6">
                            </div>
                            <div class="item carousel-item" data-slide-number="5">
                                <img src="{{ URL::asset('front/assets/img/property/img-1.jpg') }}" class="img-fluid" alt="property-box-6">
                            </div> --}}
                            <a class="carousel-control left" href="#propertiesDetailsSlider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                            <a class="carousel-control right" href="#propertiesDetailsSlider" data-slide="next"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-pad align-self-center">
                    <div class="info">
                        <h3>
                            <a href="{{ route('campign_detail',encrypt(11)) }}">Stone Free Movement</a>
                        </h3>
                        <p>
                            The Western Ghats, Kerala’s ecological lifeline, are under severe threat from relentless quarrying and unscientific development, disrupting natural balance and triggering disasters like the 2018 floods. Unchecked destruction of resources could push Kerala toward irreversible ecological collapse.
In response, URVI Foundation launched the Stone Free Movement in 2017, advocating for sustainable construction and biodiversity conservation. By reducing dependence on highland stone and promoting local alternatives, the movement restores environmental stability while fostering resilient, eco-friendly building solutions.
This is not just about climate resilience—it’s about the survival of 38,863 sq. km of land and 33.4 million people. The stakes are immense, and every action we take today shapes the future of our communities and ecosystems.
Only through vision and relentless effort can we build a sustainable tomorrow. The Stone Free Movement is a long-term mission—let’s build a future in harmony with nature!
                        </p>
                        <a href="{{ route('campign_detail',encrypt(11)) }}" class="btn btn-4">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->

<!-- Blog start -->
<div class="blog content-area-2">
    <div class="container">
        <!-- <div class="main-title">
            <h1>Our Projects</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div> -->
        <div class="slick-slider-area">
            <div class="row slick-carousel wow fadeInUp delay-04s" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="{{ asset(Utility::FRONT_END.'assets/img/campigns.jpg') }}" class="img-fluid" alt="Urvi Kosa">
                            <div class="overlay-icon">
                                <a href="{{ route('campigns') }}"><span><i class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                        <div class="blog-one__single-text-box detail">
                            <h3 class="title">
                                <a href="{{ route('campigns') }}">Campaigns</a>
                            </h3>
                            <p class="text">The history of Kerala in Vernacular Architecture is the still existing centuries old buildings
                                constructed with locally available materials. The building culture currently in practice has
                                been diverted a lot from the vernacular practices which caused over exploitation of natural
                                resources and negative impact on the climate.</p>
                                <a data-animation="animated fadeInUp delay-10s" href="{{ route('campigns') }}" class="btn btn-2 btn-theme"><span>More Details</span></a>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item wow">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="{{ asset(Utility::FRONT_END.'assets/img/awards.jpg') }}" alt="Award Recognitions" class="img-fluid">
                            <div class="overlay-icon">
                                <a href="{{ route('awards') }}"><span><i class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                        <div class="blog-one__single-text-box detail">
                            <h3 class="title">
                                <a href="{{ route('awards') }}">Award Recognitions</a>
                            </h3>
                            <p class="text">Urvi Foundation got HUDCO National Award 2018 for post flood rapid housing prototype which was built in Wayanad, Kerala, India
                                Sustainable house built within 14 days for a family affected by Kerala Floods 2018 with the help of Thanal Charitable NGO & Gramapanchayath ( Govt Local body), Pozhuthana, Wayanad. </p>
                            <a data-animation="animated fadeInUp delay-10s" href="{{ route('awards') }}" class="btn btn-2 btn-theme"><span>More Details</span></a>
                            <!-- <ul class="post-meta">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>25 June 2021</li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">Com (05)</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-2">
                        <div class="blog-photo">
                            <img src="{{ asset(Utility::FRONT_END.'assets/img/competitions.jpg') }}" alt="Competitions" class="img-fluid">
                            <div class="overlay-icon">
                                <a href="{{ route('competitions') }}"><span><i class="flaticon-add"></i></span></a>
                            </div>
                        </div>
                        <div class="blog-one__single-text-box detail">
                            <h3 class="title">
                                <a href="{{ route('competitions') }}">Competitions</a>
                            </h3>
                            <p class="text">Urvi Foundation announced a design contest for a rapid building solution for medical emergencies during the COVID-19 pandemic.</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>
                            <p>&nbsp;</p>

                            <a data-animation="animated fadeInUp delay-10s" href="{{ route('competitions') }}" class="btn btn-2 btn-theme"><span>More Details</span></a>
                            <!-- <ul class="post-meta">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>25 June 2021</li>
                                <li><i class="fa fa-comments" aria-hidden="true"></i><a href="#">Com (05)</a></li>
                            </ul> -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Most popular places start -->
{{-- <div class="most-popular-places content-area-23 bg-white">
    <div class="container">
        <div class="main-title">
            <h1>Upcoming Workshops</h1>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p> -->
        </div>
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-4 col-md-12 col-sm-12 col-pad cp-3 wow fadeInLeft delay-04s d-none-992">
                    <div class="most-popular-box-2">
                        <div class="photo">
                            <img src="{{ URL::asset('front/assets/img/popular-places/img-3.jpg') }}" alt="img" class="img-fluid">
                            <div class="most-overlay">
                                <div class="job">
                                    <p>Discussion on </p>
                                    <h6><a href="properties-details.html">sustainable development</a></h6>

                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg-4 col-md-12 col-pad wow fadeInUp delay-04s">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-2">
                                <div class="photo">
                                    <img src="{{ URL::asset('front/assets/img/popular-places/img-2.jpg') }}" alt="img" class="img-fluid">
                                    <div class="most-overlay">
                                        <div class="job">
                                            <p>Register for</p>
                                            <h6><a href="properties-details.html">terracotta construction</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-2">
                                <div class="photo">
                                    <img src="{{ URL::asset('front/assets/img/popular-places/img-4.jpg') }}" alt="img" class="img-fluid">
                                    <div class="most-overlay">
                                        <div class="job">
                                            <p>Register for </p>
                                            <h6><a href="properties-details.html">bamboo construction</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-pad wow fadeInUp delay-04s">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-2">
                                <div class="photo">
                                    <img src="{{ URL::asset('front/assets/img/popular-places/img-2.jpg') }}" alt="img" class="img-fluid">
                                    <div class="most-overlay">
                                        <div class="job">
                                            <p>Register for</p>
                                            <h6><a href="properties-details.html">terracotta construction</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-2">
                                <div class="photo">
                                    <img src="{{ URL::asset('front/assets/img/popular-places/img-4.jpg') }}" alt="img" class="img-fluid">
                                    <div class="most-overlay">
                                        <div class="job">
                                            <p>Register for </p>
                                            <h6><a href="properties-details.html">bamboo construction</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-pad wow fadeInRight delay-04s">
                    <div class="row">
                        <!-- <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-2">
                                <div class="photo">
                                    <img src="{{ URL::asset('front/assets/img/popular-places/img-6.jpg') }}" alt="img" class="img-fluid">
                                    <div class="most-overlay">
                                        <div class="job">
                                            <p>Register for</p>
                                            <h6><a href="properties-details.html">filler slab & interlock mudblock </a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-lg-12 col-md-6 col-sm-12 cp-2">
                            <div class="most-popular-box-2">
                                <div class="photo">
                                    <img src="{{ URL::asset('front/assets/img/popular-places/img-5.jpg') }}" alt="img" class="img-fluid">
                                    <div class="most-overlay">
                                        <div class="job">
                                            <p>Register for </p>
                                            <h6><a href="properties-details.html">lime construction</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Most popular places end -->


<!-- Testimonial 3 start -->
{{-- <div class="testimonial-3 content-area-20 ">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Our Testimonial</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 wow fadeInUp delay-04s">
                <div class="row testimonial-info">
                    <div class="col-lg-6 col-md-12 col-pad none-992">
                        <div class="photo">
                            <img src="{{ URL::asset('front/assets/img/img-7.jpg') }}" alt="testimonia3" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-pad align-self-center">
                        <div class="detail">
                            <div class="testimonial-inner">
                                <div id="carouselExampleIndicators4" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators4" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators4" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators4" data-slide-to="2"></li>
                                        <li data-target="#carouselExampleIndicators4" data-slide-to="3"></li>
                                        <li data-target="#carouselExampleIndicators4" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem<span class="none-1200"> industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</span></p>
                                            <div class="avatar">
                                                <img src="{{ URL::asset('front/assets/img/avatar/avatar.jpg') }}" alt="testimonial-user">
                                            </div>
                                            <h4>Antony Roky</h4>
                                            <P class="job">CEO, Brick Consulting</P>
                                        </div>
                                        <div class="carousel-item">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem<span class="none-1200"> industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</span></p>
                                            <div class="avatar">
                                                <img src="{{ URL::asset('front/assets/img/avatar/avatar-2.jpg') }}" alt="testimonial-user">
                                            </div>
                                            <h4>John Mery</h4>
                                            <P class="job">Creative Director</P>
                                        </div>
                                        <div class="carousel-item">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem<span class="none-1200"> industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</span></p>
                                            <div class="avatar">
                                                <img src="{{ URL::asset('front/assets/img/avatar/avatar-3.jpg') }}" alt="testimonial-user">
                                            </div>
                                            <h4>Karen Paran</h4>
                                            <P class="job">Web Developer</P>
                                        </div>
                                        <div class="carousel-item">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem<span class="none-1200"> industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</span></p>
                                            <div class="avatar">
                                                <img src="{{ URL::asset('front/assets/img/avatar/avatar-4.jpg') }}" alt="testimonial-user">
                                            </div>
                                            <h4>John Mery</h4>
                                            <P class="job">CEO, Brick Consulting</P>
                                        </div>
                                        <div class="carousel-item">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text everLorem<span class="none-1200"> industry's standard dummy text everLorem Ipsum Lorem Ipsum is simply dummy text of the printing.</span></p>
                                            <div class="avatar">
                                                <img src="{{ URL::asset('front/assets/img/avatar/avatar-2.jpg') }}" alt="testimonial-user">
                                            </div>
                                            <h4>Karen Paran</h4>
                                            <P class="job">Support Manager</P>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

@endsection

@section('css')
<style>
.property-box-6 .info {
    padding: 20px 40px;
}
</style>
@endsection

