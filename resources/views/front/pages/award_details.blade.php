@extends('front.layouts.master')
@section('title') {{ $award->title }} @endsection

@section('content')
    <!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>{{ $award->title }}</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">{{ $award->title }}</li>
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
                            <img src="{{ URL::asset(App\Models\Award::DIR_STORAGE . $award->image) }}" class="img-fluid" alt="properties-photo">
                        </div>

                    </div>

                </div>

                <!-- Property description start -->
                <div class="property-description mb-60">
                    <h3 class="heading-3">{{ $award->title }}</h3>
                    {!! $award->description !!}
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
                        <h5 class="sidebar-title">Recent Awardes</h5>
                        @foreach ($recentAwardes as $recentAward )
                        <div class="media mb-4">
                            <a href="{{ route('award_detail',['id'=>encrypt($recentAward->id)]) }}">
                                <img src="{{ URL::asset(App\Models\Award::DIR_STORAGE . $recentAward->image) }}" alt="sub-property">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    <a href="{{ route('award_detail',['id'=>encrypt($recentAward->id)]) }}">{{ $recentAward->title }}</a>
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
