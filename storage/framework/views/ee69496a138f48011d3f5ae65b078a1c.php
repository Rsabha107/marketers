
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
                            <?= get_label('project_tag', 'Tag') ?>
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
            <a href="#!" id="add_project_tag" data-table="project_tag_table" data-id="0">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_project_tag', 'Create Tag') ?>">
                    <i class="bx bx-plus"></i>
                </button>
            </a>
        </div>
    </div>
    <div class="row g-3 mb-4">
        <div class="col-auto">
            <h2 class="mb-0">Tag</h2>
        </div>
    </div>
        <?php if (isset($component)) { $__componentOriginalfe34532f0d97fdde8d60312526618cd3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfe34532f0d97fdde8d60312526618cd3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.projects.settings.tag-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('projects.settings.tag-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfe34532f0d97fdde8d60312526618cd3)): ?>
<?php $attributes = $__attributesOriginalfe34532f0d97fdde8d60312526618cd3; ?>
<?php unset($__attributesOriginalfe34532f0d97fdde8d60312526618cd3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfe34532f0d97fdde8d60312526618cd3)): ?>
<?php $component = $__componentOriginalfe34532f0d97fdde8d60312526618cd3; ?>
<?php unset($__componentOriginalfe34532f0d97fdde8d60312526618cd3); ?>
<?php endif; ?>
</div>

<script src="<?php echo e(asset('assets/js/pages/project/setting/tag.js')); ?>"></script>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>


<?php $__env->stopPush(); ?>


<?php echo $__env->make('projects.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\projects\admin\setting\tag\index.blade.php ENDPATH**/ ?>