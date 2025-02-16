<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['task']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['task']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<div class="card m-2 shadow" data-task-id="<?php echo e($task->id); ?>">
    <div class="card-body">
        <div class="d-flex justify-content-between">
            <h6 class="card-title"><a href="<?php echo e(url('/tasks/information/' . $task->id)); ?>" target="_blank"><strong><?php echo e($task->title); ?></strong></a></h6>
            <div>
                <div class="input-group">
                    <a href="javascript:void(0);" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class='bx bx-cog'></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-item"><a href="/<?php echo e(Request::segment(1)=='projects'?'projects/tasks':'tasks'); ?>/edit/<?php echo e($task->id); ?>" class="card-link"><i class='menu-icon tf-icons bx bx-edit'></i> <?= get_label('update', 'Update') ?></a></li>
                        <li class="dropdown-item"><a href="javascript:void(0);" class="card-link delete" data-reload="true" data-type="tasks" data-id="<?php echo e($task->id); ?>">
                                <i class='menu-icon tf-icons bx bx-trash text-danger'></i> <?= get_label('delete', 'Delete') ?>
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="javascript:void(0);" class="duplicate" data-reload="true" data-type="tasks" data-id="<?php echo e($task->id); ?>">
                                <i class='menu-icon tf-icons bx bx-copy text-warning'></i><?= get_label('duplicate', 'Duplicate') ?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card-subtitle text-muted mb-3"><?php echo e($task->project->title); ?></div>
        <div class="row mt-2">
            <div class="col-md-6">
                <p class="card-text">
                    <?= get_label('users', 'Users') ?>:
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <?php
                    $users = $task->users;
                    $count = count($users);
                    $displayed = 0;
                    if ($count > 0) { ?>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($displayed < 3): ?> <li class="avatar avatar-sm pull-up" title="<?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>"><a href="/users/profile/<?php echo e($user->id); ?>" target="_blank">
                                <img src="<?php echo e($user->photo ? asset('storage/' . $user->photo) : asset('storage/photos/no-image.jpg')); ?>" class="rounded-circle" alt="<?php echo e($user->first_name); ?> <?php echo e($user->last_name); ?>">
                            </a></li>
                            <?php $displayed++ ?>
                            <?php else: ?>
                            <?php
                            $remaining = $count - $displayed;
                            echo '<span class="badge badge-center rounded-pill bg-primary mx-1">+' . $remaining . '</span>';
                            break;
                            ?>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php } else { ?>
                            <span class="badge bg-primary"><?= get_label('not_assigned', 'Not assigned') ?></span>

                        <?php }
                        ?>

                </ul>
                </p>
            </div>

            <div class="col-md-6">
                <p class="card-text">
                    Clients:
                <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                    <?php
                    $clients = $task->project->clients;
                    $count = $clients->count();
                    // dd($count);
                    $displayed = 0;
                    if ($count > 0) { ?>

                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($displayed < 3): ?> <li class="avatar avatar-sm pull-up" title="<?php echo e($client->first_name); ?> <?php echo e($client->last_name); ?>"><a href="/clients/profile/<?php echo e($client->id); ?>" target="_blank">
                                <img src="<?php echo e($client->photo ? asset('storage/' . $client->photo) : asset('storage/photos/no-image.jpg')); ?>" class="rounded-circle" alt="<?php echo e($client->first_name); ?> <?php echo e($client->last_name); ?>">
                            </a></li>
                            <?php $displayed++ ?>
                            <?php else: ?>
                            <?php
                            $remaining = $count - $displayed;
                            echo '<span class="badge badge-center rounded-pill bg-primary mx-1">+' . $remaining . '</span>';
                            break;
                            ?>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php } else { ?>
                            <span class="badge bg-primary"><?= get_label('not_assigned', 'Not assigned') ?></span>
                        <?php }
                        ?>
                </ul>
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <span class='badge bg-label-<?php echo e($task->status->color); ?> me-1' id="status"> <?php echo e($task->status->title); ?></span>
            <small class="float-right" style="font-size: small; width: 120px"><?php echo e(format_date($task->due_date)); ?></small>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\components\kanban.blade.php ENDPATH**/ ?>