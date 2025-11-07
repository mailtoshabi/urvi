<?php $__env->startSection('title'); ?> Add Media <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>

<?php $__env->slot('li_1'); ?> Media Managment <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> Add Media <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <form method="POST" action="<?php echo e(isset($media)? route('admin.medias.update') : route('admin.medias.store')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <?php if(isset($media)): ?>
            <input type="hidden" name="media_id" value="<?php echo e(encrypt($media->id)); ?>" />
            <input type="hidden" name="_method" value="PUT" />
            <input type="hidden" name="isImageDelete" id="isImageDelete" value="0">
        <?php endif; ?>
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
                                <input id="title" name="title" type="text" class="form-control"  placeholder="Title" value="<?php echo e(isset($media)?$media->title:old('title')); ?>">
                                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="control-label">Type</label>
                                <select class="form-control select2" name="type" id="type">
                                    <option>Select</option>
                                    <?php $__currentLoopData = Utility::media_types(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $media_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e(isset($media)&&($media->type==$index)?'selected':''); ?> value="<?php echo e($index); ?>"><?php echo e($media_type); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

            

            <div class="card" id="dvImage"  > 
                <div class="card-header">
                    <h4 class="card-title mb-0">Media Image</h4>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <br><span id="imageContainer" <?php if(isset($media)&&empty($media->image)): ?> style="display: none" <?php endif; ?>>
                                        <?php if(isset($media)&&!empty($media->image)): ?>
                                            <img src="<?php echo e(URL::asset(App\Models\Media::DIR_STORAGE . $media->image)); ?>" alt="" class="avatar-xxl rounded-circle me-2">
                                            <button type="button" class="btn-close" aria-label="Close"></button>
                                        <?php endif; ?>
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </span>

                                    <span id="fileContainer" <?php if(isset($media)&&!empty($media->image)): ?> style="display: none" <?php endif; ?>>
                                        <input id="image" name="image" type="file" class="form-control"  placeholder="File">
                                        <p class="card-title-desc"><small>Upload image Size 750px X 500px</small></p>
                                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        <?php if(isset($media)&&!empty($media->image)): ?>
                                            <button type="button" class="btn-close" aria-label="Close"></button>
                                        <?php endif; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                </div>

            </div> <!-- end card-->

            <div class="card" id="dvVideo"  style="<?php if(isset($media)&&($media->type!=Utility::MEDIA_TYPE_VIDEO)): ?> display: none <?php endif; ?>">
                <div class="card-header">
                    <h4 class="card-title mb-0">Youtube Video</h4>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="youtube_code">Youtube Code</label>
                                    <input id="youtube_code" name="youtube_code" type="text" class="form-control"  placeholder="Youtube Code" value="<?php echo e(isset($media)?$media->youtube_code:old('youtube_code')); ?>">
                                    <?php $__errorArgs = ['youtube_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>
                </div>

            </div> <!-- end card-->

            <div class="card" id="dvLink" style="<?php if(isset($media)&&($media->type!=Utility::MEDIA_TYPE_LINK)): ?> display: none <?php endif; ?>">
                <div class="card-header">
                    <h4 class="card-title mb-0">Media Link</h4>
                </div>
                <div class="card-body">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mb-3">
                                    <label for="media_link">URL</label>
                                    <input id="media_link" name="media_link" type="text" class="form-control"  placeholder="URL" value="<?php echo e(isset($media)?$media->media_link:old('media_link')); ?>">
                                    <?php $__errorArgs = ['media_link'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <p class="text-danger"><?php echo e($message); ?></p> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/select2/select2.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/ecommerce-select2.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>

<!-- pace js -->
<script src="<?php echo e(URL::asset('/assets/libs/pace-js/pace-js.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/libs/@ckeditor/@ckeditor.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/pages/form-editor.init.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\admin_urvi\resources\views/admin/pages/medias/add.blade.php ENDPATH**/ ?>