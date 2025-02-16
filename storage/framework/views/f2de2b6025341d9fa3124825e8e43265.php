<script src="<?php echo e(asset ('fnx/assets/js/phoenix.js')); ?>"></script>

<input type="hidden" name="table" value="project_table" />
<div>

    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom">
            <div class="ms-3">
                <h5 class="mb-0 fs-sm">Add Project</h5>
            </div>
        </div>
        <div class="card-body">

            <!-- <div class="row mb-3"> -->
            <div class="col-sm-6 col-md-12 mb-3">
                <div class="form-floating">
                    <input class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name"
                        id="floatingInputGrid" type="text" placeholder="Project title" required />
                    <div class="invalid-feedback">
                        Please enter project title.
                    </div>
                    <label for="floatingInputGrid">Project title</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6  mb-3">
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
                <div class="col-sm-6 col-md-6  mb-3">
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
            </div>
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6  mb-3">
                    <div class="form-floating">
                        <select name="project_type_id" class="form-select  <?php $__errorArgs = ['project_type_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                            id="add_project_project_type" required>
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
                        <div class="invalid-feedback">
                            Please select project type.
                        </div>
                        <label for="floatingSelectPrivacy">Project type</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6  mb-3">
                    <div class="form-floating">
                        <select name="use_project_template" class="form-select">
                            <option selected="selected" value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                        <label for="floatingSelectTask">Use Project Template</label>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-12  mb-3">
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
            <div class="col-sm-6 col-md-12  mb-3">
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
            <!-- </div> -->
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6  mb-3">
                    <div class="flatpickr-input-container">
                        <div class="form-floating">
                            <input class="form-control datetimepicker" id="floatingInputStartDate" type="date"
                                placeholder="dd/mm/yyyy" placeholder="start date" name="start_date"
                                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' required />
                            <div class="invalid-feedback">
                                Please enter start date.
                            </div>
                            <label class="ps-6" for="floatingInputStartDate">Start date</label><span
                                class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6  mb-3">
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
                        style="height: 100px" required></textarea>
                    <div class="invalid-feedback">
                        Please enter project overview.
                    </div>
                    <label for="floatingProjectOverview">project overview</label>
                </div>
            </div>


            <div class="row mb-3">
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
            </div>
            <div class="col-12 gy-3 mb-3">
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
                    <a href="javascript:void(0)" class="col-auto">
                        <button type="button" class="btn btn-phoenix-danger px-5" data-bs-toggle="tooltip"
                            data-bs-placement="right" data-bs-dismiss="offcanvas">
                            Cancel
                        </button>
                    </a>
                    <div class="col-auto">
                        <button class="btn btn-primary px-5 px-sm-15" id="submit_btn">Create Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\projects\admin\task\mv\create.blade.php ENDPATH**/ ?>