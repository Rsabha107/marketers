
<?php $__env->startSection('main'); ?>
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav>
    <h2 class="mb-4">Create a project</h2>
    
    <div class="row">
        <div class="col-xl-12">
            <form class="row g-3 mb-6 px-3 needs-validation" novalidate="" action="<?php echo e(route('project.store')); ?>"
                method="POST">
                <?php echo csrf_field(); ?>
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating">
                        <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"
                            id="floatingInputGrid" type="text" placeholder="Project title" value="<?php echo e(old('name')); ?>" />
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <label for="floatingInputGrid">Project title</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating">
                        <select name="functional_area_id" class="form-select">
                            <option selected="selected" value="">Select...</option>
                            <?php $__currentLoopData = $functional_areas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Request::old('id') == $item->id): ?>
                                    <option value="<?php echo e($item->id); ?>" selected>
                                        <?php echo e($item->name); ?>

                                    </option>
                                <?php else: ?>
                                    <option value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->name); ?>

                                    </option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for="floatingSelectTask">Functional Area</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-floating">
                        <select name="project_type_id" class="form-select  <?php $__errorArgs = ['project_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="add_project_project_type">
                            <option selected="selected" value="">Select...</option>
                            <?php $__currentLoopData = $project_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Request::old('id') == $item->id): ?>
                                    <option value="<?php echo e($item->id); ?>" selected>
                                        <?php echo e($item->name); ?>

                                    </option>
                                <?php else: ?>
                                    <option value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->name); ?>

                                    </option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <?php $__errorArgs = ['project_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <label for="floatingSelectPrivacy">Project type</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-floating">
                        <select name="use_project_template" class="form-select">
                            <option selected="selected" value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                        <label for="floatingSelectTask">Use Project Template</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-floating">
                        <select name="category_id" class="form-select" id="add_project_category">
                            <option selected="selected" value="">Select...</option>
                            <?php $__currentLoopData = $event_category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if(Request::old('id') == $item->id): ?>
                                    <option value="<?php echo e($item->id); ?>" selected>
                                        <?php echo e($item->name); ?>

                                    </option>
                                <?php else: ?>
                                    <option value="<?php echo e($item->id); ?>">
                                        <?php echo e($item->name); ?>

                                    </option>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for="floatingSelectTeam">Category </label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-floating">
                        <select name="client_id" class="form-select" id="add_project_client">
                            <option selected="selected" value="">Select...</option>
                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->id); ?>">
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
                            <input class="form-control datetimepicker" id="floatingInputStartDate" type="date"
                                placeholder="dd/mm/yyyy" placeholder="start date" name="start_date"
                                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                            <label class="ps-6" for="floatingInputStartDate">Start date</label><span
                                class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="flatpickr-input-container">
                        <div class="form-floating">
                            <input class="form-control datetimepicker" id="floatingInputDeadline" type="date"
                                placeholder="dd/mm/yyyy" placeholder="deadline" name="end_date"
                                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
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
                                <option value="<?php echo e($item->id); ?>">
                                    <?php echo e($item->title); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-12 gy-3">
                    <div class="form-floating">
                        <textarea class="form-control  <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="description" id="floatingProjectOverview" placeholder="Leave a comment here"
                            style="height: 100px"><?php echo e(old('description')); ?></textarea>
                            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <div class="invalid-feedback">
                                <?php echo e($message); ?>

                            </div>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        <label for="floatingProjectOverview">project overview</label>
                    </div>
                </div>

                <div class="col-md-4 gy-3">
                    <div class="form-floating">
                        <input name="budget_allocation" class="form-control" id="edit_project_budget_allocation"
                            type="number" step="0.01" placeholder="Budget" value="0" />
                        <label for="floatingInputBudget">Cost</label>
                    </div>
                </div>
                <div class="col-md-4 gy-3">
                    <div class="form-floating">
                        <input name="total_sales" class="form-control" id="floatingInputBudget" type="number"
                            step="0.01" placeholder="Budget" value="0" />
                        <label for="floatingInputBudget">Sales</label>
                    </div>
                </div>
                <div class="col-md-4 gy-3">
                    <div class="form-floating">
                        <input name="sales_margin" class="form-control" id="floatingInputBudget" type="number"
                            step="0.01" placeholder="Budget" value="0" />
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
                                <option value="<?php echo e($item->id); ?>">
                                    <?php echo e($item->full_name); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="col-12 gy-3">
                    <div class="row g-3 justify-content-end">
                        <a href="<?php echo e(route('projects.admin.project')); ?>" class="col-auto">
                            <button type="button" class="btn btn-phoenix-danger px-5" data-bs-toggle="tooltip"
                                data-bs-placement="right">
                                Cancel
                            </button>
                        </a>
                        <div class="col-auto">
                            <button class="btn btn-primary px-5 px-sm-15">Create Project</button>
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

<?php echo $__env->make('projects.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\projects\admin\project\create.blade.php ENDPATH**/ ?>