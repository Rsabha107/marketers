<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->

<table class="table table-sm">
            <thead>
                <tr>
                    <th scop="col">Day</th>
                    <th scope="col">Date</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $employee_timesheet_entries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee_timesheet_entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e(\Carbon\Carbon::parse($employee_timesheet_entry->calendar_day.'-'.$employee_timesheet->timesheet_period)->format('D')); ?></th>
                    <th scope="row"><?php echo e($employee_timesheet_entry->calendar_day); ?></th>
                    <td class="text-<?php echo e($employee_timesheet_entry->entry_actions->color); ?>"><?php echo e($employee_timesheet_entry->entry_actions->title); ?></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>

<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\payroll\timesheet\entries\mv\get.blade.php ENDPATH**/ ?>