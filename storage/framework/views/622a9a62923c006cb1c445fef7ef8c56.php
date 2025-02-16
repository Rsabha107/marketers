<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->


    <div class="container-fluid">
        <div class="d-flex justify-content-between mb-2 mt-4">
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
                        <?= get_label('employee_file', 'Employee file') ?>
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
                <a href="#!" id="add_employee_file" data-action="store" data-source="manage" data-type="add" data-table="employee_file_table" data-id="0">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_file', 'Create employee file') ?>">
                        <i class="bx bx-plus"></i>
                    </button>
                </a>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginal5b7c780a649a35226cf69185e635e9a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5b7c780a649a35226cf69185e635e9a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.employee-file-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('employee-file-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5b7c780a649a35226cf69185e635e9a6)): ?>
<?php $attributes = $__attributesOriginal5b7c780a649a35226cf69185e635e9a6; ?>
<?php unset($__attributesOriginal5b7c780a649a35226cf69185e635e9a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5b7c780a649a35226cf69185e635e9a6)): ?>
<?php $component = $__componentOriginal5b7c780a649a35226cf69185e635e9a6; ?>
<?php unset($__componentOriginal5b7c780a649a35226cf69185e635e9a6); ?>
<?php endif; ?>
    </div>

    <script>
        var label_update = '<?= get_label('update', 'Update') ?>';
        var label_view = '<?= get_label('view', 'Quick view') ?>';
        var label_delete = '<?= get_label('delete', 'Delete') ?>';
        var label_not_assigned = '<?= get_label('not_assigned', 'Not assigned') ?>';
        var can_edit = <?= (Auth::user()->can('employee.edit')) == '' ? '0' : '1' ?>;
        var can_delete = <?= (Auth::user()->can('employee.delete')) == '' ? '0' : '1' ?>;
    </script>
    <script src="<?php echo e(asset('assets/js/pages/employees_file.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\employee\files\list.blade.php ENDPATH**/ ?>