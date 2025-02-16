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
                            <?= get_label('element', 'Element') ?>
                        </li>
                    </ol>
                </nav>
            </div>
            <div>
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_element_modal"><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_element', 'Create Element') ?>"><i class="bx bx-plus"></i></button></a>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginal44933dd12ca5a6b947c6328d025caff4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44933dd12ca5a6b947c6328d025caff4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.element-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('element-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44933dd12ca5a6b947c6328d025caff4)): ?>
<?php $attributes = $__attributesOriginal44933dd12ca5a6b947c6328d025caff4; ?>
<?php unset($__attributesOriginal44933dd12ca5a6b947c6328d025caff4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44933dd12ca5a6b947c6328d025caff4)): ?>
<?php $component = $__componentOriginal44933dd12ca5a6b947c6328d025caff4; ?>
<?php unset($__componentOriginal44933dd12ca5a6b947c6328d025caff4); ?>
<?php endif; ?>
    </div>


    <script>
        var label_update = '<?= get_label('update', 'Update') ?>';
        var label_delete = '<?= get_label('delete', 'Delete') ?>';
    </script>
    <script src="<?php echo e(asset('assets/js/pages/element/elements.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('tracki.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\setting\element\list.blade.php ENDPATH**/ ?>