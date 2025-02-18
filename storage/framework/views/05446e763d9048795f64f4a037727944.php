
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->


    <div class="container-fluid">
        <!-- <div class="d-flex justify-content-between mb-2 mt-4"> -->
        <!-- <div class="d-flex justify-content-center m-2"> -->
        <div class="mb-2">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('hr.admin.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('hr.admin.employee')); ?>">
                                <?= get_label('letter', 'Letter') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('tempalte', 'Template') ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Template</h2>
            </div>
        </div>
        <div class="mb-4 mt-4">
            <div class="d-flex flex-wrap gap-3">
                <!-- <div class="search-box">
                    <form class="position-relative">
                        <input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>

                    </form>
                </div> -->


                <div class="ms-xxl-auto">
                    <!-- <button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button> -->
                    <!-- <button class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add product</button> -->
                    <a href="<?php echo e(route('hr.admin.letter.create')); ?>" target="_blank">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_leave', 'Create employee_leave') ?>">
                            <i class="bx bx-plus"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>


        <!-- </div> -->
        <?php if (isset($component)) { $__componentOriginald8cd29ecf9daceba06811c0926ec7d76 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8cd29ecf9daceba06811c0926ec7d76 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-letter-template-card','data' => ['employeeid' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-letter-template-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeeid' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8cd29ecf9daceba06811c0926ec7d76)): ?>
<?php $attributes = $__attributesOriginald8cd29ecf9daceba06811c0926ec7d76; ?>
<?php unset($__attributesOriginald8cd29ecf9daceba06811c0926ec7d76); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8cd29ecf9daceba06811c0926ec7d76)): ?>
<?php $component = $__componentOriginald8cd29ecf9daceba06811c0926ec7d76; ?>
<?php unset($__componentOriginald8cd29ecf9daceba06811c0926ec7d76); ?>
<?php endif; ?>
    </div>

    <div class="offcanvas offcanvas-end w-70" data-bs-backdrop="static" id="view_template_modal" tabindex="-1" aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title"><?= get_label('show_template', 'Show Template') ?></h5>
            <button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div id="show_template_content"></div>
        </div>
    </div>

    <div class="offcanvas offcanvas-end w-70" data-bs-backdrop="static" id="edit_template_modal" tabindex="-1" aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title"><?= get_label('edit_template', 'Edit Template') ?></h5>
            <button class="btn-close text-reset" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <form class="row g-3  px-3 needs-validation form-submit-event" id="add_employee_letter_form" novalidate="" action="<?php echo e(route ('hr.admin.letter.store')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div id="edit_template_content"></div>
            </form>
        </div>
    </div>

    <script src="<?php echo e(asset('assets/js/pages/hr/admin/employees_letter.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>

    <?php $__env->stopPush(); ?>
<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\admin\letter\list.blade.php ENDPATH**/ ?>