<!-- <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script> -->
<script src="<?php echo e(asset ('assets/tracki/js/phoenix.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('assets/js/pages/employees.js')); ?>"></script> -->

<?php echo csrf_field(); ?>
<input type="hidden" id="add_employee_leave_id_h" name="id" value="<?php echo e($employee_bank->id); ?>">
<input type="hidden" id="add_employee_leave_table_h" name="table" value="employee_bank_table">

<div class="modal-body">
    <!-- <div class="row"> -->
    <!-- begining of left div -->
    <div class="col-md-12">
        <!-- <div class="mb-3 row"> -->

        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">Employee</label>
            <input class="form-control" type="text" placeholder="" value="<?php echo e($employee_bank->employees->full_name); ?>" disabled>
            <!-- <div class="invalid-feedback">This field is required.</div> -->
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">Bank Branch Name</label>
            <input name="bank_branch_name" maxlength="50" class="form-control" type="text" placeholder="" value="<?php echo e($employee_bank->bank_branch_name); ?>" required>
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">Bank Account Name</label>
            <input name="bank_account_name" maxlength="50" class="form-control" type="text" placeholder="" value="<?php echo e($employee_bank->bank_account_name); ?>" required>
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">IBAN</label>
            <input name="iban" class="form-control" type="text" placeholder="" value="<?php echo e($employee_bank->iban); ?>" maxlength="29" required>
            <!-- <div class="invalid-feedback">This field is required.</div> -->
        </div>
        <div class="col-md-12 mb-3">
            <label class="form-label" for="inputEmail4">Swift Code</label>
            <input name="swift_code" class="form-control" type="text" placeholder="" value="<?php echo e($employee_bank->swift_code); ?>" maxlength="8" required>
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
<!-- </form> -->
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\employee\bank\mv\edit.blade.php ENDPATH**/ ?>