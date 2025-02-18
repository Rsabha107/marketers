<!-- projects card -->

<div class="table-responsive text-nowrap">
    <div class="align-items-baseline d-flex gap-1 mx-2">
        <div class="col-md-4">
            <select class="form-select" id="mol_user_filter" aria-label="Default select example">
                <option value=""><?= get_label('select_member', 'Select member') ?></option>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($user->id); ?>"><?php echo e($user->first_name.' '.$user->last_name); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="col-md-4 mb-3">
            <div class="input-group input-group-merge">
                <input type="number" id="upcoming_days_mol" name="upcoming_days" class="form-control" min="0" placeholder="<?= get_label('till_upcoming_days_def_30', 'Till upcoming days : default 30') ?>" autocomplete="off">
            </div>
        </div>
        <div class="col-md-1">
            <div>
                <button type="button" id="upcoming_days_mol_filter" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title="<?= get_label('filter', 'Filter') ?>"><i class='bx bx-filter-alt'></i></button>

            </div>
        </div>
    </div>
    <input type="hidden" id="data_type" value="users">
    <input type="hidden" id="data_table" value="mol_table">
    <div class="mx-2 mb-2">
        <table id="mol_table" data-toggle="table" data-loading-template="loadingTemplate" data-url="/home/members-on-leave" data-icons-prefix="bx" data-icons="icons" data-show-refresh="true" data-total-field="total" data-trim-on-search="false" data-data-field="rows" data-page-list="[5, 10, 20, 50, 100, 200]" data-search="true" data-side-pagination="server" data-show-columns="true" data-pagination="true" data-sort-name="leave_requests.from_date" data-sort-order="asc" data-mobile-responsive="true" data-query-params="queryParamsMol">
            <div class="alert alert-info alert-dismissible" role="alert"></a><?php echo e(get_label('delete_selected_will_delete_selected_team_members_alert','Delete selected will delete selected team members.')); ?><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>
            <thead>
                <tr>
                    <th data-checkbox="true"></th>
                    <th data-field="id"><?= get_label('id', 'ID') ?></th>
                    <th data-field="member"><?= get_label('member', 'Member') ?></th>
                    <th data-field="from_date" data-sortable="true"><?= get_label('from_date', 'From date') ?></th>
                    <th data-field="to_date" data-sortable="true"><?= get_label('to_date', 'To date') ?></th>
                    <th data-sortable="false" data-field="duration"><?= get_label('duration', 'Duration') ?></th>
                    <th data-field="days_left"><?= get_label('days_left', 'Days left') ?></th>
                </tr>
            </thead>
        </table>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\components\members-on-leave-card.blade.php ENDPATH**/ ?>