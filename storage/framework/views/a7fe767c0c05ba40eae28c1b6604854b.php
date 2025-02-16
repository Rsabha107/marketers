
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->


    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-1 mt-2">
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
                                <?= get_label('employee_salary', 'Employee Salary') ?>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <?php if(Auth::user()->can('salary.create')): ?>
            <div>
                <a href="#!" id="add_employee_salary" data-action="store" data-source="manage" data-type="add" data-table="employee_salary_table" data-id="0">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_salary', 'Create employee_salary') ?>">
                        <i class="bx bx-plus"></i>
                    </button>
                </a>
            </div>
            <?php endif; ?>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Salaries</h2>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginala0dd44ac0caa70bddc4a825356f1d166 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala0dd44ac0caa70bddc4a825356f1d166 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-employee-salary-card','data' => ['employeeid' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-employee-salary-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeeid' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala0dd44ac0caa70bddc4a825356f1d166)): ?>
<?php $attributes = $__attributesOriginala0dd44ac0caa70bddc4a825356f1d166; ?>
<?php unset($__attributesOriginala0dd44ac0caa70bddc4a825356f1d166); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala0dd44ac0caa70bddc4a825356f1d166)): ?>
<?php $component = $__componentOriginala0dd44ac0caa70bddc4a825356f1d166; ?>
<?php unset($__componentOriginala0dd44ac0caa70bddc4a825356f1d166); ?>
<?php endif; ?>
    </div>
    <script src="<?php echo e(asset('assets/js/pages/hr/admin/employees_salary.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>
<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\admin\salary\list.blade.php ENDPATH**/ ?>