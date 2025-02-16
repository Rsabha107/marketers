<!-- <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script> -->
<script src="<?php echo e(asset ('assets/tracki/js/phoenix.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('assets/js/pages/employees.js')); ?>"></script> -->

<?php echo csrf_field(); ?>
<input type="hidden" id="add_employee_leave_id_h" name="id" value="<?php echo e($employee_leave->id); ?>">
<input type="hidden" id="add_employee_leave_table_h" name="table" value="employee_leave_table">

<div class="modal-body">
    <!-- <div class="row"> -->
    <!-- begining of left div -->
    <div class="col-md-12">
        <!-- <div class="mb-3 row"> -->

        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">Employee</label>
            <input class="form-control" type="text" placeholder="" value="<?php echo e($employee_leave->employees->full_name); ?>" disabled>
            <!-- <div class="invalid-feedback">This field is required.</div> -->
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>

        <?php if(Auth::user()->hasRole('SuperAdmin')): ?>
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">Status <span class="text-danger">*</span></label>
            <select class="form-select" name="status_id" required>
                <option value="" selected>Select Status...</option>
                <?php $__currentLoopData = $employee_leave_statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($employee_leave->status_id == $item->id ): ?>
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
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>
        <?php endif; ?>

        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">Leave Type <span class="text-danger">*</span></label>
            <select class="form-select" name="leave_type_id" id="edit_leave_type_id" required>
                <option value="" selected>Select Leave Type...</option>
                <?php $__currentLoopData = $employee_leave_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($employee_leave->leave_type_id == $item->id ): ?>
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
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>

        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">From <span class="text-danger">*</span></label>
            <input class="form-control datetimepicker" id="edit_date_from" name="date_from"
                value="<?php echo e(\Carbon\Carbon::parse($employee_leave->date_from)->format('d/m/Y')); ?>" type="text" placeholder="dd/mm/yyyy"
                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' required>
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">To <span class="text-danger">*</span></label>
            <input class="form-control datetimepicker" id="edit_date_to" name="date_to"
                value="<?php echo e(\Carbon\Carbon::parse($employee_leave->date_to)->format('d/m/Y')); ?>" type="text" placeholder="dd/mm/yyyy"
                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' required>
        </div>

        <div class="col-md-12">
            <label class="form-label" for="gridCheck">Leave Reason <span class="text-danger">*</span></label>
            <textarea style="height: 100px;" required name="reason" id="edit_reason" class="form-control tinymce1" data-tinymce="{}" placeholder=""><?php echo e($employee_leave->reason); ?></textarea>
        </div>
        <!-- </div> -->
    </div>
    <!-- end of left div -->
    <!-- </div> -->
    <!-- <div class="mb-3">
                        <input class="form-control form-control-sm" id="customFileSm" type="file" name="profile_image_name" id="fileupld" />
                    </div> -->
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?= get_label('close', 'Close') ?></label></button>
    <button type="submit" class="btn btn-primary" id="submit_btn"><?= get_label('save', 'Save') ?></label></button>
</div>
<!-- </form> -->
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\manager\leave\mv\edit.blade.php ENDPATH**/ ?>