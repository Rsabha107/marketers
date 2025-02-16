<script src="<?php echo e(asset ('fnx/assets/js/phoenix.js')); ?>"></script>



<input type="hidden" id="edit_task_id_h" name="id" value="<?php echo e($task->id); ?>">
<input type="hidden" id="edit_task_table_h" name="table" value="task_table">
<input type="hidden" id="edit_task_event_id" name="project_id" value="<?php echo e($task->project_id); ?>">

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <div class="ms-3">
            <h5 class="mb-0 fs-sm">Add Task</h5>
        </div>
    </div>
    <div class="card-body">

        <div class="mb-3 col-sm-6 col-md-12">
            <div class="form-floating">
                <input class="form-control" name="name" id="add_task_name" type="text"
                    placeholder="Project title" value="<?php echo e($task->name); ?>" required />
                <label for="add_task_name">Task Title</label>
                <div class="invalid-feedback">
                    Please enter a title.
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="mb-3 col-sm-6 col-md-6">
                <div class="form-floating">
                    <select name="status_id" class="form-select" id="add_task_status">
                        <option selected="selected" value="">Select...</option>
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->id); ?>"
                            <?php echo e($task->status_id == $item->id ? 'selected' : null); ?>>
                            <?php echo e($item->title); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <label for="add_task_status">Status</label>
                </div>
            </div>
            <div class="mb-3 col-sm-6 col-md-6">
                <div class="form-floating">
                    <select name="milestone" class="form-select" id="add_task_milestone">
                        <option selected="selected" value="0">No</option>
                        <option value="1">Yes</option>
                    </select>
                    <label for="add_task_milestone">Milestone</label>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-6 col-md-6">
                <div class="flatpickr-input-container">
                    <div class="form-floating">
                        <input 
                            class="form-control datetimepicker" 
                            id="add_task_start_date" 
                            type="text"
                            placeholder="dd/mm/yyyy" 
                            placeholder="start date" name="start_date" required
                            value="<?php echo e($task->start_date ? \Carbon\Carbon::parse($task->start_date)->format('d/m/Y') : null); ?>"
                            data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                        <div class="invalid-feedback">
                            Please enter start date.
                        </div>
                        <label class="ps-6" for="add_task_start_date">Start date</label><span
                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6">
                <div class="flatpickr-input-container">
                    <div class="form-floating">
                        <input 
                            class="form-control datetimepicker" 
                            id="add_task_due_date" type="text"
                            placeholder="dd/mm/yyyy" 
                            placeholder="deadline"
                            value="<?php echo e($task->due_date ? \Carbon\Carbon::parse($task->due_date)->format('d/m/Y') : null); ?>"
                            name="due_date"
                            data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                        <label class="ps-6" for="add_task_start_date">Deadline</label><span
                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="mb-3 col-md-6">
                <label class="form-label" for="inputAddress2">Assign to (multiple)</label>
                <select class="form-select js-select-task-edit-assign-multiple" data-control="select2"
                    id="edit_task_assigned_to" name="assignment_to_id[]" multiple="multiple"
                    data-with="100%">
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>">
                        <?php echo e($item->full_name); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <!-- <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please choose a username.
                            </div> -->
            </div>
            <div class="mb-3 col-md-6">
                <label class="form-label" for="inputAddress2">Tags (multiple)</label>
                <select class="form-select js-select-task-edit-tags-multiple" id="edit_task_tag"
                    name="tag_id[]" multiple="multiple" data-with="100%">
                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($item->id); ?>">
                        <?php echo e($item->title); ?>

                    </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <div class="mb-3 col-sm-6 col-md-6">
                <div class="form-floating">
                    <input class="form-control" name="budget_allocation" id="add_task_budget" type="number" step="0.01"
                        placeholder="" value="<?php echo e($task->budget_allocation); ?>"/>
                    <label for="add_task_budget">Cost</label>
                </div>
            </div>

            <div class="mb-3 col-sm-6 col-md-6">
                <div class="form-floating">
                    <input class="form-control" name="actual_budget_allocated" id="add_task_budget_utilization" type="number" step="0.01"
                        placeholder="" value="<?php echo e($task->actual_budget_allocated); ?>"/>
                    <label for="add_task_name">Sales</label>
                </div>
            </div>
        </div>
        <!-- <h4 class="mt-6">Other Information</h4> -->

        <div class="col-12 gy-3 mb-3">
            <div class="form-floating">
                <textarea class="form-control" name="description" id="add_task_description" placeholder="" style="height: 100px" required><?php echo e($task->description); ?></textarea>
                <div class="invalid-feedback">
                    Please enter a description.
                </div>
                <label for="add_task_description">Description</label>
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
                    <button class="btn btn-primary px-5 px-sm-15" id="submit_btn">Create Task</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
$selected_emps_id = [];
$selected_tags_id = [];
?>

<?php $__currentLoopData = $task->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selected_emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
array_push($selected_emps_id, $selected_emp->id);
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__currentLoopData = $task->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selected_tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
array_push($selected_tags_id, $selected_tag->id);
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
    $(".js-select-task-edit-assign-multiple").select2({
        closeOnSelect: false,
        placeholder: "Select ...",
    });
    $(".js-select-task-edit-tags-multiple").select2({
        closeOnSelect: false,
        placeholder: "Select ...",
    });
    selected_emp_data = [];
    selected_tag_data = [];
    selected_emp_data = <?php echo json_encode($selected_emps_id); ?>;
    selected_tag_data = <?php echo json_encode($selected_tags_id); ?>;
    console.log('selected emp data');
    console.log(selected_emp_data);
    $('#edit_task_assigned_to').val(selected_emp_data);
    $("#edit_task_assigned_to").trigger("change");

    $('#edit_task_tag').val(selected_tag_data);
    $("#edit_task_tag").trigger("change");
</script><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\projects\admin\task\mv\edit.blade.php ENDPATH**/ ?>