<?php $__env->startSection('main'); ?>


<div class="content">

    <div class="border-bottom mb-7 mx-n3 px-2 mx-lg-n6 px-lg-6">
        <div class="row">
            <div class="col-xl-8">
                <div class="d-sm-flex justify-content-between">
                    <h2 class="mb-4">Edit Role</h2>
                    <div class="d-flex mb-3">
                        <a class="btn btn-phoenix-danger me-2 px-6" href="<?php echo e(route('tracki.sec.perm.list')); ?>">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
            <form action="<?php echo e(route ('tracki.sec.perm.update')); ?>" class="row g-3 mb-9 needs-validation" novalidate="" method="post">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="id" value="<?php echo e($permissions->id); ?>">
                <div class="col-sm-6 col-md-9">
                    <div class="form-floating">
                        <input name="name" value="<?php echo e($permissions->name); ?>" class="form-control" id="floatingInputEventName" type="text" placeholder="" required>
                        <label for="floatingInputEventName">Perminssion Name</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-9">
                    <div class="form-floating">
                        <select name="group_name" class="form-select" id="floatingSelectRating" required>
                            <option selected="selected" value="">Select</option>
                            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($permissions->group_name == $item->name ): ?>
                            <option value="<?php echo e($item->name); ?>" selected>
                                <?php echo e($item->name); ?>

                            </option>
                            <?php else: ?>
                            <option value="<?php echo e($item->name); ?>">
                                <?php echo e($item->name); ?>

                            </option>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                        <label for="floatingSelectRating">Group</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-9">
                    <div class="form-floating">
                        <select name="active_flag" class="form-select" id="floatingSelectRating" required>
                            <option value="">Select</option>
                            <?php $__currentLoopData = $status; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($permissions->active_flag == $item->id ): ?>
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
                        <label for="floatingSelectRating">Status</label>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end mt-6">
                    <button class="btn btn-phoenix-secondary action" type="submit" value="save">Save</button>
                    <a class="btn btn-phoenix-danger me-2 px-6" href="<?php echo e(route('tracki.sec.perm.list')); ?>">Cancel</a>

                    <!-- <button class="btn btn-primary action"  type="submit" value="publish">Publish</button> -->
                </div>
            </form>
        </div>
        <!-- </div> -->
    </div>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('tracki.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\sec\permissions\edit.blade.php ENDPATH**/ ?>