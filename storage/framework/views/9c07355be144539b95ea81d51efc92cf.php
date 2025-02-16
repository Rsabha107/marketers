
<?php $__env->startSection('main'); ?>

<nav class="mb-3" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
        <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
        <li class="breadcrumb-item active">Default</li>
    </ol>
</nav>
<h2 class="mb-4">Duplicate a project</h2>
<div class="row">
    <div class="col-xl-9">
        <form class="row g-3 mb-6 px-3 needs-validation" novalidate="" action="<?php echo e(route('project.store')); ?>"
            method="POST">
            <?php echo csrf_field(); ?>
            <div class="col-sm-6 col-md-8">
                <div class="form-floating">
                    <input class="form-control" name="name" id="floatingInputGrid" type="text"
                        placeholder="Project title" value="<?php echo e($project->name); ?>" />
                    <label for="floatingInputGrid">Project title</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select name="location_id" class="form-select" id="add_project_location" required>
                        <option selected="selected" value="">Select...</option>
                        <?php $__currentLoopData = $functional_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" <?php echo e(($project->location_id === $item->id)? 'selected' : ''); ?>>
                            <?php echo e($item->name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label for="floatingSelectTask">Functional Area</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select name="project_type_id" class="form-select" id="add_project_project_type" required>
                        <option selected="selected" value="">Select...</option>
                        <?php $__currentLoopData = $project_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" <?php echo e(($project->project_type_id === $item->id)? 'selected' : ''); ?>>
                            <?php echo e($item->name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label for="floatingSelectPrivacy">Project type</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select name="category_id" class="form-select" id="add_project_category" required>
                        <option selected="selected" value="">Select...</option>
                        <?php $__currentLoopData = $event_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" <?php echo e(($project->category_id === $item->id)? 'selected' : ''); ?>>
                            <?php echo e($item->name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label for="floatingSelectTeam">Category </label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating">
                    <select name="client_id" class="form-select" id="add_project_client" required>
                        <option selected="selected" value="">Select...</option>
                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>" <?php echo e(($project->client_id === $item->id)? 'selected' : ''); ?>>
                            <?php echo e($item->first_name . ' ' . $item->last_name); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label for="floatingSelectAdmin">Cleint</label>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="flatpickr-input-container">
                    <div class="form-floating">
                        <input class="form-control datetimepicker" id="floatingInputStartDate" type="text"
                            placeholder="dd/mm/yyyy" placeholder="start date" name="start_date" value="<?php echo e(\Carbon\Carbon::parse($project->start_date)->format('d/m/Y')); ?>"
                            data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' required />
                        <label class="ps-6" for="floatingInputStartDate">Start date</label><span
                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="flatpickr-input-container">
                    <div class="form-floating">
                        <input class="form-control datetimepicker" id="floatingInputDeadline" type="text"
                            placeholder="dd/mm/yyyy" placeholder="deadline" name="end_date" value="<?php echo e(\Carbon\Carbon::parse($project->end_date)->format('d/m/Y')); ?>"
                            data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' required />
                        <label class="ps-6" for="floatingInputDeadline">Deadline</label><span
                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="form-floating form-floating-advance-select">
                    <label>Add Tags</label>
                    <select name="tag_id[]" class="form-select" id="organizerMultiple" data-choices="data-choices"
                        multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                        
                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $project->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pvKey => $pvItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($pvItem->id === $item->id): ?>
                        <option value="<?php echo e($item->id); ?>" selected>
                            <?php echo e($item->title); ?>

                        </option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-12 gy-3">
                <div class="form-floating">
                    <textarea class="form-control" name="description" id="floatingProjectOverview"
                        placeholder="Leave a comment here"
                        style="height: 100px" required><?php echo e($project->description); ?>

                    </textarea>
                    <label for="floatingProjectOverview">project overview</label>
                </div>
            </div>
            <div class="col-md-4 gy-3">
                <div class="form-floating">
                    <input name="budget_allocation" class="form-control" id="floatingInputBudget" type="number"
                        value="<?php echo e($project->budget_allocation); ?>" step="0.01" placeholder="Budget" required />
                    <label for="floatingInputBudget">Cost</label>
                </div>
            </div>
            <div class="col-md-4 gy-3">
                <div class="form-floating">
                    <input name="total_sales" class="form-control" id="floatingInputBudget" type="number"
                        value="<?php echo e($project->attendance_forcast); ?>" step="0.01" placeholder="Sales" required />
                    <label for="floatingInputBudget">Sales</label>
                </div>
            </div>
            <div class="col-md-4 gy-3">
                <div class="form-floating">
                    <input name="sales_margin" class="form-control" id="floatingInputBudget" type="number"
                        value="<?php echo e($project->sales_margin); ?>" step="0.01" placeholder="Sales Margin" required />
                    <label for="floatingInputBudget">Sales Margin</label>
                </div>
            </div>
            <div class="col-12 gy-3">
                <div class="form-floating form-floating-advance-select">
                    <label>Add Resources</label>
                    <select name="assignment_to_id[]" class="form-select" id="organizerMultiple"
                        data-choices="data-choices" multiple="multiple"
                        data-options='{"removeItemButton":true,"placeholder":true}'>
                        
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $__currentLoopData = $project->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pvKey => $pvItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($pvItem->id === $item->id): ?>
                        <option value="<?php echo e($item->id); ?>" selected>
                            <?php echo e($item->full_name); ?>

                        </option>
                        <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <div class="col-12 gy-3">
                <div class="row g-3 justify-content-end">
                    <a href="<?php echo e(route('projects.admin.project')); ?>" class="col-auto">
                        <button type="button" class="btn btn-phoenix-danger px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                            data-bs-original-title=" <?= get_label('cancel', 'Cancel') ?>">
                            Cancel
                        </button>
                    </a>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary px-5 px-sm-15">Create Project</button>
                    </div>
                    
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('assets/js/pages/project/admin/projects.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('projects.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\projects\admin\project\duplicate.blade.php ENDPATH**/ ?>