
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->


    <div class="container-fluid">
        <div class="mb-2">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('tracki.employee.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('employees', 'Employees') ?>
                        </li>

                    </ol>
                </nav>
            </div>
            <div class="d-flex justify-content-center">
                <div id="cover-spin" style="display:none;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Tasks</h2>
            </div>
        </div>
        <div class="mb-4 mt-4">
            <div class="d-flex flex-wrap gap-3">
                <!-- <div class="search-box">
                    <form class="position-relative">
                        <input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>

                    </form>
                </div> -->
                <div>
                    <select class="form-select select-appearance" id="tasks_project_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_project', 'Select project') ?></option>
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div>
                    <select class="form-select select-appearance" id="tasks_department_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_department', 'Select department') ?></option>
                        <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>"><?php echo e($key->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div>
                    <select class="form-select select-appearance" id="tasks_employee_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_employee', 'Select employee') ?></option>
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>"><?php echo e($key->first_name); ?> <?php echo e($key->last_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div>
                    <select class="form-select select-appearance" id="task_status_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_status', 'Select status') ?></option>
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($key->id); ?>"><?php echo e($key->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <!-- <div >
                    <select class="form-select select-appearance" id="active_archived_filter" aria-label="Default select example">
                        <option value=""><?= get_label('active_archived', 'Select Active or Archived') ?></option>
                        <option value="N" $selected>Active</option>
                        <option value="Y" >Archived</option>
                    </select>
                </div> -->

                <div class="ms-xxl-auto">
                    <!-- <button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button> -->
                    <!-- <button class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add product</button> -->
                    <?php if(Auth::user()->can('task.create')): ?>
                    <a href="#!" id="add_employee" data-action="store" data-source="manage" data-type="add" data-table="task_table" data-id="0">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_task', 'Create task') ?>">
                            <i class="bx bx-plus"></i>
                        </button>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginaldc59c18c401c8376b7d9886b38a79a7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc59c18c401c8376b7d9886b38a79a7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.projects.admin-tasks-card','data' => ['projectId' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('projects.admin-tasks-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['projectId' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc59c18c401c8376b7d9886b38a79a7c)): ?>
<?php $attributes = $__attributesOriginaldc59c18c401c8376b7d9886b38a79a7c; ?>
<?php unset($__attributesOriginaldc59c18c401c8376b7d9886b38a79a7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc59c18c401c8376b7d9886b38a79a7c)): ?>
<?php $component = $__componentOriginaldc59c18c401c8376b7d9886b38a79a7c; ?>
<?php unset($__componentOriginaldc59c18c401c8376b7d9886b38a79a7c); ?>
<?php endif; ?>
    </div>

    <script src="<?php echo e(asset('assets/js/pages/project/admin/tasks.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>
<?php echo $__env->make('projects.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\events\admin\task\list.blade.php ENDPATH**/ ?>