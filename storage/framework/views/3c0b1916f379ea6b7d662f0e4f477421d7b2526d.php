<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu"><?php echo app('translator')->get('translation.Menu'); ?></li>
                <li>
                    <a href="<?php echo e(route('admin.dashboard')); ?>">
                        <i data-feather="home"></i>
                        <span class="badge rounded-pill bg-soft-success text-success float-end">9+</span>
                        <span data-key="t-dashboard"><?php echo app('translator')->get('translation.Dashboards'); ?></span>
                    </a>
                </li>

                




                



                

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Project Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('admin.projects.create')); ?>" key="t-products">Add Project</a></li>
                                <li><a href="<?php echo e(route('admin.projects.index')); ?>" data-key="t-product-detail">Projects</a></li>
                                
                    </ul>
                </li>

                

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Research Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('admin.researches.create')); ?>" key="t-products">Add Researches</a></li>
                        <li><a href="<?php echo e(route('admin.researches.index')); ?>" data-key="t-product-detail">Researches</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Event Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('admin.events.create')); ?>" key="t-products">Add Events</a></li>
                        <li><a href="<?php echo e(route('admin.events.index')); ?>" data-key="t-product-detail">Events</a></li>
                        
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Awards & Reconginition</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('admin.awards.create')); ?>" key="t-products">Add Awards</a></li>
                        <li><a href="<?php echo e(route('admin.awards.index')); ?>" data-key="t-product-detail">Awards</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Competitions</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('admin.competitions.create')); ?>" key="t-products">Add Competitions</a></li>
                        <li><a href="<?php echo e(route('admin.competitions.index')); ?>" data-key="t-product-detail">Competition Lists</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="mail"></i>
                        <span data-key="t-email">Media Management</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('admin.medias.create')); ?>" key="t-products">Add Media</a></li>
                        <li><a href="<?php echo e(route('admin.medias.index')); ?>" data-key="t-product-detail">Medias</a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-contacts"><?php echo app('translator')->get('translation.User_Management'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('admin.users.index')); ?>" data-key="t-user-grid"><?php echo app('translator')->get('translation.Users'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.users.create')); ?>" data-key="t-user-grid"><?php echo app('translator')->get('translation.Add_User'); ?></a></li>
                    </ul>
                </li>



                <li>
                    <a href="javascript: void(0);" class="has-arrow">

                        <i data-feather="settings"></i>
                        <span data-key="t-contacts"><?php echo app('translator')->get('translation.Settings'); ?></span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="<?php echo e(route('admin.settings.index')); ?>" data-key="t-read-email"><?php echo app('translator')->get('translation.General_Settings'); ?></a></li>
                        <li><a href="<?php echo e(route('admin.settings.change.password')); ?>" data-key="t-user-grid"><?php echo app('translator')->get('translation.Change_Password'); ?></a></li>
                    </ul>
                </li>
            </ul>


        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<?php /**PATH C:\xampp\htdocs\admin_urvi\resources\views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>