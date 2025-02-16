<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->

<div class="content">
    <div class="container-fluid">
        <div class="mb-2">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('employees', 'Employees') ?>
                        </li>

                    </ol>
                </nav>
            </div>
            <div class="d-flex justify-content-center">
                <div id="cover-spin" style="display:none;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Missing Timesheet</h2>
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
                <div >
                    <select class="form-select select-appearance" id="timesheet_period_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_timesheet_period', 'Timesheet Period') ?></option>
                        
                        <option value="September-2024">September-2024</option>
                        <option value="October-2024">October-2024</option>
                        <option value="November-2024">November-2024</option>
                        <option value="December-2024">December-2024</option>
                     
                    </select>
                </div>
                <div >
                    <select class="form-select select-appearance" id="directorate_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_directorate', 'Select directorate') ?></option>
                        <?php $__currentLoopData = $directorate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>"><?php echo e($key->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div >
                    <select class="form-select select-appearance" id="entity_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_entity', 'Select entity') ?></option>
                        <?php $__currentLoopData = $entities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>"><?php echo e($key->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div >
                    <select class="form-select select-appearance" id="department_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_department', 'Select department') ?></option>
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div >
                    <select class="form-select select-appearance" id="functional_area_filter" aria-label="Default select example">
                        <option value=""><?= get_label('select_functional_area', 'Select fucntional area') ?></option>
                        <?php $__currentLoopData = $functional; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $selected = (request()->has('status') && request()->status == $status->id) ? 'selected' : '';
                        ?>
                        <option value="<?php echo e($key->id); ?>" <?php echo e($selected); ?>><?php echo e($key->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="ms-xxl-auto">
                    <!-- <button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button> -->
                    <!-- <button class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add product</button> -->
                    <?php if(Auth::user()->can('employee.create')): ?>
                    <a href="#!" id="add_employee" data-action="store" data-source="manage" data-type="add" data-table="employee_table" data-id="0">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee', 'Create employee') ?>">
                            <i class="bx bx-plus"></i>
                        </button>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginalbeff84093e0305023ce7a061bfc368cf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbeff84093e0305023ce7a061bfc368cf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.payroll-missing-timesheet-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('payroll-missing-timesheet-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbeff84093e0305023ce7a061bfc368cf)): ?>
<?php $attributes = $__attributesOriginalbeff84093e0305023ce7a061bfc368cf; ?>
<?php unset($__attributesOriginalbeff84093e0305023ce7a061bfc368cf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbeff84093e0305023ce7a061bfc368cf)): ?>
<?php $component = $__componentOriginalbeff84093e0305023ce7a061bfc368cf; ?>
<?php unset($__componentOriginalbeff84093e0305023ce7a061bfc368cf); ?>
<?php endif; ?>
    </div>

    <script src="<?php echo e(asset('assets/js/pages/missing_time_sheets.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('tracki.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\payroll\timesheet\missing\list.blade.php ENDPATH**/ ?>