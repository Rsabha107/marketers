<!-- projects card -->
<?php
$flag = (Request::segment(1) == 'home' || Request::segment(1) == 'users' || Request::segment(1) == 'clients') ? 0 : 1;
?>
<div class="<?= $flag == 1 ? 'card ' : '' ?>mt-4">
    <?php if($flag == 1): ?>
    <div class="card-body">
        <?php endif; ?>
        <div class="table-responsive text-nowrap">
            <?php echo e($slot); ?>

            <?php if(is_countable($projects) && count($projects) > 0): ?>
            <div class="row mt-4 mx-2 mb-4">
                <div class="col-md-4 mb-3">
                    <div class="input-group input-group-merge">
                        <input type="text" id="project_start_date_between" name="start_date_between" class="form-control" placeholder="<?= get_label('start_date_between', 'Start date between') ?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group input-group-merge">
                        <input type="text" id="project_end_date_between" name="project_end_date_between" class="form-control" placeholder="<?= get_label('end_date_between', 'End date between') ?>" autocomplete="off">
                    </div>
                </div>
                <?php if(isAdminOrHasAllDataAccess()): ?>
                <?php if(!isset($id) || (explode('_',$id)[0] !='client' && explode('_',$id)[0] !='user')): ?>
                <div class="col-md-4 mb-3">
                    <select class="form-select" id="projects_user_filter" aria-label="Default select example">
                        <option value=""><?= get_label('select_user', 'Select user') ?></option>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->first_name.' '.$user->last_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <select class="form-select" id="projects_client_filter" aria-label="Default select example">
                        <option value=""><?= get_label('select_client', 'Select client') ?></option>
                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($client->id); ?>"><?php echo e($client->first_name.' '.$client->last_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <?php endif; ?>
                <?php endif; ?>
                <div class="col-md-4">
                    <select class="form-select" id="status_filter" aria-label="Default select example">
                        <option value=""><?= get_label('select_status', 'Select status') ?></option>
                        <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($status->id); ?>" <?php if(request()->has('status') && request()->status == $status->id): ?> selected <?php endif; ?>><?php echo e($status->title); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>

            <input type="hidden" name="project_start_date_from" id="project_start_date_from">
            <input type="hidden" name="project_start_date_to" id="project_start_date_to">

            <input type="hidden" name="project_end_date_from" id="project_end_date_from">
            <input type="hidden" name="project_end_date_to" id="project_end_date_to">

            <input type="hidden" id="is_favorites" value="<?php echo e($favorites??''); ?>">

            <input type="hidden" id="data_type" value="projects">
            <input type="hidden" id="data_table" value="projects_table">
            <div class="mx-2 mb-2">
                <table id="projects_table" data-toggle="table" data-loading-template="loadingTemplate" data-url="/projects/listing/<?php echo e($id??''); ?>" data-icons-prefix="bx" data-icons="icons" data-show-refresh="true" data-total-field="total" data-trim-on-search="false" data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-side-pagination="server" data-show-columns="true" data-pagination="true" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-query-params="queryParamsProjects">
                    <thead>
                        <tr>
                            <th data-checkbox="true"></th>
                            <th data-sortable="true" data-field="id"><?= get_label('id', 'ID') ?></th>
                            <th data-sortable="true" data-field="title"><?= get_label('title', 'Title') ?></th>
                            <th data-field="users" data-formatter="ProjectUserFormatter"><?= get_label('users', 'Users') ?></th>
                            <th data-field="clients" data-formatter="ProjectClientFormatter"><?= get_label('clients', 'Clients') ?></th>
                            <th data-sortable="true" data-field="status_id"><?= get_label('status', 'Status') ?></th>
                            <th data-sortable="true" data-field="start_date"><?= get_label('starts_at', 'Starts at') ?></th>
                            <th data-sortable="true" data-field="end_date"><?= get_label('ends_at', 'Ends at') ?></th>
                            <th data-sortable="true" data-field="end_date"><?= get_label('ends_at', 'Ends at') ?></th>
                            <th data-sortable="true" data-field="budget"><?= get_label('budget', 'Budget')?></th>
                            <th data-sortable="true" data-field="created_at" data-visible="false"><?= get_label('created_at', 'Created at') ?></th>
                            <th data-sortable="true" data-field="updated_at" data-visible="false"><?= get_label('updated_at', 'Updated at') ?></th>
                            <th data-formatter="actionsFormatter"><?= get_label('actions', 'Actions') ?></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <?php else: ?>
            <?php
            $type = 'Projects'; ?>
            <?php if (isset($component)) { $__componentOriginal0fbbaf7987e44b855eae69b67dad7fdf = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0fbbaf7987e44b855eae69b67dad7fdf = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.empty-state-card','data' => ['type' => $type]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('empty-state-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($type)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0fbbaf7987e44b855eae69b67dad7fdf)): ?>
<?php $attributes = $__attributesOriginal0fbbaf7987e44b855eae69b67dad7fdf; ?>
<?php unset($__attributesOriginal0fbbaf7987e44b855eae69b67dad7fdf); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0fbbaf7987e44b855eae69b67dad7fdf)): ?>
<?php $component = $__componentOriginal0fbbaf7987e44b855eae69b67dad7fdf; ?>
<?php unset($__componentOriginal0fbbaf7987e44b855eae69b67dad7fdf); ?>
<?php endif; ?>
            <?php endif; ?>
        </div>
        <?php if($flag == 1): ?>
    </div>
    <?php endif; ?>
</div>

<script>
    var label_update = '<?= get_label('update', 'Update') ?>';
    var label_delete = '<?= get_label('delete', 'Delete') ?>';
    var label_not_assigned = '<?= get_label('not_assigned', 'Not assigned') ?>';
    var add_favorite = '<?= get_label('add_favorite', 'Click to mark as favorite') ?>';
    var remove_favorite = '<?= get_label('remove_favorite', 'Click to remove from favorite') ?>';
    var label_duplicate = '<?= get_label('duplicate', 'Duplicate') ?>';
</script>
<script src="<?php echo e(asset('assets/js/pages/project-list.js')); ?>"></script><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\components\projects-card.blade.php ENDPATH**/ ?>