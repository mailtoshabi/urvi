@extends('admin.layouts.master')
@section('title') Add Research @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
{{-- @slot('li_1') @lang('translation.Catalogue_Manage') @endslot --}}
@slot('li_1') Research Managment @endslot
@slot('title') Add Research @endslot
@endcomponent
<div class="row">
    <form method="POST" action="{{ isset($research)? route('admin.researches.update') : route('admin.researches.store')  }}" enctype="multipart/form-data">
        @csrf
        @if (isset($research))
            <input type="hidden" name="research_id" value="{{ encrypt($research->id) }}" />
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
                                <label for="title">Research Title</label>
                                <input id="title" name="title" type="text" class="form-control"  placeholder="Title" value="{{ isset($research)?$research->title:old('title')}}">
                                @error('title') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="description_ar">Research Description</label>
                                <textarea class="form-control" name="description" id="ckeditor-classic" rows="5" placeholder="Description">{{ isset($research)?$research->description:old('description_ar')}}</textarea>
                                @error('description') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="location">Research Location</label>
                                <input id="location" name="location" type="text" class="form-control"  placeholder="Location" value="{{ isset($research)?$research->location:old('location')}}">
                                @error('location') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        {{-- <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="city">Research City</label>
                                <input id="city" name="city" type="text" class="form-control"  placeholder="Location" value="{{ isset($research)?$research->city:old('city')}}">
                                @error('city') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-4">
                            <div class="mb-3">
                                <label class="control-label">Type</label>
                                <select class="form-control select2" name="type" id="type">
                                    <option>Select</option>
                                    <option {{ isset($research)&&($research->type==1)?'selected':''}} value="1">Active</option>
                                    <option {{ isset($research)&&($research->type==0)?'selected':''}} value="0">Upcoming</option>
                                </select>
                            </div>
                        </div> --}}

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
                    <h4 class="card-title mb-0">Research Image</h4>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <br><span id="imageContainer" @if(isset($research)&&empty($research->image)) style="display: none" @endif>
                                        @if(isset($research)&&!empty($research->image))
                                            <img src="{{ URL::asset(App\Models\Research::DIR_STORAGE . $research->image) }}" alt="" class="avatar-xxl rounded-circle me-2">
                                            <button type="button" class="btn-close" aria-label="Close"></button>
                                        @endif
                                    </span>

                                    <span id="fileContainer" @if(isset($research)&&!empty($research->image)) style="display: none" @endif>
                                        <input id="image" name="image" type="file" class="form-control"  placeholder="File">
                                        @if(isset($research)&&!empty($research->image))
                                            <button type="button" class="btn-close" aria-label="Close"></button>
                                        @endif
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
