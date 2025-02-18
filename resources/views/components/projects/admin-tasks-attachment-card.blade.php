<!-- meetings -->

<div class="card mt-4">
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            {{$slot}}
            @if (is_countable($statuses) && count($statuses) > 0)
            <input type="hidden" id="data_type" value="status">
            <div class="mx-2 mb-2">
                <table id="task_file_table"
                    data-toggle="table"
                    data-classes="table table-hover  fs-9 mb-0 border-top border-translucent"
                    data-loading-template="loadingTemplate"
                    data-url="{{ route('projects.admin.task.files.list', $projectId)}}"
                    data-icons-prefix="bx"
                    data-icons="icons"
                    data-show-export="true"
                    data-show-refresh="true"
                    data-total-field="total"
                    data-trim-on-search="false"
                    data-data-field="rows"
                    data-page-size="10"
                    data-page-list="[5, 10, 20, 50, 100, 200]"
                    data-search="true"
                    data-side-pagination="server"
                    data-show-columns="true"
                    data-pagination="true"
                    data-sort-name="id"
                    data-sort-order="desc"
                    data-mobile-responsive="true"
                    data-buttons-class="secondary"
                    data-query-params="taskfilequeryParams">
                    <thead>
                        <tr>
                            <!-- <th data-checkbox="true"></th> -->
                            <!-- <th class="text-wrap" data-sortable="true" data-field="id"><?= get_label('id', 'Id') ?></th> -->
                            <th data-sortable="true" data-field="original_file_name"><?= get_label('file', 'File') ?></th>
                            <th data-sortable="true" data-field="description"><?= get_label('description', 'Description') ?></th>
                            <th data-sortable="true" data-field="type"><?= get_label('attachement_type', 'Type') ?></th>
                            <th data-sortable="true" data-field="file_size"><?= get_label('size', 'Size') ?></th>
                            <th data-sortable="true" data-field="created_at" data-visible="false"><?= get_label('created_at', 'Created at') ?></th>
                            <th data-sortable="true" data-field="updated_at" data-visible="false"><?= get_label('updated_at', 'Updated at') ?></th>
                            <th data-field="actions"><?= get_label('actions', 'Actions') ?></th>
                        </tr>
                    </thead>
                </table>
            </div>
            @else
            <?php
            $type = 'Task Attachments'; ?>
            <x-empty-state-card :type="$type" />

            @endif
        </div>
    </div>
</div>


<script>

function taskfilequeryParams(p) {
    return {
        task_status_id: $("#task_status_filter").val(),
        person_id: $("#tasks_employee_filter").val(),
        project_id: $("#tasks_project_filter").val(),
        show_page: $("#tasks_show_page_hidden").val(),
        show_page_id: $("#tasks_show_page_id_hidden").val(),
        task_start_date_from: $("#task_start_date_from").val(),
        task_start_date_to: $("#task_start_date_to").val(),
        task_end_date_from: $("#task_end_date_from").val(),
        task_end_date_to: $("#task_end_date_to").val(),
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
        "#task_status_filter,#tasks_employee_filter,#tasks_project_filter"
    ).on("change", function(e) {
        e.preventDefault();
        // console.log("tasks.js on change");
        $("#task_table").bootstrapTable("refresh");
    });
</script>