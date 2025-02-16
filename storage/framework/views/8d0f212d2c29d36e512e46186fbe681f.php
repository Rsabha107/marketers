<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->

<div class="content">
    <div class="container-fluid">
        <div class="d-flex justify-content-between m-2">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(url('/home')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('main.project.show.card')); ?>"><?= get_label('projects', 'Projects') ?></a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('main.task.manage')); ?>"><?= get_label('tasks', 'Tasks') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('all', 'All') ?>
                        </li>
                    </ol>
                </nav>
            </div>
            <div>
                <a href="javascript:void(0)" id="add_edit_task" data-action="store" data-source="manage" data-type="add" data-table="task_table" data-id="0" ><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_task', 'Create task') ?>"><i class="bx bx-plus"></i></button></a>
            </div>
        </div>
        
    </div>



    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('main.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\users\all.blade.php ENDPATH**/ ?>