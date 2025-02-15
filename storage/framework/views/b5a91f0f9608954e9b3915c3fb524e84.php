
<?php $__env->startSection('main'); ?>

    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?php echo e(url('/dashboard')); ?>"><?= get_label('home', 'Home') ?></a></li>
            <li class="breadcrumb-item "><a href="<?php echo e(route('projects.admin.project')); ?>">
                    <?= get_label('projects', 'Projects') ?></a></li>
            <li class="breadcrumb-item active">All Projects (<?php echo e($project_data->count()); ?>)</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-center">
            <div id="cover-spin" style="display:none;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    <!-- <div class="row gx-6 gy-3 mb-4 align-items-center">
        <div class="col-auto">
            <h2 class="mb-0">Projects<span class="fw-normal text-body-tertiary ms-3"></span>
            </h2>
        </div>
    </div> -->
    <div class="row justify-content-between align-items-end mb-4 g-3">
        <div class="col-12 col-sm-auto">
            <div class="btn-group position-static" role="group">
                <div class="py-0 me-2">
                    <select class="form-select form-select-sm py-2 ms-n2 border-0 shadow-none" id="project_filter">
                        <option value="" selected>Filter by Project Type .... </option>
                        <?php $__currentLoopData = $project_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="py-0 me-2">
                    <select class="form-select form-select-sm py-2 ms-n2 border-0 shadow-none" id="project_status_filter">
                        <option value="" selected>Filter by Status .... </option>
                        <?php $__currentLoopData = $project_status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="py-0">
                    <select class="form-select form-select-sm py-2 ms-n2 border-0 shadow-none" id="project_functional_area">
                        <option value="" selected>Filter by Functional Area</option>
                        <?php $__currentLoopData = $functional_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <!-- <button class="btn btn-sm btn-phoenix-secondary px-7 flex-shrink-0">More filters</button> -->
            </div>

        </div>

        <div class="col-12 col-sm-auto">
            <div class="d-flex align-items-center">
                
                    
                
                 <a href="javascript:void(0)" data-table="project_table" id="offcanvas-add-project" data-id="0">
                    <button type="button" class="btn btn-primary px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-original-title=" <?= get_label('add_new_project', 'Add new project') ?>">
                        <i class="fa-solid fa-plus me-2"></i>Add new project
                    </button>
                </a>
            </div>
        </div>
    </div>
    <?php echo $__env->make('projects.admin.partials.project_modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php if (isset($component)) { $__componentOriginal407e8111f35c57ff434ae52db3423cf7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal407e8111f35c57ff434ae52db3423cf7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.projects.admin-projects-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('projects.admin-projects-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal407e8111f35c57ff434ae52db3423cf7)): ?>
<?php $attributes = $__attributesOriginal407e8111f35c57ff434ae52db3423cf7; ?>
<?php unset($__attributesOriginal407e8111f35c57ff434ae52db3423cf7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal407e8111f35c57ff434ae52db3423cf7)): ?>
<?php $component = $__componentOriginal407e8111f35c57ff434ae52db3423cf7; ?>
<?php unset($__componentOriginal407e8111f35c57ff434ae52db3423cf7); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script src="<?php echo e(asset('assets/js/pages/project/admin/projects.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('projects.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views/projects/admin/project/list.blade.php ENDPATH**/ ?>