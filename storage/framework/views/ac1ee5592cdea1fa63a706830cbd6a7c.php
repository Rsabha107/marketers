
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->


    <div class="d-flex justify-content-between m-2">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(route('hr.admin.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('hr.admin.employee')); ?>">
                            <?= get_label('employees', 'Employees') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo e(route('hr.admin.timesheet')); ?>">
                        <?= get_label('employee_timesheet', 'Employee Time Sheet') ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                        <?= get_label('employee_timesheet', 'Time Sheet Entry') ?>
                    </li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row justify-content-between align-items-end mb-4 g-3">
        <div class="col-12 col-sm-auto">
            <h2 class="mb-0"><?php echo e($employee_timesheets->employees->full_name); ?><span class="fw-normal text-700 ms-3">(<?php echo e($employee_timesheets->timesheet_period); ?>)</span></h2>
        </div>
        <div class="col-12 col-sm-auto">
            <div class="d-flex align-items-center">
                <div class="search-box me-3">
                </div>
                <!-- <a href="#!" id="add_employee_timesheet" data-action="store" data-source="manage" data-type="add" data-table="employee_timesheet_table" data-id="0">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_timesheet', 'Create employee_timesheet') ?>">
                        <i class="bx bx-plus"></i>
                    </button>
                </a> -->
            </div>
        </div>
    <!-- </div> -->


    <!-- <div class="d-flex justify-content-center">
        <div id="cover-spin" style="display:none;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
    <div>
        <a href="#!" id="add_employee_timesheet" data-action="store" data-source="manage" data-type="add" data-table="employee_timesheet_table" data-id="0">
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_timesheet', 'Create employee_timesheet') ?>">
                <i class="bx bx-plus"></i>
            </button>
        </a>
    </div> -->
    <!-- </div> -->
    <?php if (isset($component)) { $__componentOriginal3c4b84f55be3f8de89951637fe8d101c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3c4b84f55be3f8de89951637fe8d101c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-employee-timesheet-entry-card','data' => ['employeetimesheetentries' => $employee_timesheet_entries,'timesheetId' => ''.e($employee_timesheets->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-employee-timesheet-entry-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeetimesheetentries' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($employee_timesheet_entries),'timesheetId' => ''.e($employee_timesheets->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3c4b84f55be3f8de89951637fe8d101c)): ?>
<?php $attributes = $__attributesOriginal3c4b84f55be3f8de89951637fe8d101c; ?>
<?php unset($__attributesOriginal3c4b84f55be3f8de89951637fe8d101c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3c4b84f55be3f8de89951637fe8d101c)): ?>
<?php $component = $__componentOriginal3c4b84f55be3f8de89951637fe8d101c; ?>
<?php unset($__componentOriginal3c4b84f55be3f8de89951637fe8d101c); ?>
<?php endif; ?>
</div>

<script src="<?php echo e(asset('assets/js/pages/hr/admin/employees_timesheet_entry.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\admin\timesheet\entries\list.blade.php ENDPATH**/ ?>