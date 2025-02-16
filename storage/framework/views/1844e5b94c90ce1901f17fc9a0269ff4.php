
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
                            <?= get_label('currency', 'Currency') ?>
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
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#add_currency">
                <button type="button" class="btn btn-primary px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-original-title=" <?= get_label('add_Currency', 'Add Currency') ?>">
                    <i class="fa-solid fa-plus me-2"></i>Add Currency
                </button>
            </a>
        </div>
    </div>
    <?php if (isset($component)) { $__componentOriginalde0760af4fb79931d7a2be9d006e5ffe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalde0760af4fb79931d7a2be9d006e5ffe = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.generalsettings.currency-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('generalsettings.currency-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalde0760af4fb79931d7a2be9d006e5ffe)): ?>
<?php $attributes = $__attributesOriginalde0760af4fb79931d7a2be9d006e5ffe; ?>
<?php unset($__attributesOriginalde0760af4fb79931d7a2be9d006e5ffe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalde0760af4fb79931d7a2be9d006e5ffe)): ?>
<?php $component = $__componentOriginalde0760af4fb79931d7a2be9d006e5ffe; ?>
<?php unset($__componentOriginalde0760af4fb79931d7a2be9d006e5ffe); ?>
<?php endif; ?>
</div>

<?php echo $__env->make('general.settings.partials.gs_currency_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script src="<?php echo e(asset('assets/js/pages/general_settings/currency.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\general\settings\currency\list.blade.php ENDPATH**/ ?>