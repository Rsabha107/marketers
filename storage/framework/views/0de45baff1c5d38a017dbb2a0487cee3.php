
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
                        <li class="breadcrumb-item"><a href="<?php echo e(route('hr.admin.employee')); ?>">
                                <?= get_label('employees', 'Employees') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('employee_banks', 'Employee Banks') ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div id="cover-spin" style="display:none;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div>
            <?php if (\Illuminate\Support\Facades\Blade::check('hasanyrole', 'SuperAdmin|HRMSADMIN')): ?>
            <a href="#!" id="add_employee_bank" data-action="store" data-source="manage" data-type="add" data-table="employee_bank_table" data-id="0">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_bank', 'Create employee_bank') ?>">
                    <i class="bx bx-plus"></i>
                </button>
            </a>
            <?php endif; ?>
        </div>
    </div>
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Banks</h2>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalde16a8a8d25e70cafd514297b9c0644e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde16a8a8d25e70cafd514297b9c0644e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-employee-bank-card','data' => ['employeeid' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-employee-bank-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeeid' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde16a8a8d25e70cafd514297b9c0644e)): ?>
<?php $attributes = $__attributesOriginalde16a8a8d25e70cafd514297b9c0644e; ?>
<?php unset($__attributesOriginalde16a8a8d25e70cafd514297b9c0644e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde16a8a8d25e70cafd514297b9c0644e)): ?>
<?php $component = $__componentOriginalde16a8a8d25e70cafd514297b9c0644e; ?>
<?php unset($__componentOriginalde16a8a8d25e70cafd514297b9c0644e); ?>
<?php endif; ?>
</div>

<script src="<?php echo e(asset('assets/js/pages/hr/admin/employees_banks.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\admin\bank\list.blade.php ENDPATH**/ ?>