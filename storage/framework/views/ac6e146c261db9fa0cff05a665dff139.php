
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->

<div class="content">
    <div class="container-fluid">
        <div class="d-flex justify-content-between m-2">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(url('/home')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('functional_area', 'Functional Area') ?>
                        </li>
                    </ol>
                </nav>
            </div>
            <div>
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_funcareas_modal"><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_funcarea', 'Create Venue') ?>"><i class="bx bx-plus"></i></button></a>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginal6421cf03dbeba4d340c88b7b9f9ee942 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6421cf03dbeba4d340c88b7b9f9ee942 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.functional-area-card','data' => ['funcareas' => $funcareas]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('functional-area-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['funcareas' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($funcareas)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6421cf03dbeba4d340c88b7b9f9ee942)): ?>
<?php $attributes = $__attributesOriginal6421cf03dbeba4d340c88b7b9f9ee942; ?>
<?php unset($__attributesOriginal6421cf03dbeba4d340c88b7b9f9ee942); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6421cf03dbeba4d340c88b7b9f9ee942)): ?>
<?php $component = $__componentOriginal6421cf03dbeba4d340c88b7b9f9ee942; ?>
<?php unset($__componentOriginal6421cf03dbeba4d340c88b7b9f9ee942); ?>
<?php endif; ?>
    </div>

    <script>
        var label_update = '<?= get_label('update', 'Update') ?>';
        var label_delete = '<?= get_label('delete', 'Delete') ?>';
        var label_not_assigned = '<?= get_label('not_assigned', 'Not assigned') ?>';
        var label_duplicate = '<?= get_label('duplicate', 'Duplicate') ?>';
    </script>
    <script src="<?php echo e(asset('assets/js/pages/functional_area.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('tracki.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\projects\admin\setting\funcareas\list.blade.php ENDPATH**/ ?>