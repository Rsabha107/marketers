
<?php $__env->startSection('main'); ?>

<div class="container-fluid">


    <div class="d-flex justify-content-between mb-2 mt-2">
        <div class="d-flex justify-content-between m-2">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('hr.admin.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('general.settings.company')); ?>">
                                <?= get_label('settings', 'Settings') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            All purchase Orders (<?php echo e($purchases->count()); ?>)
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
            <a href="javascript:void(0)" data-table="purchase_table" id="offcanvas-add-purchase" data-id="0">
                <button type="button" class="btn btn-primary px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-original-title=" <?= get_label('add_new_purchase', 'Add new purchase order') ?>">
                    <i class="fa-solid fa-plus me-2"></i>Add new purchase order
                </button>
            </a>
        </div>
    </div>

    <?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.procurement.purchase.admin-purchase-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('procurement.purchase.admin-purchase-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
</div>
<?php echo $__env->make('procurement.admin.partials.purchase_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('assets/js/pages/procurement/admin/purchase.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('procurement.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views/procurement/admin/purchase/list.blade.php ENDPATH**/ ?>