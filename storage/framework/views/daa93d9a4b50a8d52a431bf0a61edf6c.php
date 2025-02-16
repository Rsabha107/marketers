
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->



<div class="container-fluid">
        <!-- <div class="d-flex justify-content-between mb-2 mt-4"> -->
        <div class="mb-2">
            <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('hr.admin.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('hr.admin.employee')); ?>">
                            <?= get_label('employees', 'Employees') ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                        <?= get_label('employee_file', 'Employee file') ?>
                    </li>
                </ol>
            </nav>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Attachments</h2>
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
                <div class="col-md-2">
                    <select class="form-select select-appearance" id="employee_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_employee', 'Filter by employee...') ?></option>
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($employee->id); ?>"><?php echo e($employee->full_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-md-2">
                    <select class="form-select select-appearance" id="attachment_type_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_attachment_type', 'Filter by type...') ?></option>
                        <?php $__currentLoopData = $model_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model_name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($model_name->model_name); ?>"><?php echo e($model_name->model_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="ms-xxl-auto">
                    <!-- <button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button> -->
                    <!-- <button class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add product</button> -->
                    <a href="#!" id="add_employee_file" data-action="store" data-source="manage" data-type="add" data-table="employee_file_table" data-id="0">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_file', 'Create employee file') ?>">
                        <i class="bx bx-plus"></i>
                    </button>
                </a>
                </div>
            </div>
        </div>

        <!-- <div>
            <a href="#!" id="add_employee_timesheet" data-action="store" data-source="manage" data-type="add" data-table="employee_timesheet_table" data-id="0">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_timesheet', 'Create employee_timesheet') ?>">
                    <i class="bx bx-plus"></i>
                </button>
            </a>
        </div> -->
        <!-- </div> -->
        <?php if (isset($component)) { $__componentOriginale9da8434550a56f5340ed89701e767cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale9da8434550a56f5340ed89701e767cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-employee-file-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-employee-file-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale9da8434550a56f5340ed89701e767cd)): ?>
<?php $attributes = $__attributesOriginale9da8434550a56f5340ed89701e767cd; ?>
<?php unset($__attributesOriginale9da8434550a56f5340ed89701e767cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale9da8434550a56f5340ed89701e767cd)): ?>
<?php $component = $__componentOriginale9da8434550a56f5340ed89701e767cd; ?>
<?php unset($__componentOriginale9da8434550a56f5340ed89701e767cd); ?>
<?php endif; ?>
    </div>

    <script src="<?php echo e(asset('assets/js/pages/hr/admin/employees_file.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\admin\files\list.blade.php ENDPATH**/ ?>