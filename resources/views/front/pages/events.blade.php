@extends('front.layouts.master')
@section('title') Events @endsection

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
            <h1>Our events</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Events</li>
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

                @foreach ( $events as $event )
                    <div class="property-box-5 p-box">
                        <div class="row">
                            <div class="col-lg-5 col-md-12 col-pad">
                                <div class="property-thumbnail">
                                    <a href="{{ route('event_detail',['id'=>encrypt($event->id)]) }}" class="property-img">
                                        @if(!empty($event->image))
                                            <img src="{{ URL::asset(App\Models\Event::DIR_STORAGE . $event->image) }}" alt="property-box-5" class="img-fluid">
                                        @else
                                            <img src="#" alt="property-box-5" class="img-fluid">
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-12 align-self-center col-pad">
                                <div class="detail">
                                    <!-- title -->
                                    <h1 class="title">
                                        <a href="{{ route('event_detail',['id'=>encrypt($event->id)]) }}">{{ $event->title }}</a>
                                    </h1>
                                    @empty($event->location)

                                    @else
                                    <!-- Location -->
                                    <div class="location">
                                        <a href="{{ route('event_detail',['id'=>encrypt($event->id)]) }}">
                                            <i class="fa fa-map-marker"></i>{{ $event->location }}
                                        </a>
                                    </div>
                                    @endempty

                                    <!-- Paragraph -->
                                    <p>{{ $event->short_description }}</p>
                                    <p style="text-align: right;"><a href="{{ route('event_detail',['id'=>encrypt($event->id)]) }}" class="text-primary">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                <div class="pagination-box text-center">
                    {{ $events->links() }}
                    {{-- <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="properties-list-leftside.html"><span aria-hidden="true">«</span></a></li>
                            <li class="page-item"><a class="page-link" href="properties-list-rightside.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="properties-list-leftside.html">2</a></li>
                            <li class="page-item"><a class="page-link  active" href="properties-list-fullwidth.html">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><span aria-hidden="true">»</span></a></li>
                        </ul>
                    </nav> --}}

                </div>
            </div>
        </div>
    </div>
</div>
<!-- properties list fullwidth end -->

@endsection
