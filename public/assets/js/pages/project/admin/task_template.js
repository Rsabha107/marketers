$("body").on("click", "#add_task_template", function () {
    console.log("inside #add_task_template");
    // $(".js-example-basic-multiple2").select2();

    $("#cover-spin").show();
    $("#add_task_template_modal").modal("show");
    $("#cover-spin").hide();
});

// $("body").on("click", "#edit_task_template", function () {
//     console.log("inside #edit_task_template_type");
//     // $(".js-example-basic-multiple2").select2();

//     $("#cover-spin").show();
//     $("#edit_task_template_modal").modal("show");
//     $("#cover-spin").hide();
// });

$("body").on("click", "#edit_task_template", function () {
    var id = $(this).data("id");
    var table = $(this).data("table");
    // console.log('edit project_type in designations.js');
    // console.log('id: '+id);
    // console.log('table: '+table);
    // var target = document.getElementById("edit_designations_modal");
    // var spinner = new Spinner().spin(target);
    // $("#edit_designations_modal").modal("show");
    $.ajax({
        url: "/projects/admin/task/template/edit/" + id,
        type: "get",
        headers: {
            "X-CSRF-TOKEN": $('input[name="_token"]').attr("value"), // Replace with your method of getting the CSRF token
        },
        dataType: "json",
        success: function (response) {
            console.log(response);
            $("#cover-spin").show();

            $("#edit_task_template_id").val(response.task_template.id);
            $("#edit_task_template_name").val(
                response.task_template.task_line_name
            );
            $("#edit_task_template_project_id").val(
                response.task_template.project_type_id
            );
            $("#edit_task_template_order").val(
                response.task_template.task_line_order
            );
            $("#edit_task_template_type_active_flag").val(
                response.task_template.active_flag
            );
            $("#edit_task_template_table").val(table);
            // $("#edit_designations_modal").modal("show");
        },
    }).done(function () {
        $("#edit_task_template_modal").modal("show");
        $("#cover-spin").hide();
    });
});

$("body").on("click", "#delete_task_template", function (e) {
    var id = $(this).data("id");
    var tableID = $(this).data("table");
    e.preventDefault();
    // alert('in deleteStatus '+tableID);
    var link = $(this).attr("href");
    Swal.fire({
        title: "Are you sure?",
        text: "Delete This Data?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: "/projects/admin/task/template/delete/" + id,
                type: "DELETE",
                headers: {
                    "X-CSRF-TOKEN": $('input[name="_token"]').attr("value"), // Replace with your method of getting the CSRF token
                },
                dataType: "json",
                success: function (result) {
                    if (!result["error"]) {
                        toastr.success(result["message"]);
                        $("#" + tableID).bootstrapTable("refresh");
                        // Swal.fire(
                        //     'Deleted!',
                        //     'Your file has been deleted.',
                        //     'success'
                        //   )
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(thrownError);
                },
            });
        }
    });
});

("use strict");

function queryParams(p) {
    return {
        status: $("#task_template_type_filter").val(),
        project_id: $("#project_filter").val(),
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
