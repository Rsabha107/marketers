
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
                            <a href="<?php echo e(route('tracki.employee.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('tracki.employee')); ?>">
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
    <?php if (isset($component)) { $__componentOriginal1cc61cb2fbb2271bd2b845411d242d7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1cc61cb2fbb2271bd2b845411d242d7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.employee-bank-card','data' => ['employeeid' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('employee-bank-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeeid' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1cc61cb2fbb2271bd2b845411d242d7d)): ?>
<?php $attributes = $__attributesOriginal1cc61cb2fbb2271bd2b845411d242d7d; ?>
<?php unset($__attributesOriginal1cc61cb2fbb2271bd2b845411d242d7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1cc61cb2fbb2271bd2b845411d242d7d)): ?>
<?php $component = $__componentOriginal1cc61cb2fbb2271bd2b845411d242d7d; ?>
<?php unset($__componentOriginal1cc61cb2fbb2271bd2b845411d242d7d); ?>
<?php endif; ?>
</div>

<script src="<?php echo e(asset('assets/js/pages/employees_banks.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\emp\bank\list.blade.php ENDPATH**/ ?>