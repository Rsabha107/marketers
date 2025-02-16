
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->


<div class="container-fluid">
    <div class="d-flex justify-content-between m-2">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="<?php echo e(url('/home')); ?>"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                        <?= get_label('element_set', 'Element Set') ?>
                    </li>
                </ol>
            </nav>
        </div>
        <div>
            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#create_elementset_modal"><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_element', 'Create Element') ?>"><i class="bx bx-plus"></i></button></a>
        </div>
    </div>
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Element Sets</h2>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalec0d93efa800c729f30bbe5237673d06 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalec0d93efa800c729f30bbe5237673d06 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.element-set-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('element-set-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalec0d93efa800c729f30bbe5237673d06)): ?>
<?php $attributes = $__attributesOriginalec0d93efa800c729f30bbe5237673d06; ?>
<?php unset($__attributesOriginalec0d93efa800c729f30bbe5237673d06); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec0d93efa800c729f30bbe5237673d06)): ?>
<?php $component = $__componentOriginalec0d93efa800c729f30bbe5237673d06; ?>
<?php unset($__componentOriginalec0d93efa800c729f30bbe5237673d06); ?>
<?php endif; ?>
</div>


<script>
    var label_update = '<?= get_label('update', 'Update') ?>';
    var label_delete = '<?= get_label('delete', 'Delete') ?>';
</script>
<script src="<?php echo e(asset('assets/js/pages/hr/setting/element/elementsets.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\admin\setting\elementset\list.blade.php ENDPATH**/ ?>