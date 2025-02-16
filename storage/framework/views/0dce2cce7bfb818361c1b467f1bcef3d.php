<!-- //****************************************** offcanvasAddEditTask (not used but can be an option.  will add it to config) ******************************************/ */ -->


<div class="offcanvas offcanvas-end offcanvas-global-modal in" id="offcanvas-edit-vendor-modal" tabindex="-1"
    aria-labelledby="offcanvasWithBackdropLabel">
    <a class="close-task-detail in" id="close-task-detail" style="display: block;" data-bs-dismiss="offcanvas">
        <span><svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" focusable="false" data-prefix="fa"
                data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"
                data-fa-i2svg="">
                <path fill="currentColor"
                    d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                </path>
            </svg><!-- <i class="fa fa-times"></i> Font Awesome fontawesome.com --></span>
    </a>
    <div class="offcanvas-body">
        <div class="row">
            <div class="col-sm-12">
                <form class="row g-3 needs-validation form-submit-event" id="edit_vendor_form" novalidate=""
                    action="<?php echo e(route('procurement.vendor.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div id="global-edit-vendor-content"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end offcanvas-global-modal in" id="offcanvas-add-vendor-modal" tabindex="-1"
    aria-labelledby="offcanvasWithBackdropLabel">
    <a class="close-task-detail in" id="close-task-detail" style="display: block;" data-bs-dismiss="offcanvas">
        <span><svg class="svg-inline--fa fa-times fa-w-11" aria-hidden="true" focusable="false" data-prefix="fa"
                data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"
                data-fa-i2svg="">
                <path fill="currentColor"
                    d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                </path>
            </svg><!-- <i class="fa fa-times"></i> Font Awesome fontawesome.com --></span>
    </a>
    <?php if (isset($component)) { $__componentOriginal7abd8cc905bca337b2313b714ed6500e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7abd8cc905bca337b2313b714ed6500e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.procurement.vendor.admin-drawer-vendor','data' => ['id' => '','formAction' => ''.e(route('procurement.vendor.store')).'','currency' => 'anything','formId' => 'add_vendor_form']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('procurement.vendor.admin-drawer-vendor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => '','formAction' => ''.e(route('procurement.vendor.store')).'','currency' => 'anything','formId' => 'add_vendor_form']); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7abd8cc905bca337b2313b714ed6500e)): ?>
<?php $attributes = $__attributesOriginal7abd8cc905bca337b2313b714ed6500e; ?>
<?php unset($__attributesOriginal7abd8cc905bca337b2313b714ed6500e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7abd8cc905bca337b2313b714ed6500e)): ?>
<?php $component = $__componentOriginal7abd8cc905bca337b2313b714ed6500e; ?>
<?php unset($__componentOriginal7abd8cc905bca337b2313b714ed6500e); ?>
<?php endif; ?>

</div>
<!-- </div> -->
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\procurement\admin\partials\vendor_modal.blade.php ENDPATH**/ ?>