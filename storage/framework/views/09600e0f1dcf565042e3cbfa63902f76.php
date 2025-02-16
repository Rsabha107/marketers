
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table table-stripped 
                id="task_template_table"
                data-toggle="table"
                data-classes="table table-hover fs-9 mb-0 border-top border-translucent"
                data-loading-template="loadingTemplate"
                data-url="<?php echo e(route('projects.admin.task.template.list')); ?>"
                data-icons-prefix="bx"
                data-icons="icons"
                data-show-export="true"
                data-show-refresh="true"
                data-show-columns-toggle-all="true"
                data-show-fullscreen="true"
                data-total-field="total"
                data-trim-on-search="false"
                data-data-field="rows"
                data-page-size="10"
                data-page-list="[5, 10, 20, 50, 100, 200]"
                data-search="true"
                data-side-pagination="server"
                data-show-columns="true"
                data-pagination="true"
                data-sort-name="task_line_order"
                data-sort-order="asc"
                data-mobile-responsive="true"
                data-buttons-class="secondary"
                data-query-params="taskqueryParams">
                <thead>
                    <tr>
                        <!-- <th data-checkbox="true"></th> -->
                        <th data-sortable="true" data-field="id1" data-visible="false"><?= get_label('id', 'ID') ?></th>
                        <th class="name align-middle white-space-nowrap ps-0" data-sortable="true" data-field="task_line_name"><?= get_label('task', 'Task') ?></th>
                        <th class="align-middle white-space-nowrap fs-9 text-body" data-sortable="true" data-field="project_type_id"><?= get_label('Venue', 'Project Type') ?></th>
                        <th class="align-middle white-space-nowrap fs-9 text-body" data-sortable="true" data-field="task_line_order"><?= get_label('Venue', 'Order') ?></th>
                        <th data-sortable="false" data-field="active_flag"><?= get_label('status', 'Status') ?></th>
                        <th data-sortable="true" data-field="created_at" data-visible="false"><?= get_label('created_at', 'Created at') ?></th>
                        <th data-sortable="true" data-field="updated_at" data-visible="false"><?= get_label('updated_at', 'Updated at') ?></th>
                        <!-- <th data-formatter="actionsFormatter"><?= get_label('actions', 'Actions') ?></th> -->
                        <th data-sortable="false" data-field="actions"><?= get_label('actions', 'Actions') ?></th>

                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<script>

function taskqueryParams(p) {
    return {
        task_status_id: $("#template_status_filter").val(),
        person_id: $("#template_employee_filter").val(),
        department_id: $("#template_department_filter").val(),
        show_page: $("#template_show_page_hidden").val(),
        show_page_id: $("#template_show_page_id_hidden").val(),
        task_start_date_from: $("#template_start_date_from").val(),
        task_start_date_to: $("#template_start_date_to").val(),
        task_end_date_from: $("#template_end_date_from").val(),
        task_end_date_to: $("#template_end_date_to").val(),
        page: p.offset / p.limit + 1,
        limit: p.limit,
        sort: p.sort,
        order: p.order,
        offset: p.offset,
        search: p.search,
    };
}
window.icons = {
    refresh: "bx-refresh",
    toggleOn: "bx-toggle-right",
    toggleOff: "bx-toggle-left",
    fullscreen: "bx-fullscreen",
    columns: "bx-list-ul",
    export_data: "bx-list-ul",
    paginationSwitch: "bx-list-ul",
};

function loadingTemplate(message) {
    return '<i class="bx bx-loader-circle bx-spin bx-flip-vertical" ></i>';
}

    $(
        "#template_status_filter,#template_employee_filter,#template_project_filter,#template_department_filter"
    ).on("change", function(e) {
        e.preventDefault();
        // console.log("tasks.js on change");
        $("#task_table").bootstrapTable("refresh");
    });
</script><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\components\admin-tasks-template-card.blade.php ENDPATH**/ ?>