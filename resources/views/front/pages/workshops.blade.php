@extends('front.layouts.master')
@section('title') {{ $type }} workshops @endsection

@section('content')

    {{-- @component('front.components.breadcrumb')
        @slot('title') Categories @endslot
        @slot('bg_img', 'assets/images/gallery-2.jpg')
    @endcomponent --}}
    <!-- ========================  Products ======================== -->

<!-- Sub banner start -->
<div class="workshops sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{ $type }} workshops</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">{{ $type }} workshops</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Photo gallery start -->
<div class="photo-gallery content-area-2">
    <div class="container">
        <div class="main-title">
            {{-- <h1>Media</h1> --}}
            {{-- <ul class="list-inline-listing filters filteriz-navigation">
                <li class="active btn filtr-button filtr" data-filter="all">All</li>
                <li data-filter="1" class="btn btn-inline filtr-button filtr">Projects</li>
                <li data-filter="2" class="btn btn-inline filtr-button filtr">Researches</li>
                <li data-filter="3" class="btn btn-inline filtr-button filtr">Events</li>
            </ul> --}}
        </div>
        <div class="row filter-portfolio">
            <div class="gallery">
                @foreach ( $workshops as $workshop )
                    <div class="col-lg-4 col-md-6 col-sm-12 filtr-item" data-category="3">
                        <div class="portfolio-item property-magnify-gallery">
                            @if(!empty($workshop->image))
                            <?php
                                $image_url = URL::asset(App\Models\Event::DIR_STORAGE . $workshop->image);
                                $target = '_self';
                                $class = '';
                            ?>

                            @endif


                            @if(!empty($workshop->image))
                                <a href="{{ $image_url }}" title="" target="{{ $target }}" class="{{ $class }}">
                                    <img src="{{ URL::asset(App\Models\Event::DIR_STORAGE . $workshop->image) }}" alt="gallery" class="img-fluid">
                                </a>
                            @endif
                            {{-- @if($media->type==Utility::MEDIA_TYPE_VIDEO && (!empty($media->youtube_code)))
                                <a href="#">
                                    <img src="{{ asset(Utility::FRONT_END.'assets/img/gallery_default.png') }}" alt="gallery" class="img-fluid">
                                </a>
                            @elseif($media->type==Utility::MEDIA_TYPE_LINK && (!empty($media->media_link)))
                                <a href="{{ $media->media_link }}" target="_blank" class="media_link">
                                    <img src="{{ asset(Utility::FRONT_END.'assets/img/gallery_default.png') }}" alt="gallery" class="img-fluid">
                                </a>
                            @endif --}}
                            <div class="portfolio-content">
                                <div class="portfolio-content-inner">
                                    {{-- <p>{{ $media->title }}</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Photo gallery end -->

@endsection
