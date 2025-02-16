
<div class="card mb-4">
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table table-stripped 
                id="item_master_table"
                data-toggle="table"
                data-classes="table table-hover fs-9 mb-0 border-top border-translucent"
                data-loading-template="loadingTemplate"
                data-url="<?php echo e(route('procurement.admin.items.list')); ?>"
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
                data-sort-name="id"
                data-sort-order="asc"
                data-mobile-responsive="true"
                data-buttons-class="secondary"
                data-query-params="itemqueryParams">
                <thead>
                    <tr>
                        <!-- <th data-checkbox="true"></th> -->
                        <th data-sortable="true" data-field="id1" data-visible="false"><?= get_label('id', 'ID') ?></th>
                        <th class="name align-middle white-space-nowrap ps-0" data-sortable="true" data-field="item_name"><?= get_label('item_name', 'Product Name') ?></th>
                        <th class="align-middle white-space-nowrap fs-9 text-body" data-sortable="true" data-field="item_price"><?= get_label('item_price', 'Price') ?></th>
                        <th class="align-middle white-space-nowrap fs-9 text-body" data-sortable="true" data-field="item_on_hand"><?= get_label('item_on_hand', 'Stock On Hand') ?></th>
                        <th class="align-middle white-space-nowrap fs-9 text-body" data-sortable="true" data-field="unit_type_id"><?= get_label('unit_type_id', 'Unit Type') ?></th>
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

function itemqueryParams(p) {
    return {

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
        "#item_status_filter,#item_employee_filter,#item_project_filter,#item_department_filter"
    ).on("change", function(e) {
        e.preventDefault();
        // console.log("tasks.js on change");
        $("#item_master_table").bootstrapTable("refresh");
    });
</script><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\components\procurement\items\admin-item-master-card.blade.php ENDPATH**/ ?>