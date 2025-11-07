@extends('admin.layouts.master')
@section('title') Add Event @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
{{-- @slot('li_1') @lang('translation.Catalogue_Manage') @endslot --}}
@slot('li_1') Event Managment @endslot
@slot('title') Add Event @endslot
@endcomponent
<div class="row">
    <form method="POST" action="{{ isset($event)? route('admin.events.update') : route('admin.events.store')  }}" enctype="multipart/form-data">
        @csrf
        @if (isset($event))
            <input type="hidden" name="event_id" value="{{ encrypt($event->id) }}" />
            <input type="hidden" name="_method" value="PUT" />
            <input type="hidden" name="isImageDelete" id="isImageDelete" value="0">
        @endif
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Basic Information</h4>
                    <p class="card-title-desc">Fill all information below</p>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="title">Event Title</label>
                                <input id="title" name="title" type="text" class="form-control"  placeholder="Title" value="{{ isset($event)?$event->title:old('title')}}">
                                @error('title') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="description">Event Description</label>
                                <textarea class="form-control" name="description" id="ckeditor-classic" rows="5" placeholder="Description">{{ isset($event)?$event->description:old('description')}}</textarea>
                                @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="location">Event Location</label>
                                <input id="location" name="location" type="text" class="form-control"  placeholder="Event Location" value="{{ isset($event)?$event->location:old('location')}}">
                                @error('location') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="control-label">Type</label>
                                <select class="form-control select2" name="type" id="type">
                                    <option value="">Select</option>
                                    @foreach (Utility::event_types() as $index => $event_type)
                                        <option {{ isset($event)&&($event->type==$index)?'selected':''}} value="{{ $index }}">{{ $event_type }}</option>
                                    @endforeach

                                    {{-- <option {{ isset($event)&&($event->type==Utility::EVENT_TYPE_EVENT)?'selected':''}} value="{{ Utility::EVENT_TYPE_EVENT }}">Events</option>
                                    <option {{ isset($event)&&($event->type==Utility::EVENT_TYPE_WORKSHOP)?'selected':''}} value="{{ Utility::EVENT_TYPE_WORKSHOP }}">Workshops</option>
                                    <option {{ isset($event)&&($event->type==Utility::EVENT_TYPE_CAMPIGN)?'selected':''}} value="{{ Utility::EVENT_TYPE_CAMPIGN }}">Campigns</option> --}}
                                </select>
                                @error('type') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="col-sm-4"><br><br>
                            {{-- <div class="mb-3">
                                <label for="completed">Mark as Completed</label>
                                <input id="completed" name="completed" type="checkbox" >
                                @error('completed') <p class="text-danger">{{ $message }}</p> @enderror
                            </div> --}}

                            <div class="mb-3">
                            <div class="form-check form-switch form-switch-md mb-3" dir="ltr">
                                <input type="checkbox" class="form-check-input" id="completed" name="completed" value="1" @if(isset($event)&&$event->completed==1) checked @endif>
                                <label class="form-check-label" for="completed">Mark as Completed</label>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Product Images</h4>
                </div>
                <div class="card-body">
                    <form action="/" method="post" class="dropzone">
                        <div class="fallback">
                            <input name="image" id="image" type="file" multiple />
                        </div>

                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>

                            <h4>Drop files here or click to upload.</h4>
                        </div>
                    </form>
                </div>

            </div> <!-- end card--> --}}

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Event Image</h4>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <br><span id="imageContainer" @if(isset($event)&&empty($event->image)) style="display: none" @endif>
                                        @if(isset($event)&&!empty($event->image))
                                            <img src="{{ URL::asset(App\Models\Event::DIR_STORAGE . $event->image) }}" alt="" class="avatar-xxl rounded-circle me-2">
                                            <button type="button" class="btn-close" aria-label="Close"></button>
                                        @endif
                                    </span>

                                    <span id="fileContainer" @if(isset($event)&&!empty($event->image)) style="display: none" @endif>
                                        <input id="image" name="image" type="file" class="form-control"  placeholder="File">
                                        @if(isset($event)&&!empty($event->image))
                                            <button type="button" class="btn-close" aria-label="Close"></button>
                                        @endif
                                        <small>Upload image with a size of 750x500</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                </div>

            </div> <!-- end card-->

            <div class="card">
                <div class="card-header">
                    <div class="d-flex flex-wrap gap-2">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save Changes</button>
                        <button type="reset" class="btn btn-secondary waves-effect waves-light">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- end row -->
@endsection
@section('script')
<script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/pages/ecommerce-select2.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>

<!-- pace js -->
<script src="{{ URL::asset('/assets/libs/pace-js/pace-js.min.js') }}"></script>
<script src="{{ URL::asset('/assets/libs/@ckeditor/@ckeditor.min.js') }}"></script>
<script src="{{ URL::asset('/assets/js/pages/form-editor.init.js') }}"></script>
<script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#imageContainer').find('button').click(function() {
            $('#imageContainer').hide();
            $('#fileContainer').show();
            $('input[name="isImageDelete"]').val(1);
        })

        $('#fileContainer').find('button').click(function() {
            $('#fileContainer').hide();
            $('#imageContainer').show();
            $('input[name="isImageDelete"]').val(0);
        })
    });
</script>

@endsection
