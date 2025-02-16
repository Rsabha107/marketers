<div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 row-cols-xxl-4 g-3 mb-9">
        <?php $__currentLoopData = $project_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col">
                <div class="card h-100 hover-actions-trigger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <h4 class="mb-2 line-clamp-1 lh-sm flex-1 me-5"><?php echo e($item->name); ?></h4>

                            <div class="hover-actions top-0 end-0 mt-4 me-4">
                                <!-- <button class="btn btn-primary btn-icon flex-shrink-0" id="projectsCardViewModal" data-bs-toggle="modal" data-bs-target="#projectsCardViewModal"><span class="fa-solid fa-chevron-right"></span></button> -->

                                <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                    type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true"
                                    aria-expanded="false" data-bs-reference="parent"><span
                                        class="fa-solid fa-gear"></span></button>
                                <div class="dropdown-menu dropdown-menu-end py-2">
                                    <?php if(Auth::user()->can('project.edit')): ?>
                                        <a class="dropdown-item" href="javascript:void(0);" id="add_edit_project"
                                            data-action="update" data-source="list" data-type="edit" data-table="none"
                                            data-id="<?php echo e($item->id); ?>" data-redirect="card"
                                            data-workspace_id="<?php echo e(session()->get('workspace_id')); ?>">Edit</a>
                                    <?php endif; ?>
                                    <?php if(Auth::user()->can('project.delete')): ?>
                                        <a class="dropdown-item text-danger" href="#!" id="delete"
                                            data-id="" title="Delete" class="card-link">Delete</a>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                        <span
                            class="badge badge-phoenix fs-10 mb-4 badge-phoenix-<?php echo e($item->status?->color); ?>"><?php echo e($item->status?->title); ?></span>
                        <span
                            class="badge badge-phoenix fs-10 mb-4 badge-phoenix-<?php echo e($item->fundCategories?->name == 'Budgeted' ? 'success' : 'danger'); ?>"><?php echo e($item->fundCategories?->name); ?></span>
                        <div class="d-flex align-items-center mb-2"><span
                                class="fa-solid fa-user me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                            <p class="fw-bold mb-0 text-truncate lh-1">Client : <span
                                    class="fw-semibold text-primary ms-1"> <?php echo e($item->client->first_name); ?>

                                    <?php echo e($item->client->last_name); ?></span></p>
                        </div>
                        <div class="d-flex align-items-center mb-2"><span
                                class="fa-solid fa-credit-card me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                            <p class="fw-bold mb-0 lh-1">Budget : <span
                                    class="ms-1 text-body-emphasis"><?php echo e($item->budget_allocation); ?></span></p>
                        </div>
                        <div class="d-flex align-items-center mb-4"><span
                                class="fa-solid fa-cash-register me-2 text-body-tertiary fs-9 fw-extra-bold"></span>
                            <p class="fw-bold mb-0 lh-1">Balance : <span
                                    class="ms-1 text-body-emphasis"><?php echo e($item->tasks->sum('actual_budget_allocated')); ?></span>
                            </p>
                        </div>
                        <div class="d-flex justify-content-between text-body-tertiary fw-semibold">
                            <p class="mb-2"> Progress</p>
                            <p class="mb-2 text-body-emphasis"><?php echo e(get_project_progress($item->id)); ?>%</p>
                        </div>
                        <div class="progress bg-bg-<?php echo e($item->status->color); ?>-subtle">
                            <div class="progress-bar rounded bg-<?php echo e($item->status->color); ?>" role="progressbar"
                                aria-label="Success example" style="width: <?php echo e(get_project_progress($item->id)); ?>%"
                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0 fw-bold fs-9">Started :<span
                                    class="fw-semibold text-body-tertiary text-opactity-85 ms-1">
                                    <?php echo e(format_date($item->start_date)); ?></span></p>
                        </div>
                        <div class="d-flex align-items-center mt-2">
                            <p class="mb-0 fw-bold fs-9">Deadline : <span
                                    class="fw-semibold text-body-tertiary text-opactity-85 ms-1">
                                    <?php echo e(format_date($item->end_date)); ?></span></p>
                        </div>
                        <div class="d-flex d-lg-block d-xl-flex justify-content-between align-items-center mt-3">
                            <div class="avatar-group">
                                <?php $__currentLoopData = $item->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($user->emp_files?->file_path): ?>
                                        <div class="avatar avatar-m ">
                                            <a href="<?php echo e(route('hr.admin.employee.profile', encrypt($user->id))); ?>"
                                                role="button" title="<?php echo e($user->full_name); ?>">
                                                <img class="rounded-circle pull-up"
                                                    src=" <?php echo e($user->emp_files->file_path); ?><?php echo e($user->emp_files->file_name); ?>"
                                                    alt="" />
                                            </a>
                                        </div>
                                    <?php else: ?>
                                        <div class="avatar avatar-m  me-1">

                                            <a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                href="<?php echo e(route('hr.admin.employee.profile', encrypt($user->id))); ?>"
                                                role="button" title="<?php echo e($user->name); ?>">
                                                <div class="avatar avatar-m  rounded-circle pull-up">
                                                    <div class="avatar-name rounded-circle me-2">
                                                        <span><?php echo e(generateInitials($user->full_name)); ?></span></div>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="avatar avatar-m  me-1">

                                    <a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                        href="javascript:void(0);" id="edit_project" data-action="update"
                                        data-source="list" data-type="edit" data-table="none"
                                        data-id="<?php echo e($item->id); ?>" data-redirect="card"
                                        data-workspace_id="<?php echo e(session()->get('workspace_id')); ?>" role="button"
                                        title="add">
                                        <div class="avatar avatar-m  rounded-circle pull-up">
                                            <div class="avatar-name rounded-circle me-2 text-warning"><span>+</span></div>

                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="mt-lg-3 mt-xl-0"><a href="<?php echo e(route('projects.admin.task', $item['id'])); ?>"> <i
                                        class="fa-solid fa-list-check me-1"></i>
                                    <p class="d-inline-block fw-bold mb-0"><?php echo e($item->tasks->count()); ?><span
                                            class="fw-normal"> Task</span></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\events\admin\event\mv\card.blade.php ENDPATH**/ ?>