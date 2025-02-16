
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
                                <a href="<?php echo e(route('hr.admin.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                            </li>
                            <li class="breadcrumb-item"><a href="<?php echo e(route('hr.admin.emergency')); ?>">
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
        <?php if (isset($component)) { $__componentOriginal2ff73c965f13299c66704bf72005ee22 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2ff73c965f13299c66704bf72005ee22 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-employee-emergency-card','data' => ['employeeid' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-employee-emergency-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeeid' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2ff73c965f13299c66704bf72005ee22)): ?>
<?php $attributes = $__attributesOriginal2ff73c965f13299c66704bf72005ee22; ?>
<?php unset($__attributesOriginal2ff73c965f13299c66704bf72005ee22); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2ff73c965f13299c66704bf72005ee22)): ?>
<?php $component = $__componentOriginal2ff73c965f13299c66704bf72005ee22; ?>
<?php unset($__componentOriginal2ff73c965f13299c66704bf72005ee22); ?>
<?php endif; ?>

    </div>

    <script src="<?php echo e(asset('assets/js/pages/hr/admin/employees_emergency_contacts.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>
<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\admin\emergency\list.blade.php ENDPATH**/ ?>