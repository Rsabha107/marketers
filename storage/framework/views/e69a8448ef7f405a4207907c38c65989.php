
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
                            <?= get_label('employee_timesheet', 'Employee Time Sheet') ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Time Sheets</h2>
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
                    <select class="form-select select-appearance" id="timesheet_period_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_timesheet_period', 'Select month') ?></option>
                        <?php $__currentLoopData = $timesheet_periods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee_timesheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($employee_timesheet->timesheet_period); ?>"><?php echo e($employee_timesheet->timesheet_period); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select select-appearance" id="timesheet_status_filter" aria-label="Default select example">
                        <option value=""><?= get_label('select_status', 'Select status') ?></option>
                        <?php $__currentLoopData = $employee_leave_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                        $selected = (request()->has('status') && request()->status == $status->id) ? 'selected' : '';
                        ?>
                        <option value="<?php echo e($status->id); ?>" <?php echo e($selected); ?>><?php echo e($status->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="ms-xxl-auto">
                    <!-- <button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button> -->
                    <!-- <button class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add product</button> -->
                    <a href="#!" id="add_employee_timesheet" data-action="store" data-source="manage" data-type="add" data-table="employee_timesheet_table" data-id="0">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_timesheet', 'Create employee_timesheet') ?>">
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
        <?php if (isset($component)) { $__componentOriginalb276684b0a75b9bf9f9055dc1aef9f25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb276684b0a75b9bf9f9055dc1aef9f25 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-employee-timesheet-card','data' => ['employeetimesheets' => $employee_timesheets,'employeeleavestatuses' => $employee_leave_statuses,'employeeid' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-employee-timesheet-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeetimesheets' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($employee_timesheets),'employeeleavestatuses' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($employee_leave_statuses),'employeeid' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb276684b0a75b9bf9f9055dc1aef9f25)): ?>
<?php $attributes = $__attributesOriginalb276684b0a75b9bf9f9055dc1aef9f25; ?>
<?php unset($__attributesOriginalb276684b0a75b9bf9f9055dc1aef9f25); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb276684b0a75b9bf9f9055dc1aef9f25)): ?>
<?php $component = $__componentOriginalb276684b0a75b9bf9f9055dc1aef9f25; ?>
<?php unset($__componentOriginalb276684b0a75b9bf9f9055dc1aef9f25); ?>
<?php endif; ?>
    </div>

    <script src="<?php echo e(asset('assets/js/pages/hr/admin/employees_timesheet.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\admin\timesheet\list.blade.php ENDPATH**/ ?>