
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->


    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-2 mt-2">
            <div class="d-flex justify-content-between m-2">
                <div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-style1">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(route('hr.emp.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                            </li>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('hr.emp.emergency')); ?>">
                                    <?= get_label('employees', 'Employees') ?></a>
                            </li>
                            <li class="breadcrumb-item active">
                                <?= get_label('employee_emergencies', 'Employee Emergency Contact') ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div>
                <a href="#!" id="add_employee_emergency_contact" data-action="store" data-source="manage" data-type="add" data-table="employee_emergency_table" data-id="0">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_emergency', 'Create employee_emergency') ?>">
                        <i class="bx bx-plus"></i>
                    </button>
                </a>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Emergency Contacts</h2>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginalaf7ee1753018008ed647826f694ad086 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalaf7ee1753018008ed647826f694ad086 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.employee-emergency-card','data' => ['employeeid' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('employee-emergency-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeeid' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalaf7ee1753018008ed647826f694ad086)): ?>
<?php $attributes = $__attributesOriginalaf7ee1753018008ed647826f694ad086; ?>
<?php unset($__attributesOriginalaf7ee1753018008ed647826f694ad086); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalaf7ee1753018008ed647826f694ad086)): ?>
<?php $component = $__componentOriginalaf7ee1753018008ed647826f694ad086; ?>
<?php unset($__componentOriginalaf7ee1753018008ed647826f694ad086); ?>
<?php endif; ?>

    </div>

    <script src="<?php echo e(asset('assets/js/pages/hr/emp/employees_emergency_contacts.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>
<?php echo $__env->make('hr.emp.layout.emp_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\emp\emergency\list.blade.php ENDPATH**/ ?>