<!-- //****************************************** offcanvasAddEditTask (not used but can be an option.  will add it to config) ******************************************/ */ -->

<div class="offcanvas offcanvas-end offcanvas-global-modal in" id="offcanvas-edit-item-master-modal" tabindex="-1"
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
                <form class="row g-3 needs-validation form-submit-event" id="edit_item_master" novalidate=""
                    action="<?php echo e(route('procurement.items.update')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div id="global-edit-item-master-content"></div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-end offcanvas-global-modal in" id="offcanvas-add-item-master-modal" tabindex="-1"
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
    <?php if (isset($component)) { $__componentOriginald8dd40f7b7c97662f61373c238b995a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8dd40f7b7c97662f61373c238b995a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.procurement.items.admin-item-drawer','data' => ['id' => '','formAction' => ''.e(route('procurement.items.store')).'','unittypes' => $unit_types,'categories' => $categories,'subcategories' => $sub_categories,'formId' => 'add_item_master']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('procurement.items.admin-item-drawer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => '','formAction' => ''.e(route('procurement.items.store')).'','unittypes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($unit_types),'categories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($categories),'subcategories' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sub_categories),'formId' => 'add_item_master']); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8dd40f7b7c97662f61373c238b995a0)): ?>
<?php $attributes = $__attributesOriginald8dd40f7b7c97662f61373c238b995a0; ?>
<?php unset($__attributesOriginald8dd40f7b7c97662f61373c238b995a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8dd40f7b7c97662f61373c238b995a0)): ?>
<?php $component = $__componentOriginald8dd40f7b7c97662f61373c238b995a0; ?>
<?php unset($__componentOriginald8dd40f7b7c97662f61373c238b995a0); ?>
<?php endif; ?>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\procurement\admin\partials\item_modal.blade.php ENDPATH**/ ?>