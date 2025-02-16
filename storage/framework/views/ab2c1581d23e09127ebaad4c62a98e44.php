<script src="<?php echo e(asset ('fnx/assets/js/phoenix.js')); ?>"></script>



<input type="hidden" id="edit_task_id_h" name="id" value="<?php echo e($task->id); ?>">
<input type="hidden" id="edit_task_table_h" name="table" value="task_table">
<input type="hidden" id="edit_task_event_id" name="project_id" value="<?php echo e($task->project_id); ?>">

<div class="modal-body">
    <div class="mb-3 col-md-12">
        <label class="form-label" for="inputEmail4">Title</label>
        <input name="name" id="edit_task_name" class="form-control" value="<?php echo e($task->name); ?>" type="text" placeholder="" required>
    </div>
    <div class="mb-3 row">

        <div class="col-md-6">
            <label class="form-label" for="inputEmail4">Start Date</label>
            <input class="form-control datetimepicker" id="edit_task_start_date" value="<?php echo e(\Carbon\Carbon::parse($task->start_date)->format('d/m/Y')); ?>" data-target="#floatingInputStartDate" name="start_date" type="text" placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' required>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="inputEmail4">Due Date</label>
            <input class="form-control datetimepicker" id="edit_task_due_date" value="<?php echo e(\Carbon\Carbon::parse($task->due_date)->format('d/m/Y')); ?>" data-target="#floatingInputStartDate" name="due_date" type="text" placeholder="dd/mm/yyyy" placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' required>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-md-6">
            <label class="form-label" for="inputAddress">Status</label>
            <select name="status_id" class="form-select" id="edit_task_status" required>
                <option selected="selected" value="">Select...</option>
                <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($task->status_id == $item->id ): ?>
                <option value="<?php echo e($item->id); ?>" selected>
                    <?php echo e($item->title); ?>

                </option>
                <?php else: ?>
                <option value="<?php echo e($item->id); ?>">
                    <?php echo e($item->title); ?>

                </option>
                <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="inputAddress">Department</label>
            <select name="department_assignment_id" id="edit_task_department_id" class="form-select" id="floatingSelectRating" required>
                <option selected="selected" value="">Select...</option>
                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($task->department_assignment_id == $item->id ): ?>
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
        </div>
    </div>
    <div class="col-12 mb-2">
        <label class="form-label" for="inputAddress2">Assigned to (multiple)</label>

        <select required class="form-select js-example-basic-multiple" id="edit_task_assigned_to" name="assignment_to_id[]" multiple="multiple" data-with="100%" data-placeholder="<?= get_label('type_to_search', 'Type to search') ?>">
            <!-- <select name="assignment_to_id[]" class="form-select" data-choices="data-choices" size="1" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}' id="floatingSelectRating" required> -->
            <?php $__currentLoopData = $task->project->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($emp->id); ?>"><?php echo e($emp->full_name); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="mb-3 row">
        <div class="col-md-6">
            <label class="form-label" for="inputCity">Budget allocated</label>
            <input name="budget_allocation" class="form-control" id="edit_task_budget" type="number" step="0.01" placeholder="" value="<?php echo e($task->budget_allocation); ?>" required>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="inputState">Actual budget utilized</label>
            <input name="actual_budget_allocated" class="form-control" id="edit_task_budget_utilization" type="number" step="0.01" placeholder="" value="<?php echo e($task->actual_budget_allocated); ?>" required>
        </div>
    </div>
    <!-- <h4 class="mt-6">Other Information</h4> -->

    <div class="col-12">
        <label class="form-label" for="gridCheck">Description</label>
        <textarea style="height: 100px;" required name="description" class="form-control tinymce1" id="edit_task_description" data-tinymce="{}" placeholder=""><?php echo e($task->description); ?></textarea>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?= get_label('close', 'Close') ?></label></button>
    <button type="submit" class="btn btn-primary" id="submit_btn"><?= get_label('save', 'Save') ?></label></button>
</div>

<?php
$selected_emp_id = [];
?>
<?php $__currentLoopData = $task->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $selected_emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
array_push($selected_emp_id, $selected_emp->id);
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<script>
    $(".js-example-basic-multiple").select2();
    data = [];
    data = <?php echo json_encode($selected_emp_id); ?>;
    console.log(data);
    $('#edit_task_assigned_to').val(data);
    $("#edit_task_assigned_to").trigger("change");
</script><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\events\admin\task\mv\edit.blade.php ENDPATH**/ ?>