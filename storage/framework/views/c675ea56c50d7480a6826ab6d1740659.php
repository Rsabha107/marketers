<!-- <form class="row g-3  px-3 needs-validation form-submit-event" id="edit_employee_form" novalidate="" action="<?php echo e(route ('tracki.employee.store')); ?>" method="POST"> -->
<!-- <?php echo csrf_field(); ?> -->

<!-- <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script> -->
<script src="<?php echo e(asset ('assets/tracki/js/phoenix.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('assets/js/pages/employees.js')); ?>"></script> -->


<!-- <form class="row g-3  px-3 needs-validation form-submit-event" id="add_employee_form" novalidate="" action="<?php echo e(route ('tracki.employee.store')); ?>" method="POST"> -->
<!-- <?php echo csrf_field(); ?> -->

<!-- <form class="row g-3  px-3 needs-validation form-submit-event" id="add_employee_form" novalidate="" action="<?php echo e(route ('tracki.employee.store')); ?>" method="POST"> -->
<?php echo csrf_field(); ?>

<input type="hidden" id="add_employee_salary_id_h" name="id" value="<?php echo e($employee_salary->id); ?>">
<input type="hidden" id="add_employee_table_h" name="table" value="employee_salary_table">

<div class="modal-body">

    <div class="row mb-5">
        <!-- begining of left div -->
        <div class="col-md-12">
            <div class="mb-3 row">
                <div class="col-md-6">
                    <label class="form-label" for="inputEmail4">Employee</label>
                    <input class="form-control" type="text" placeholder="" value="<?php echo e($employee_salary->employees->full_name); ?>" disabled>
                    <!-- <div class="invalid-feedback">This field is required.</div> -->
                </div>

                <div class="col-md-6">
                    <label class="form-label" for="inputEmail4">Net Salary</label>
                    <input name="net_salary" id="edit_net_salary" class="form-control" type="text" placeholder="" value="<?php echo e($employee_salary->net_salary); ?>">
                    <!-- <div class="invalid-feedback">This field is required.</div> -->
                </div>
            </div>
        </div>
        <!-- end of left div -->
    </div>

</div>
<div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?= get_label('close', 'Close') ?></label></button>
    <button type="submit" class="btn btn-primary" id="submit_btn"><?= get_label('save', 'Save') ?></label></button>
</div>
<!-- </form> -->

<script>
    $('#edit_profile_image_name').change(function(e) {
        console.log('inside edit profile_image_name')
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#edit_showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(e.target.files['0']);
    });
</script>
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\admin\files\mv\edit.blade.php ENDPATH**/ ?>