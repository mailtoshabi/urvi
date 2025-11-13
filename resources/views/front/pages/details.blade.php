@extends('front.layouts.master')
@section('title') {{ $event->title }} @endsection

@section('content')
    <!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{ $event->title }}</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">{{ $event->title }}</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-2">
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-12">

            </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-8 col-md-12 slider">

                <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-60">

                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="{{ URL::asset(App\Models\Event::DIR_STORAGE . $event->image) }}" class="img-fluid" alt="properties-photo">
                        </div>

                    </div>

                </div>

                <!-- Property description start -->
                <div class="property-description mb-60 type_{{ strtolower($type) }}">
                    <h3 class="heading-3">{{ $event->title }}</h3>
                    {!! $event->description !!}
                </div>



                <!-- Property vedio start -->
                {{-- <div class="property-video mb-60">
                    <h3 class="heading-3">Property Vedio</h3>
                    <iframe src="https://www.youtube.com/embed/V7IrnC9MISU" allowfullscreen></iframe>
                </div> --}}

            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar mbl">
                    <!-- Recent posts start -->
                    <div class="widget recent-posts">
                        @php
                            if ($type == 'Workshop') {
                                $routeName = 'workshop_detail';
                            } elseif ($type == 'Event') {
                                $routeName = 'event_detail';
                            } elseif ($type == 'Campign') {
                                $routeName = 'campign_detail';
                            }
                        @endphp
                        <h5 class="sidebar-title">Recent {{ $type }}s</h5>
                        @foreach ($recentEvents as $recentEvent )
                        <div class="media mb-4">
                            <a href="{{ route($routeName, ['id' => encrypt($recentEvent->id)]) }}">
                                <img src="{{ URL::asset(App\Models\Event::DIR_STORAGE . $recentEvent->image) }}" alt="sub-property">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="{{ route($routeName, ['id' => encrypt($recentEvent->id)]) }}">{{ $recentEvent->title }}</a>
                                </h5>
                                {{-- <p>Feb 27, 2020 | $1045,000</p> --}}
                            </div>
                        </div>
                        @endforeach


                    </div>
                    <!-- Social list start -->
                    {{-- <div class="social-list widget clearfix">
                        <h5 class="sidebar-title">Follow Us</h5>
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="rss-bg"><i class="fa fa-rss"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page start -->

@endsection
