<?php $__env->startSection('title'); ?> Award Managment <?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<link href="<?php echo e(URL::asset('/assets/libs/datatables.net-bs4/datatables.net-bs4.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(URL::asset('assets/libs/datatables.net-responsive-bs4/datatables.net-responsive-bs4.min.css')); ?>" rel="stylesheet" type="text/css" />

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('li_1'); ?> Award Managment <?php $__env->endSlot(); ?>

<?php $__env->slot('title'); ?> Awards <?php $__env->endSlot(); ?>
<?php echo $__env->renderComponent(); ?>
<?php if(session()->has('success')): ?> <p class="text-success"><?php echo e(session()->get('success')); ?> <?php endif; ?></p>
<div class="row">
    <div class="col-lg-12">
        <div class="card mb-0">
            <div class="card-body">
                 <div class="row align-items-center">
                     <div class="col-md-6">
                         <div class="mb-3">
                             <h5 class="card-title">Awards <span class="text-muted fw-normal ms-2">(<?php echo e($awards->count()); ?>)</span></h5>
                         </div>
                     </div>

                     <div class="col-md-6">
                         <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                             
                             <div>
                                 <a href="<?php echo e(route('admin.awards.create')); ?>" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
                             </div>

                             
                         </div>

                     </div>
                 </div>
                 <!-- end row -->

                 <div class="table-responsive mb-4">
                     <table class="table align-middle dt-responsive table-check nowrap" style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                         <thead>
                         <tr>
                             
                             <th scope="col">Award Title</th>
                             
                             
                             
                             <th style="width: 80px; min-width: 80px;">Action</th>
                         </tr>
                         </thead>
                         <tbody>
                             <?php $__currentLoopData = $awards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $award): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <tr>
                                
                                <td>
                                   <?php if(!empty($award->image)): ?>
                                   <img src="<?php echo e(URL::asset('storage/awards/' . $award->image)); ?>" alt="" class="avatar-sm rounded-circle me-2">
                               <?php else: ?>
                               <div class="avatar-sm d-inline-block align-middle me-2">
                                   <div class="avatar-title bg-soft-primary text-primary font-size-20 m-0 rounded-circle">
                                       <i class="bx bxs-user-circle"></i>
                                   </div>
                               </div>
                               <?php endif; ?>
                                    <a href="#" class="text-body"><?php echo e($award->title); ?></a>
                                </td>
                                <td><?php echo e($award->location); ?></td>
                                
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="<?php echo e(route('admin.awards.edit',encrypt($award->id))); ?>" class="dropdown-item"><i class="mdi mdi-pencil font-size-16 text-success me-1"></i> Edit</a></li>
                                            <li><a href="#" class="dropdown-item" data-plugin="delete-data" data-target-form="#form_delete_<?php echo e($loop->iteration); ?>"><i class="mdi mdi-trash-can font-size-16 text-danger me-1"></i> Delete</a></li>
                                                <form id="form_delete_<?php echo e($loop->iteration); ?>" method="POST" action="<?php echo e(route('admin.awards.destroy',encrypt($award->id))); ?>">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="_method" value="DELETE" />
                                                </form>
                                            <li><a class="dropdown-item" href="<?php echo e(route('admin.awards.changeStatus',encrypt($award->id))); ?>"><i class="mdi mdi-cursor-pointer font-size-16 text-success me-1"></i> <?php echo e($award->status?'Deactivate':'Activate'); ?></a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                         </tbody>
                     </table>
                     <!-- end table -->
                     <div class="pagination justify-content-center"><?php echo e($awards->links()); ?></div>
                 </div>
                 <!-- end table responsive -->
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net/datatables.net.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-bs4/datatables.net-bs4.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/libs/datatables.net-responsive/datatables.net-responsive.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('/assets/js/app.min.js')); ?>"></script>
<script src="<?php echo e(URL::asset('assets/js/pages/datatable-pages.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/urvifoundation/public_html/admin_urvi/resources/views/admin/pages/awards/index.blade.php ENDPATH**/ ?>