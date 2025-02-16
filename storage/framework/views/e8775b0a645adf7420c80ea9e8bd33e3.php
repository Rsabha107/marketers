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
                        <a href="<?php echo e(route('tracki.employee.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('tracki.employee')); ?>">
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
            <h2 class="mb-0">Time Sheets (Manager View)</h2>
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
        </div>
    </div>

    <!-- <div>
            <a href="javascript:void(0)" id="edit_employee_timesheet_entry" data-action="store" data-source="manage" data-type="add" data-table="employee_timesheet_table" data-id="0">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_timesheet', 'Create employee_timesheet') ?>">
                    <i class="bx bx-plus"></i>
                </button>
            </a>
        </div> -->
    <!-- </div> -->
    <?php if (isset($component)) { $__componentOriginal58e9f66350631685b3fe85fa53eca1ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal58e9f66350631685b3fe85fa53eca1ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.manager-timesheet-card','data' => ['employeeid' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('manager-timesheet-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeeid' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal58e9f66350631685b3fe85fa53eca1ad)): ?>
<?php $attributes = $__attributesOriginal58e9f66350631685b3fe85fa53eca1ad; ?>
<?php unset($__attributesOriginal58e9f66350631685b3fe85fa53eca1ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal58e9f66350631685b3fe85fa53eca1ad)): ?>
<?php $component = $__componentOriginal58e9f66350631685b3fe85fa53eca1ad; ?>
<?php unset($__componentOriginal58e9f66350631685b3fe85fa53eca1ad); ?>
<?php endif; ?>
</div>

<script src="<?php echo e(asset('assets/js/pages/employees_timesheet.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\employee\managers\timesheet\list.blade.php ENDPATH**/ ?>