
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
                            <?= get_label('employee_address', 'Business Address') ?>
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
            <a href="javascript:void(0)" data-table="business_address_table" id="add_business_address" data-id="0">
                <button type="button" class="btn btn-primary px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-original-title=" <?= get_label('add_address', 'Add Address') ?>">
                    <i class="fa-solid fa-plus me-2"></i>Add Address
                </button>
            </a>
        </div>
    </div>
    <!-- <div class="row g-3 mb-4">
        <div class="col-auto">
            <h4 class="mb-0">Addresses</h4>
        </div>
    </div> -->
    <?php if (isset($component)) { $__componentOriginal1adcfc08f1951199b50ddbfc5374292d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1adcfc08f1951199b50ddbfc5374292d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.generalsettings.gs-addresses-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('generalsettings.gs-addresses-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1adcfc08f1951199b50ddbfc5374292d)): ?>
<?php $attributes = $__attributesOriginal1adcfc08f1951199b50ddbfc5374292d; ?>
<?php unset($__attributesOriginal1adcfc08f1951199b50ddbfc5374292d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1adcfc08f1951199b50ddbfc5374292d)): ?>
<?php $component = $__componentOriginal1adcfc08f1951199b50ddbfc5374292d; ?>
<?php unset($__componentOriginal1adcfc08f1951199b50ddbfc5374292d); ?>
<?php endif; ?>
</div>
<?php echo $__env->make('general.settings.partials.gs_address_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('assets/js/pages/general_settings/business_addresses.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('procurement.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\general\settings\address\list.blade.php ENDPATH**/ ?>