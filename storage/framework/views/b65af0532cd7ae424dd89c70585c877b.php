
<?php $__env->startSection('main'); ?>


<div class="content">

    <div class="border-bottom mb-7 mx-n3 px-2 mx-lg-n6 px-lg-6">
        <div class="row">
            <div class="col-xl-8">
                <div class="d-sm-flex justify-content-between">
                    <h2 class="mb-4">Edit Roles in Permission</h2>
                    <!-- <div class="d-flex mb-3">
                        <a class="btn btn-phoenix-danger me-2 px-6" href="<?php echo e(route('sec.roles.list')); ?>">Cancel</a>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <form action="<?php echo e(route ('sec.rolesetup.update')); ?>" class="row g-3 mb-9 needs-validation" novalidate="" method="post">
                <?php echo csrf_field(); ?>

                <input type="hidden" name="role_id" value="<?php echo e($role->id); ?>">
                <div class="col-sm-6 col-md-9">
                    <div class="form-floating">
                        <h3><?php echo e($role->name); ?></h3>
                    </div>
                    <hr>

                    <div class="col-sm-6 col-md-9">
                        <div class="form-check">
                            <input class="form-check-input" id="flexCheckDefaultmain" type="checkbox" value="">
                            <label class="form-check-label" for="flexCheckDefaultmain">All Permissions</label>
                        </div>
                    </div>
                    <hr>
                    <?php $__currentLoopData = $permission_groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="row">
                        <div class="col-3">
                            <?php
                            $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
                            ?>

                            <div class="col-sm-6 col-md-9">
                                <div class="form-check">

                                    <input class="form-check-input" id="flexCheckDefault" type="checkbox"
                                        <?php echo e(App\Models\User::roleHasPermissions($role, $permissions)? 'checked':''); ?>>

                                    <label class="form-check-label" for="flexCheckDefault"><?php echo e($group->group_name); ?></label>
                                </div>
                            </div>

                        </div>
                        <div class="col-9">



                            <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-sm-6 col-md-9">
                                <div class="form-check">
                                    <input class="form-check-input" id="flexCheckDefault<?php echo e($permission->id); ?>" type="checkbox" name="permissions[]" value="<?php echo e($permission->id); ?>"
                                    <?php echo e($role->hasPermissionTo($permission->name)? 'checked':''); ?>>
                                    <label class="form-check-label" for="flexCheckDefault<?php echo e($permission->id); ?>"><?php echo e($permission->name); ?></label>
                                </div>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <br>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-12 d-flex justify-content-start mt-6">
                        <button class="btn btn-phoenix-secondary action" type="submit" value="save">Save</button>
                        <!-- <a class="btn btn-phoenix-danger me-2 px-6" href="<?php echo e(route('sec.roles.list')); ?>">Cancel</a> -->

                        <!-- <button class="btn btn-primary action"  type="submit" value="publish">Publish</button> -->
                    </div>
            </form>
        </div>
    </div>
    <!-- </div> -->
</div>

<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->

<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>

<script type="text/javascript">
    $('#flexCheckDefaultmain').click(function() {

        if ($(this).is(':checked')) {
            $('input[type= checkbox').prop('checked', true);
        } else {
            $('input[type= checkbox').prop('checked', false);
        }

    });
</script>


<?php $__env->stopPush(); ?>

<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\sec\rolesetup\edit.blade.php ENDPATH**/ ?>