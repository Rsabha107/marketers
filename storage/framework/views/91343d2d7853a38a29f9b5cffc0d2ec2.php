<!-- <form class="row g-3  px-3 needs-validation form-submit-event" id="edit_employee_form" novalidate="" action="<?php echo e(route ('tracki.employee.store')); ?>" method="POST"> -->
<!-- <?php echo csrf_field(); ?> -->

<!-- <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script> -->
<script src="<?php echo e(asset ('assets/tracki/js/phoenix.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('assets/js/pages/employees.js')); ?>"></script> -->


<!-- <form class="row g-3  px-3 needs-validation form-submit-event" id="add_employee_form" novalidate="" action="<?php echo e(route ('tracki.employee.store')); ?>" method="POST"> -->
<!-- <?php echo csrf_field(); ?> -->

<!-- <form class="row g-3  px-3 needs-validation form-submit-event" id="add_employee_form" novalidate="" action="<?php echo e(route ('tracki.employee.store')); ?>" method="POST"> -->
<?php echo csrf_field(); ?>

<input type="hidden" id="add_employee_timesheet_id_h" name="id" value="<?php echo e($employee_timesheet->id); ?>">
<input type="hidden" id="add_employee_table_h" name="table" value="employee_timesheet_table">

<div class="modal-body">

    <table class="lh-sm table  bordered">
        <thead>
            <tr>
                <th scope="col">Day</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i = 1; $i < getDaysInMonthOfYear($employee_timesheet->month_selection) + 1; ++$i): ?>
                <tr>
                    <td class="align-top py-1 text-body text-nowrap fw-bold ps-3"><?php echo e($i); ?> : </td>
                    <td class="text-body-tertiary text-opacity-85 fw-semibold ps-3">

                        <input type="hidden" name="calendar_day[<?php echo e($i); ?>]" value="<?php echo e($i); ?>">

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="day_action[<?php echo e($i); ?>]" value="W" />
                            <label class="form-check-label text-primary" for="inlineRadio1">Worked</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="day_[<?php echo e($i); ?>]" value="L" />
                            <label class="form-check-label" for="inlineRadio2">Paid Leave</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="day_[<?php echo e($i); ?>]" value="U" />
                            <label class="form-check-label" for="inlineRadio3">Unpaid Leave</label>
                        </div>
                    </td>
                </tr>
                <?php endfor; ?>
        </tbody>
    </table>

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
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\emp\timesheet\mv\edit.blade.php ENDPATH**/ ?>