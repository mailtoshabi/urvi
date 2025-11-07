@extends('admin.layouts.master')
@section('title') Add Media @endsection
@section('css')
<link href="{{ URL::asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet">
@endsection
@section('content')
@component('components.breadcrumb')
{{-- @slot('li_1') @lang('translation.Catalogue_Manage') @endslot --}}
@slot('li_1') Media Managment @endslot
@slot('title') Add Media @endslot
@endcomponent
<div class="row">
    <form method="POST" action="{{ isset($media)? route('admin.medias.update') : route('admin.medias.store')  }}" enctype="multipart/form-data">
        @csrf
        @if (isset($media))
            <input type="hidden" name="media_id" value="{{ encrypt($media->id) }}" />
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
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="title">Media Title</label>
                                <input id="title" name="title" type="text" class="form-control"  placeholder="Title" value="{{ isset($media)?$media->title:old('title')}}">
                                @error('title') <p class="text-danger">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="control-label">Type</label>
                                <select class="form-control select2" name="type" id="type">
                                    <option>Select</option>
                                    @foreach (Utility::media_types() as $index => $media_type)
                                        <option {{ isset($media)&&($media->type==$index)?'selected':''}} value="{{ $index }}">{{ $media_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            {{-- <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Media Images</h4>
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

            <div class="card" id="dvImage"  > {{-- style="@if(isset($media)&&($media->type!=Utility::MEDIA_TYPE_IMAGE)) display: none @endif" --}}
                <div class="card-header">
                    <h4 class="card-title mb-0">Media Image</h4>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <br><span id="imageContainer" @if(isset($media)&&empty($media->image)) style="display: none" @endif>
                                        @if(isset($media)&&!empty($media->image))
                                            <img src="{{ URL::asset(App\Models\Media::DIR_STORAGE . $media->image) }}" alt="" class="avatar-xxl rounded-circle me-2">
                                            <button type="button" class="btn-close" aria-label="Close"></button>
                                        @endif
                                        @error('image') <p class="text-danger">{{ $message }}</p> @enderror
                                    </span>

                                    <span id="fileContainer" @if(isset($media)&&!empty($media->image)) style="display: none" @endif>
                                        <input id="image" name="image" type="file" class="form-control"  placeholder="File">
                                        <p class="card-title-desc"><small>Upload image Size 750px X 500px</small></p>
                                        @error('image') <p class="text-danger">{{ $message }}</p> @enderror
                                        @if(isset($media)&&!empty($media->image))
                                            <button type="button" class="btn-close" aria-label="Close"></button>
                                        @endif
                                    </span>
                                </div>
                            </div>
                        </div>
                </div>

            </div> <!-- end card-->

            <div class="card" id="dvVideo"  style="@if(isset($media)&&($media->type!=Utility::MEDIA_TYPE_VIDEO)) display: none @endif">
                <div class="card-header">
                    <h4 class="card-title mb-0">Youtube Video</h4>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="youtube_code">Youtube Code</label>
                                    <input id="youtube_code" name="youtube_code" type="text" class="form-control"  placeholder="Youtube Code" value="{{ isset($media)?$media->youtube_code:old('youtube_code')}}">
                                    @error('youtube_code') <p class="text-danger">{{ $message }}</p> @enderror
                                </div>
                            </div>
                        </div>
                </div>

            </div> <!-- end card-->

            <div class="card" id="dvLink" style="@if(isset($media)&&($media->type!=Utility::MEDIA_TYPE_LINK)) display: none @endif">
                <div class="card-header">
                    <h4 class="card-title mb-0">Media Link</h4>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="media_link">URL</label>
                                    <input id="media_link" name="media_link" type="text" class="form-control"  placeholder="URL" value="{{ isset($media)?$media->media_link:old('media_link')}}">
                                    @error('media_link') <p class="text-danger">{{ $message }}</p> @enderror
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

        // $('#type').find('select').change(function() {
        //    console.log('dd');
        // })

        $('select[name="type"]').on('change', function () {
            var selectVal = $("select[name='type'] option:selected").val();
            // console.log(selectVal);
            if(selectVal==1) {
                // $('#dvImage').show();
                $('#dvVideo').hide();
                $('#dvLink').hide();
            }
            else if(selectVal==2) {
                // $('#dvImage').hide();
                $('#dvVideo').show();
                $('#dvLink').hide();
            }
            else if(selectVal==3) {
                // $('#dvImage').hide();
                $('#dvVideo').hide();
                $('#dvLink').show();
            }
            // console.log('dd');
        });

    });
</script>

@endsection
