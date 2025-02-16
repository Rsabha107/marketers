<!-- <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script> -->
<script src="<?php echo e(asset ('assets/tracki/js/phoenix.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('assets/js/pages/employees.js')); ?>"></script> -->

<?php echo csrf_field(); ?>
<input type="hidden" id="add_employee_leave_id_h" name="id" value="<?php echo e($employee_emergency->id); ?>">
<input type="hidden" id="add_employee_leave_table_h" name="table" value="employee_emergency_table">

<div class="modal-body">
    <!-- <div class="row"> -->
    <!-- begining of left div -->
    <div class="col-md-12">
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">Employee</label>
            <input class="form-control" type="text" placeholder="" value="<?php echo e($employee_emergency->employees->full_name); ?>" disabled>
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">First Name</label>
            <input name="first_name" maxlength="50" id="first_name" class="form-control" type="text" placeholder="" required value="<?php echo e($employee_emergency->first_name); ?>">
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">Last Name</label>
            <input name="last_name" maxlength="50" id="last_name" class="form-control" type="text" placeholder="" required value="<?php echo e($employee_emergency->last_name); ?>">
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4"> Relationship <span class="text-danger">*</span></label>
            <select class="form-select" name="relationship_id" id="edit_relationship_id" required>
                <option value="">Select...</option>
                <?php $__currentLoopData = $relationships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($item->id); ?>" (<?php echo e($item->id == $employee_emergency->relationship_id); ?>? 'selected' , '' )>
                    <?php echo e($item->title); ?>

                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">Contact Number</label>
            <input name="contact_number" maxlength="50" id="edit_contact_number" class="form-control" type="text" placeholder="" value="<?php echo e($employee_emergency->contact_number); ?>">
            <!-- <div class="invalid-feedback">This field is required.</div> -->
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
<!-- </form> --><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\emp\emergency\mv\edit.blade.php ENDPATH**/ ?>