<div class="d-flex justify-content-center">
    <div class="spinner-border" style="display:none;" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
</div>
<div class="mb-3">
    <div id="taskTabSubtasks">
        <?php if($task->subtask->isEmpty()): ?>
        <div class="d-flex flex-wrap p-20" id="task-file-list">
            <div class="align-items-center d-flex flex-column text-lightest p-20 w-100">
                <i class="fas fa-list-ul"></i>

                <div class="f-15 mt-4">
                    - No subtask found. -
                </div>
            </div>

        </div>
        <?php else: ?>
        <?php $__currentLoopData = $task->subtask; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sub): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $is_completed_flag = "";
        $is_completed_flag = $sub->is_completed
        ? "checked"
        : "";
        ?>
        <div class="row justify-content-between align-items-md-center hover-actions-trigger btn-reveal-trigger border-dashed py-3 gx-0 border-top">
            <div class="col-12">
                <div data-todo-offcanvas-toogle="data-todo-offcanvas-toogle" data-todo-offcanvas-target="todoOffcanvas-1">
                    <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1">
                        <input class="form-check-input flex-shrink-0 form-check-line-through mt-0 me-2 form-check-input-undefined" onclick="update_subtask_status(this)" name="subtask-<?php echo e($sub->id); ?>" type="checkbox" id="<?php echo e($sub->id); ?>" <?php echo e($is_completed_flag); ?>>
                        <label class="form-check-label mb-0 fs-8 me-2 line-clamp-1" for="checkbox-todo-0"><?php echo e($sub->title); ?></label>
                        <span class="badge badge-phoenix fs-10 ms-auto badge-phoenix-<?php echo e($sub->priority->color); ?>"><?php echo e($sub->priority->title); ?></span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex ms-4 lh-1 align-items-center">
                    <p class="text-body-tertiary fs-10 mb-md-0 me-2 mb-0"><?php echo e(Carbon\Carbon::parse($sub->create_at)->format('d-M-Y')); ?></p>
                    <p class="text-body-tertiary fs-10 fw-bold mb-md-0 mb-0"><?php echo e(Carbon\Carbon::parse($sub->create_at)->format('h:m:i a')); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\events\admin\task\overview\subtask.blade.php ENDPATH**/ ?>