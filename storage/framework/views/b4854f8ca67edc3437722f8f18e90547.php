
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->
<?php if(Auth::user()->hasRole('SuperAdmin')): ?>
<?php
$data_action = 'manage';
?>
<?php else: ?>
<?php
$data_action = 'profile';
?>
<?php endif; ?>

<div class="content">
    <div class="container-fluid">
        <!-- <div class="d-flex justify-content-between mb-2 mt-4"> -->
        <!-- <div class="d-flex justify-content-center m-2"> -->
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
                            <?= get_label('employee_leaves', 'Employee Leaves') ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Leaves (Manager View)</h2>
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
                    <select class="form-select select-appearance" id="leave_type_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_leave_type', 'Select leave type') ?></option>
                        <?php $__currentLoopData = $employee_leave_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>"><?php echo e($key->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="col-md-2">
                    <select class="form-select select-appearance" id="leave_status_filter" aria-label="Default select example">
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


        <!-- </div> -->
        <?php if (isset($component)) { $__componentOriginal8c4acb9d6a41bb2c5e165ee87d690aaf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8c4acb9d6a41bb2c5e165ee87d690aaf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.manager-leave-card','data' => ['employeeid' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('manager-leave-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeeid' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8c4acb9d6a41bb2c5e165ee87d690aaf)): ?>
<?php $attributes = $__attributesOriginal8c4acb9d6a41bb2c5e165ee87d690aaf; ?>
<?php unset($__attributesOriginal8c4acb9d6a41bb2c5e165ee87d690aaf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8c4acb9d6a41bb2c5e165ee87d690aaf)): ?>
<?php $component = $__componentOriginal8c4acb9d6a41bb2c5e165ee87d690aaf; ?>
<?php unset($__componentOriginal8c4acb9d6a41bb2c5e165ee87d690aaf); ?>
<?php endif; ?>
    </div>
    <script src="<?php echo e(asset('assets/js/pages/employees_leaves.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('hr.emp.layout.emp_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\payroll\leave\list.blade.php ENDPATH**/ ?>