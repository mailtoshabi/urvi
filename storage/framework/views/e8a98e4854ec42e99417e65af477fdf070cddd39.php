<?php $__env->startSection('title'); ?> <?php echo app('translator')->get('translation.General_Settings'); ?> <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('assets/libs/select2/select2.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/dropzone/dropzone.min.css')); ?>" rel="stylesheet">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> <?php echo app('translator')->get('translation.Settings'); ?> <?php $__env->endSlot(); ?>
<?php $__env->slot('title'); ?> <?php echo app('translator')->get('translation.General_Settings'); ?> <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<div class="row">
    <?php if(session()->has('success')): ?> <p class="text-success"><?php echo e(session()->get('success')); ?> <?php endif; ?></p>
    <?php if(session()->has('error')): ?> <p class="text-danger"><?php echo e(session()->get('error')); ?> <?php endif; ?></p>
    <form method="POST" action="<?php echo e(route('admin.settings.update.general')); ?>">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="_method" value="PUT" />
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
                                <label for="email">Email</label>
                                <input id="email" name="email" type="text" class="form-control"  placeholder="Email" value="<?php echo e(Utility::settings('email')); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="whatsapp">WhatsApp No</label>
                                <input id="whatsapp" name="whatsapp" type="text" class="form-control" placeholder="WhatsApp No" value="<?php echo e(Utility::settings('whatsapp')); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="instagram">Instagram Link</label>
                                <input id="instagram" name="instagram" type="text" class="form-control" placeholder="Instagram Link" value="<?php echo e(Utility::settings('instagram')); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="youtube">Youtube Link</label>
                                <input id="youtube" name="youtube" type="text" class="form-control" placeholder="Youtube Link" value="<?php echo e(Utility::settings('youtube')); ?>">
                            </div>
                        </div>

                        <div class="col-sm-6">

                            <div class="mb-3">
                                <label for="mobile">Mobile No</label>
                                <input id="mobile" name="mobile" type="text" class="form-control" placeholder="Contact No" value="<?php echo e(Utility::settings('mobile')); ?>">
                            </div>
                            <div class="mb-3">
                                <label for="facebook">Facebook Link</label>
                                <input id="facebook" name="facebook" type="text" class="form-control" placeholder="Facebook Link" value="<?php echo e(Utility::settings('facebook')); ?>">
                            </div>

                            <div class="mb-3">
                                <label for="address">Address</label>
                                <textarea name="address" class="form-control" id="address" rows="5" placeholder="Address"><?php echo e(Utility::settings('address')); ?></textarea>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/urvifoundation/public_html/admin_urvi/resources/views/admin/pages/settings/general.blade.php ENDPATH**/ ?>