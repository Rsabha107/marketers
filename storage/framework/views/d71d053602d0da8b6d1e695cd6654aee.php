
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
                            <li class="breadcrumb-item"><a href="<?php echo e(route('general.settings.company')); ?>">
                                    <?= get_label('settings', 'Settings') ?></a>
                            </li>
                            <li class="breadcrumb-item active">
                                <?= get_label('product', 'Product') ?>
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
                <a href="javascript:void(0)" data-table="item_master_table" id="offcanvas-add-item-master">
                    <button type="button" class="btn btn-primary px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-original-title=" <?= get_label('add_product', 'Add Product') ?>">
                        <i class="fa-solid fa-plus me-2"></i>Add Product
                    </button>
                </a>
            </div>
        </div>


            
            <?php echo $__env->make('procurement.admin.partials.item_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php if (isset($component)) { $__componentOriginal045957b021ad67fd47fd5671270d832b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal045957b021ad67fd47fd5671270d832b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.procurement.items.admin-item-master-card','data' => ['projectId' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('procurement.items.admin-item-master-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['projectId' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal045957b021ad67fd47fd5671270d832b)): ?>
<?php $attributes = $__attributesOriginal045957b021ad67fd47fd5671270d832b; ?>
<?php unset($__attributesOriginal045957b021ad67fd47fd5671270d832b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal045957b021ad67fd47fd5671270d832b)): ?>
<?php $component = $__componentOriginal045957b021ad67fd47fd5671270d832b; ?>
<?php unset($__componentOriginal045957b021ad67fd47fd5671270d832b); ?>
<?php endif; ?>
        </div>

        <script src="<?php echo e(asset('assets/js/pages/procurement/admin/item_master.js')); ?>"></script>
    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>
    <?php $__env->stopPush(); ?>

<?php echo $__env->make('procurement.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views/procurement/admin/items/list.blade.php ENDPATH**/ ?>