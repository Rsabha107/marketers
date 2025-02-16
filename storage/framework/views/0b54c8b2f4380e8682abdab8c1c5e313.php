<div class="d-flex justify-content-center">
    <div class="spinner-border" style="display:none;" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<div class="mb-5">
    <?php if($task->files->isEmpty()): ?>
    <div class="d-flex flex-wrap p-20" id="task-file-list">
        <div class="align-items-center d-flex flex-column text-lightest p-20 w-100">
            <svg class="svg-inline--fa fa-file fa-w-12 f-21 w-100" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                <path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm160-14.1v6.1H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"></path>
            </svg><!-- <i class="fa fa-file f-21 w-100"></i> Font Awesome fontawesome.com -->

            <div class="f-15 mt-4">
                - No files found. -
            </div>
        </div>
    </div>
    <?php else: ?>
    <?php $__currentLoopData = $task->files; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $file): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- <div class="border-top py-3"> -->
    <div class="border-bottom border-dashed mb-3">
        <div class="me-n3 mb-4">
            <div class="d-flex flex-between-center">
                <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                    <p class="text-body-highlight mb-0 lh-1">
                        <a href="<?php echo e(asset('/upload/event_files/')); ?>/<?php echo e($file->file_name); ?>" target="_blank"><?php echo e($file->original_file_name); ?></a>
                    </p>
                </div>
                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>
                <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item text-danger removeFileDiv" href="#!" data-table="task_table" data-id="<?php echo e($file->id); ?>" id="deletexxs">Delete</a></div>
            </div>
            <p class="fs-9 text-body-tertiary mb-1"><span>
                    <?php echo e($file->file_size); ?> / 100kb </span><span class="text-body-quaternary mx-1">| </span>
                <a href="#!"><?php echo e($file->user_name); ?> </a>
                <span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">
                    <?php echo e($file->created); ?>

                </span>
            </p>
            <?php if( strtolower($file->file_extension) == "jpg" ||
            strtolower($file->file_extension) == "jpeg" ||
            strtolower($file->file_extension) == "png" ): ?>
            <a href="<?php echo e(asset('/upload/event_files/')); ?>/<?php echo e($file->file_name); ?>" target="_blank"><img class="rounded-2 img-thumbnail" src="<?php echo e(asset('/upload/event_files/')); ?>/<?php echo e($file->file_name); ?>" alt="" width="200" height="200"></a>
            <?php endif; ?>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\events\admin\task\overview\files.blade.php ENDPATH**/ ?>