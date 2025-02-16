<!-- meetings -->

<div class="card mt-4">
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <?php echo e($slot); ?>

            <?php if(is_countable($meetings) && count($meetings) > 0): ?>
            <div class="row mt-4 mx-2">
                <div class="col-md-4 mb-3">
                    <div class="input-group input-group-merge">
                        <input type="text" id="meeting_start_date_between" class="form-control" placeholder="<?= get_label('start_date_between', 'Start date between') ?>" autocomplete="off">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="input-group input-group-merge">
                        <input type="text" id="meeting_end_date_between" class="form-control" placeholder="<?= get_label('end_date_between', 'End date between') ?>" autocomplete="off">
                    </div>
                </div>
                <?php if(isAdminOrHasAllDataAccess()): ?>
                <div class="col-md-4 mb-3">
                    <select class="form-select" id="meeting_user_filter" aria-label="Default select example">
                        <option value=""><?= get_label('select_user', 'Select user') ?></option>
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->first_name.' '.$user->last_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-md-4 mb-3">
                    <select class="form-select" id="meeting_client_filter" aria-label="Default select example">
                        <option value=""><?= get_label('select_client', 'Select client') ?></option>
                        <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($client->id); ?>"><?php echo e($client->first_name.' '.$client->last_name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <?php endif; ?>
                <div class="col-md-4">
                    <select class="form-select" id="status_filter" aria-label="Default select example">
                        <option value=""><?= get_label('select_status', 'Select status') ?></option>
                        <option value="ongoing"><?= get_label('ongoing', 'Ongoing') ?></option>
                        <option value="yet_to_start"><?= get_label('yet_to_start', 'Yet to start') ?></option>
                        <option value="ended"><?= get_label('ended', 'Ended') ?></option>
                    </select>
                </div>
            </div>

            <input type="hidden" id="meeting_start_date_from">
            <input type="hidden" id="meeting_start_date_to">

            <input type="hidden" id="meeting_end_date_from">
            <input type="hidden" id="meeting_end_date_to">

            <input type="hidden" id="data_type" value="meetings">
            <input type="hidden" id="data_table" value="meetings_table">
            <div class="mx-2 mb-2">
                <table id="meetings_table" data-toggle="table" data-loading-template="loadingTemplate" data-url="/meetings/list" data-icons-prefix="bx" data-icons="icons" data-show-refresh="true" data-total-field="total" data-trim-on-search="false" data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-side-pagination="server" data-show-columns="true" data-pagination="true" data-sort-name="id" data-sort-order="desc" data-mobile-responsive="true" data-query-params="queryParams">
                    <thead>
                        <tr>
                            <th data-checkbox="true"></th>
                            <th data-sortable="true" data-field="id"><?= get_label('id', 'ID') ?></th>
                            <th data-sortable="true" data-field="title"><?= get_label('title', 'Title') ?></th>
                            <th data-field="users" data-formatter="userFormatter"><?= get_label('users', 'Users') ?></th>
                            <th data-field="clients" data-formatter="clientFormatter"><?= get_label('clients', 'Clients') ?></th>
                            <th data-sortable="true" data-field="start_date_time"><?= get_label('starts_at', 'Starts at') ?></th>
                            <th data-sortable="true" data-field="end_date_time"><?= get_label('ends_at', 'Ends at') ?></th>
                            <th data-sortable="true" data-field="status"><?= get_label('status', 'Status') ?></th>
                            <th data-sortable="true" data-field="created_at" data-visible="false"><?= get_label('created_at', 'Created at') ?></th>
                            <th data-sortable="true" data-field="updated_at" data-visible="false"><?= get_label('updated_at', 'Updated at') ?></th>
                            <th data-formatter="actionsFormatter"><?= get_label('actions', 'Actions') ?></th>
                        </tr>
                    </thead>
                </table>
            </div>
            <?php else: ?>
            <?php
            $type = 'Meetings'; ?>
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
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\components\meetings-card.blade.php ENDPATH**/ ?>