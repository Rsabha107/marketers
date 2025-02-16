
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
                        <li class="breadcrumb-item"><a href="<?php echo e(route('hr.admin.employee')); ?>">
                                <?= get_label('employees', 'Employees') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('project_project_type', 'Project Type') ?>
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
            <a href="#!" id="add_project_project_type" data-table="project_project_type_table" data-id="0">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_project_project_type', 'Create Project Type') ?>">
                    <i class="bx bx-plus"></i>
                </button>
            </a>
        </div>
    </div>
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Project Type</h2>
        </div>
    </div>
        <?php if (isset($component)) { $__componentOriginal4d5e87af2e6b14b5c25430268f8a8889 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d5e87af2e6b14b5c25430268f8a8889 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.projects.settings.projecttype-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('projects.settings.projecttype-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d5e87af2e6b14b5c25430268f8a8889)): ?>
<?php $attributes = $__attributesOriginal4d5e87af2e6b14b5c25430268f8a8889; ?>
<?php unset($__attributesOriginal4d5e87af2e6b14b5c25430268f8a8889); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d5e87af2e6b14b5c25430268f8a8889)): ?>
<?php $component = $__componentOriginal4d5e87af2e6b14b5c25430268f8a8889; ?>
<?php unset($__componentOriginal4d5e87af2e6b14b5c25430268f8a8889); ?>
<?php endif; ?>
</div>

<script src="<?php echo e(asset('assets/js/pages/project/setting/project_type.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>


<?php $__env->stopPush(); ?>


<?php echo $__env->make('projects.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\projects\admin\setting\project_type\index.blade.php ENDPATH**/ ?>