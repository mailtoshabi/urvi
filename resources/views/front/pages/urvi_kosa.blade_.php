@extends('front.layouts.master')
@section('title') @lang('translation.Home_Page') @endsection

@section('content')

    {{-- @component('front.components.breadcrumb')
        @slot('title') Categories @endslot
        @slot('bg_img', 'assets/images/gallery-2.jpg')
    @endcomponent --}}
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

<!-- Photo gallery start -->
<div class="photo-gallery content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Urvi Kosa</h1>
            {{-- <ul class="list-inline-listing filters filteriz-navigation">
                <li class="active btn filtr-button filtr" data-filter="all">All</li>
                <li data-filter="1" class="btn btn-inline filtr-button filtr">Projects</li>
                <li data-filter="2" class="btn btn-inline filtr-button filtr">Researches</li>
                <li data-filter="3" class="btn btn-inline filtr-button filtr">Events</li>
            </ul> --}}
        </div>
        <div class="row filter-portfolio">
            <div class="gallery">
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                    <div class="portfolio-item property-magnify-gallery">
                        <a href="{{ URL::asset('front/assets/img/property/img-1.jpg') }}" title="Real House Luxury Villa">
                            <img src="{{ URL::asset('front/assets/img/property/img-1.jpg') }}" alt="gallery" class="img-fluid">
                        </a>
                        <div class="portfolio-content">
                            <div class="portfolio-content-inner">
                                <p>Real House Luxury Villa</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2, 1">
                    <div class="portfolio-item property-magnify-gallery">
                        <a href="{{ URL::asset('front/assets/img/property/img-2.jpg') }}" title="Relaxing Apartment">
                            <img src="{{ URL::asset('front/assets/img/property/img-2.jpg') }}" alt="gallery" class="img-fluid">
                        </a>
                        <div class="portfolio-content">
                            <div class="portfolio-content-inner">
                                <p>Relaxing Apartment</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="1, 2">
                    <div class="portfolio-item property-magnify-gallery">
                        <a href="{{ URL::asset('front/assets/img/property/img-3.jpg') }}" title="Beautiful Single Home">
                            <img src="{{ URL::asset('front/assets/img/property/img-3.jpg') }}" alt="gallery" class="img-fluid">
                        </a>
                        <div class="portfolio-content">
                            <div class="portfolio-content-inner">
                                <p>Beautiful Single Home</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2">
                    <div class="portfolio-item property-magnify-gallery">
                        <a href="{{ URL::asset('front/assets/img/property/img-4.jpg') }}" title="Masons Villas">
                            <img src="{{ URL::asset('front/assets/img/property/img-4.jpg') }}" alt="gallery" class="img-fluid">
                        </a>
                        <div class="portfolio-content">
                            <div class="portfolio-content-inner">
                                <p>Masons Villas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="2, 1">
                    <div class="portfolio-item property-magnify-gallery">
                        <a href="{{ URL::asset('front/assets/img/property/img-5.jpg') }}" title="Masons Villas">
                            <img src="{{ URL::asset('front/assets/img/property/img-5.jpg') }}" alt="gallery" class="img-fluid">
                        </a>
                        <div class="portfolio-content">
                            <div class="portfolio-content-inner">
                                <p>Masons Villas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 1, 2">
                    <div class="portfolio-item property-magnify-gallery">
                        <a href="{{ URL::asset('front/assets/img/property/img-6.jpg') }}" title="Sweet Family Home">
                            <img src="{{ URL::asset('front/assets/img/property/img-6.jpg') }}" alt="gallery" class="img-fluid">
                        </a>
                        <div class="portfolio-content">
                            <div class="portfolio-content-inner">
                                <p>Sweet Family Home</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="2, 3">
                    <div class="portfolio-item property-magnify-gallery">
                        <a href="{{ URL::asset('front/assets/img/property/img-1.jpg') }}" title="Big Head House">
                            <img src="{{ URL::asset('front/assets/img/property/img-1.jpg') }}" alt="gallery" class="img-fluid">
                        </a>
                        <div class="portfolio-content">
                            <div class="portfolio-content-inner">
                                <p>Big Head House</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3, 2">
                    <div class="portfolio-item property-magnify-gallery">
                        <a href="{{ URL::asset('front/assets/img/property/img-2.jpg') }}" title="Park avenue">
                            <img src="{{ URL::asset('front/assets/img/property/img-2.jpg') }}" alt="gallery" class="img-fluid">
                        </a>
                        <div class="portfolio-content">
                            <div class="portfolio-content-inner">
                                <p>Park avenue</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="1, 2, 3">
                    <div class="portfolio-item property-magnify-gallery">
                        <a href="{{ URL::asset('front/assets/img/property/img-3.jpg') }}" title="Luxury Villa">
                            <img src="{{ URL::asset('front/assets/img/property/img-3.jpg') }}" alt="gallery" class="img-fluid">
                        </a>
                        <div class="portfolio-content">
                            <div class="portfolio-content-inner">
                                <p>Luxury Villa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Photo gallery end -->

@endsection
