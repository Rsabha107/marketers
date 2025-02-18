// import Choices from 'phoenix.js'

function checkModelOpen(e) {
    if (Element.data("bs.modal").isShown) {
        return true;
    }

    return false;
}

$(document).ready(function () {

    // $(document).on("show.bs.modal", ".modal", function (event) {
    //     // alert('on show.bs.modal')
    //     // alert($(".modal:visible").length)
    //     var zIndex = 1040 + 10 //* $(".modal:visible").length;
    //     $(this).css("z-index", zIndex);
    //     setTimeout(function () {
    //         $(".modal-backdrop")
    //             .not(".modal-stack")
    //             .css("z-index", 1071)
    //             .addClass("modal-stack");
    //     }, 0);
    // });

    $(".js-select-project-assign-multiple").select2({
        closeOnSelect: false,
        placeholder: "Select ...",
    });

    $(".js-select-project-tags-multiple").select2({
        closeOnSelect: false,
        placeholder: "Select ...",
    });

    $(".js-select-project-member-assign-multiple").select2({
        closeOnSelect: false,
        placeholder: "Select ...",
    });

    // console.log("all tasksJS file");

    // showing the offcanvas for the task creation

    $("body").on("click", "#add_new_project_type", function (event) {
        console.log("inside add_new_project_type");
        // event.preventDefault();
        // var id = $(this).data("id");
    
        // var table = $(this).data("table");

        $("#add_new_project_type_modal").modal("show");


    });

    $(document).on("show.bs.modal", ".modal", function (event) {
        // alert('on show.bs.modal')
        var zIndex = 1040 + 10 * $(".modal:visible").length;
        $(this).css("z-index", zIndex);
        setTimeout(function () {
            $(".modal-backdrop")
                .not(".modal-stack")
                .css("z-index", zIndex - 1)
                .addClass("modal-stack");
        }, 0);
    });

    // $("#change_client").on("change", function (){
    //     alert(this.value);
    // })
    // $("#add_project_assigned_to").select2();
    // $(".js-select-tags-multiple").select2();

    // $("#projectCards").html("project cards projectCards");

    $("#offcanvas-add-project-modal").on("hidden.bs.offcanvas", function (e) {
        $(this)
            .find("input,textarea,select")
            .val("")
            .end()
            .find("input[type=checkbox], input[type=radio]")
            .prop("checked", "")
            .end();
            
        $(".js-select-project-assign-multiple").val(null).trigger("change");
        $(".js-select-project-tags-multiple").val(null).trigger("change");
    });

    $("body").on("click", "#offcanvas-add-project", function () {
        console.log("inside #offcanvas-add-project");
        // $("#add_edit_form").get(0).reset()
        // console.log(window.choices.removeActiveItems())
        $("#cover-spin").show();
        $("#offcanvas-add-project-modal").offcanvas("show");
        $("#cover-spin").hide();

    });

    // this is using the blade and modal  -- not used for now.
    // $("body").on("click", "#add_project_offcanv", function () {
    //     console.log("inside #add_project_offcanv");
    //     $("#cover-spin").show();

    //     $.ajax({
    //         url: "/projects/admin/project/mv/create/",
    //         method: "GET",
    //         async: true,
    //         success: function (response) {
    //             g_response = response.view;
    //             $("#global-add-project-content").empty("").append(g_response);

    //             $("#offcanvas-add-project-modal").offcanvas("show");
    //             $("#cover-spin").hide();
    //         },
    //         error: function (xhr, ajaxOptions, thrownError) {
    //             console.log(xhr.status);
    //             console.log(thrownError);
    //             $("#cover-spin").hide();
    //         },
    //     });
    // });

    $("body").on("click", "#edit_project_offcanv", function () {
        console.log("inside #edit_project_offcanv");
        $("#cover-spin").show();
        var id = $(this).data("id");
        console.log("id", id);
        $.ajax({
            url: "/projects/admin/project/mv/get/" + id,
            method: "GET",
            async: true,
            success: function (response) {
                g_response = response.view;
                $("#global-edit-project-content").empty("").append(g_response);

                $("#offcanvas-edit-project-modal").offcanvas("show");
                $("#cover-spin").hide();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
                $("#cover-spin").hide();
            },
        });
    });

    // delete project
    $("body").on("click", "#delete_project", function (e) {
        var id = $(this).data("id");
        var tableID = $(this).data("table");
        e.preventDefault();
        // alert("tableID: "+tableID);
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
                    url: "/projects/admin/project/delete/" + id,
                    method: "GET",
                    success: function (result) {
                        if (!result["error"]) {
                            toastr.success(result["message"]);
                            // divToRemove.remove();
                            // $("#fileCount").html("File ("+result["count"]+")");
                            // console.log('before table refrest for #'+tableID);
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
                        // $("#cover-spin").hide();
                        toastr.error(thrownError);
                    },
                });
            }
        });
    });

    // $("body").on("click", "#add_project", function () {
    //     console.log("inside #add_project");

    //     $("#cover-spin").show();
    //     $("#add_project_modal").modal("show");
    //     $("#cover-spin").hide();
    // });

    $("body").on("click", "#add_project_member", function () {
        console.log("inside #add_project_member");
        // $(".js-example-basic-multiple2").select2();

        var id = $(this).data("id");
        var table = $(this).data("table");

        console.log("id: " + id);
        console.log("table: " + table);

        $("#add_project_member_projectid").val(id);

        $("#cover-spin").show();
        $("#add_project_members_modal").modal("show");
        $("#cover-spin").hide();
    });

    // ************************************************** task 
    $("body").on("click", "#delete_task", function (e) {
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
                    url: "/projects/admin/task/delete/" + id,
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

    $("body").on("click", "#editTaskStatus", function (event) {
        // console.log("inside sec click edit");
        // event.preventDefault();
        var id = $(this).data("id");
        var table = $(this).data("table");
        // var route = $(this).data("route");
        // console.log("id: " + id);
        // console.log("table: " + table);

        $.get("/projects/admin/task/status/edit/" + id, function (data) {
            //  console.log('event name: ' + data);
            $.each(data, function (index, value) {
                // console.log(value[0]);
                $("#editTaskId").val(value[0].id);
                $("#editTaskEventId").val(value[0].event_id);
                $("#editTaskStatusSelection").val(value[0].status_id);
                $("#taskStatusParentTable").val(table);
                $("#taskStatusModal").modal("show");
            });

            // $('#staticBackdropLabel').html("Edit category");
            // $('#submit').val("Edit category");
        });
    });

    $("body").on("click", "#test_change_choices_list", function () {
        console.log("inside #test_change_choices_list");
        console.log($(".test").val());
        selectEl = document.getElementsByClassName("test");
        console.log(selectEl);
        const selector = jQuery(selectEl).data("choiceobject");
        console.log(selector);
        // window.choiceObject.setValue(['xx', '3']);
        selector.removeActiveItems();
        // selector.change();
        selector.setChoiceByValue("2");
        selector.setChoiceByValue("3");
        selector.setChoiceByValue("1");
        // selector.setValue([{value: 5, label:'hello'}]);
    });

    //add_edit_project
    //update_project_team_members

    // delete project
    $("body").on("click", "#remove_project_member", function (e) {
        var id = $(this).data("id");
        var projId = $(this).data("projid");
        var tableID = $(this).data("table");
        e.preventDefault();
        // alert("id: "+id);
        var link = $(this).attr("href");
        Swal.fire({
            title: "Are you sure?",
            text: "Delete This Member?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url:
                        "/projects/admin/project/member/" +
                        projId +
                        "/delete/" +
                        id,
                    method: "GET",
                    success: function (result) {
                        if (!result["error"]) {
                            toastr.success(result["message"]);
                            // divToRemove.remove();
                            // $("#fileCount").html("File ("+result["count"]+")");
                            // console.log('before table refrest for #'+tableID);
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
                        // $("#cover-spin").hide();
                        toastr.error(thrownError);
                    },
                });
            }
        });
    });

    // resotre project
    $("body").on("click", "#restore_project", function (e) {
        var id = $(this).data("id");
        var tableID = $(this).data("table");
        e.preventDefault();
        // alert("tableID: "+tableID);
        var link = $(this).attr("href");
        Swal.fire({
            title: "Are you sure?",
            text: "Restore This Data?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, Restore it!",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "/projects/admin/project/restore/" + id,
                    method: "GET",
                    success: function (result) {
                        if (!result["error"]) {
                            toastr.success(result["message"]);
                            // divToRemove.remove();
                            // $("#fileCount").html("File ("+result["count"]+")");
                            // console.log('before table refrest for #'+tableID);
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
                        // $("#cover-spin").hide();
                        toastr.error(thrownError);
                    },
                });
            }
        });
    });

    // $("#switchClientOwner").submit(function (event) {
    //     event.preventDefault();
    //     selected_value = $("#project_client_owner_id").val();
    //     alert(
    //         "in swtichClientOwner.  selected value " +
    //             selected_value +
    //             " " +
    //             $(this).find("option:selected").text()
    //     );
    // });

    $("body").on("click", "#taskCardView", function (event) {
        // event.preventDefault();
        var taskId = $(this).data("id");
        console.log("click of taskCardView projects.js");
        $(".spinner-border").show();
        // console.log("task id: " + taskId);

        $("#task-note-tab").data("taskid", taskId);
        $("#edit_task").data("id", taskId);
        $tab_value = $("#task-note-tab").data("taskid");
        $edit_task_id = $("#edit_task").data("id");

        // alert($edit_task_id)

        $.ajax({
            url: "/projects/admin/task/overview/" + taskId,
            method: "GET",
            success: function (response) {
                console.log(response);
                html = "";
                html1 = "";

                console.log(response);
                // get the task information
                $.each(response.data.data, function (index, value) {
                    console.log("index: " + index);
                    // if (index == "data") {
                    // console.log("inside the data array");
                    // console.log(value);
                    // for (const project_task of value.data) {
                    // console.log(`${value.name} : ${value.id}°C`);
                    workspace_html =
                        '<span class="badge badge-phoenix badge-phoenix-warning me-2" id="overviewtaskWorkspace">' +
                        value.workspace +
                        "</span>";
                    $("#overviewtaskTitle").html(value.name);

                    $("#overviewProjectName").html(value.project_title);
                    $("#overviewtaskStatus").html(
                        '<span class="badge badge-phoenix badge-phoenix-' +
                            value.status_color +
                            ' me-2" id="overviewtaskStatus">' +
                            value.status_name +
                            "</span>"
                    );
                    $("#overviewtaskWorkspace").html(
                        '<span class="badge badge-phoenix badge-phoenix-warning me-2" id="overviewtaskWorkspace">' +
                            value.workspace +
                            "</span>"
                    );
                    $("#overviewtaskProgress").html(value.progress * 100 + "%");
                    $("#overviewtaskProgressStyle").css({
                        width: value.progress * 100 + "%",
                    });
                    console.log(value.start_date);
                    $("#overviewtaskStartDate").html(value.start_date);
                    $("#overviewtaskDueDate").html(value.due_date);
                    // $("#overviewtaskDueDate").prop("value", value.due_date);
                    $("#overviewtaskDescription").html(value.description);
                    $("#overviewtaskAllocatedBudget").html(
                        value.budget_allocation
                    );
                    $("#overviewtaskActualBudget").html(
                        value.actual_budget_allocated
                    );
                    $("#overviewtaskDepartment").html(value.department_name);
                    // $("#overviewtaskAllocatedBudget").html(
                    //     '<span class="me-2 fa-solid fa-dollar text-success"></span>' +
                    //         value.budget_allocation
                    // );
                    // $("#overviewtaskActualBudget").html(
                    //     '<span class="me-2 fa-solid fa-donate text-primary"></span>' +
                    //         value.actual_budget_allocated
                    // );
                    // $("#overviewtaskDepartment").html(
                    //     '<span class="me-2 fa-solid fa-building text-primary"></span>' +
                    //         value.department_name
                    // );
                });

                // lets get the assinged_to names
                $.each(response.data.data, function (index, value) {
                    console.log("index: " + index);
                    // if (index == "data") {
                    // console.log("inside the assigned_to array");
                    // console.log(value);
                    // for (const project_task of value.data) {
                    // console.log(`${value.name} : ${value.id}°C`);

                    for (const asg of value.assigned_to) {
                        initname = getNameItials(asg.full_name);
                        console.log("init initname: " + initname);
                        console.log("name: " + asg.full_name);
                        console.log("id: " + asg.id);

                        html +=
                            '<a href="/tracki/users/' +
                            asg.id +
                            '/details" title="' +
                            asg.full_name +
                            '" role="button"> <div class="avatar avatar-m pull-up me-1">';
                        html +=
                            '<div class="avatar-name rounded-circle me-2" title="' +
                            asg.full_name +
                            '"><span>' +
                            initname +
                            "</span></div>";
                        html += "</div></a>";
                    }

                    html +=
                        '<a href="javascript:void(0);" id="edit_task" data-action="update" data-dismiss="modal" data-source="list" ' +
                        'data-type="edit" data-table="task_table" data-redirect="list" data-id=' +
                        value.id +
                        ' role="button" title="add">' +
                        '<button class="btn btn-sm btn-phoenix-secondary btn-circle pull-up">' +
                        '<span class="fa-solid fa-plus text-warning"></span>' +
                        "</button>" +
                        "</a>";
                    $("#overviewtaskAssignees").empty("").append(html);

                    //   }

                    // }
                });

                $.ajax({
                    url: "/projects/admin/task/notes/" + taskId,
                    method: "GET",
                    async: true,
                    success: function (response) {
                        g_response = response.view;
                        $("#taskTabNotes").empty("").append(g_response);
                        $(".spinner-border").hide();
                    },
                });

                $.ajax({
                    url: "/projects/admin/task/subtask/" + taskId,
                    method: "GET",
                    async: true,
                    success: function (response) {
                        g_response = response.view;
                        $("#taskTabSub").empty("").append(g_response);
                        $(".spinner-border").hide();
                    },
                });

                $.ajax({
                    url: "/projects/admin/task/files/" + taskId,
                    method: "GET",
                    async: true,
                    success: function (response) {
                        g_response = response.view;
                        $("#taskTabFiles").empty("").append(g_response);
                        $(".spinner-border").hide();
                    },
                });

                // $("#taskTabNotes").empty("").append(refreshTaskNotes(taskId));
                // $("#taskTabSub").empty("").append(refreshTaskSubtask(taskId));
                $("#collapse_task_subtask").addClass("collapsed");

                // lets get the subtasks
                $.each(response.data.data, function (index, value) {
                    // console.log("subtasks index: " + index);
                    // // if (index == "data") {
                    // console.log("inside the subtasks array");
                    // console.log(value.subtasks);
                    // console.log(value.subtasks.length);
                    html = "";
                    html1 = "";

                    $("#subTaskCount").html(
                        "Subtasks (" + value.subtasks.length + ")"
                    );
                });

                // lets get the files
                $.each(response.data.data, function (index, value) {
                    console.log("in files ....");
                    console.log("files index: " + index);
                    // // if (index == "data") {
                    console.log("inside the files array");
                    console.log(value.files);
                    console.log(value.files.length);
                    html = "";
                    html1 = "";

                    $("#fileCount").html("File (" + value.files.length + ")");

                    for (const files of value.files) {
                        // console.log(`${notes.note_text} : ${notes.id}°C`);
                        html += '<div class="border-top py-3">';
                        html += '  <div class="me-n3">';
                        html += '    <div class="d-flex flex-between-center">';
                        html +=
                            '       <div class="d-flex mb-1"><span class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>';
                        html +=
                            '         <p class="text-body-highlight mb-0 lh-1"><a href="../../../upload/event_files/' +
                            files.file_name +
                            '" target="_blank">' +
                            files.original_file_name +
                            "</a></p>";
                        html += "</div>";
                        html +=
                            ' <button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h"></span></button>';
                        html +=
                            ' <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item text-danger removeFileDiv" href="#!" data-table="task_table" data-id=' +
                            files.id +
                            ' id="deletexxs">Delete</a></div>';
                        html += " </div>";
                        html +=
                            ' <p class="fs-9 text-body-tertiary mb-1"><span>' +
                            files.file_size / 100 +
                            'kb </span><span class="text-body-quaternary mx-1">| </span><a href="#!">' +
                            files.user_name +
                            ' </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">' +
                            moment(files.created_at).format("DD-MM-YYYY") +
                            "</span></p>";

                        if (
                            files.file_extension.toLowerCase() == "jpg" ||
                            files.file_extension.toLowerCase() == "jpeg" ||
                            files.file_extension.toLowerCase() == "png"
                        ) {
                            // console.log('file path: '+ files.file_path)
                            // console.log('file path: '+ files.file_name)
                            html +=
                                '<a href="' +
                                files.file_path +
                                files.file_name +
                                '" target="_blank"><img class="rounded-2 img-thumbnail" src="' +
                                files.file_path +
                                files.file_name +
                                '" alt="" width="200" height="200" /></a>';
                        }
                        html += "                </div>";
                        html += "            </div>";
                    }

                    $.ajax({
                        url: "/projects/admin/task/files/" + taskId,
                        method: "GET",
                        async: true,
                        success: function (response) {
                            g_response = response.view;
                            $("#taskTabFiles").empty("").append(g_response);
                            $(".spinner-border").hide();
                        },
                    });

                    $("#taskTabFiles").empty("").append(html);
                });

                console.log("taskCardView taskId: " + taskId);
                $("#note_parent_task_id_overview").val(taskId);
                $("#subtask_parent_task_id_overview").val(taskId);
                $("#file_parent_task_id_overview").val(taskId);
                $(".spinner-border").hide();
                $("#taskCardViewModal").modal("show");
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }, //tr += '<option value="'+value[0]+'">'+value[1]+'</option>';
        });
    });

    $("body").on("click", "#edit_task", function () {
        console.log("inside #edit_task projects.js");
        // console.log("source: " + x_source);
        // $(".spinner-border").show();
        console.log($("#edit_task").data("id"));
        // var id = ($(this).data("id") == 'undefined')?$('#edit_task').data("id"):$(this).data("id");
        var id = $(this).data("id");
        // if (typeof id == "undefined") {
        //     id = $("#edit_task").data("id");
        // }

        $.ajax({
            url: "/projects/admin/task/mv/edit/" + id,
            method: "GET",
            async: true,
            success: function (response) {
                g_response = response.view;
                $("#edit_task_modal_form").empty("").append(g_response);

                // $.ajax({
                //     url: "/projects/admin/task/get/" + id,
                //     type: "get",
                //     headers: {
                //         "X-CSRF-TOKEN": $('input[name="_token"]').attr("value"), // Replace with your method of getting the CSRF token
                //     },
                //     dataType: "json",
                //     success: function (response) {
                //         console.log(response);
                //         console.log(response.asg);
                //         console.log(response.project.employees);
                //         $("#edit_task_assigned_to").empty();

                //         var formattedStartDate = moment(
                //             response.task.start_date
                //         ).format("DD/MM/YYYY");
                //         var formattedDueDate = moment(response.task.due_date).format(
                //             "DD/MM/YYYY"
                //         );

                //         $("#edit_task_start_date").val(formattedStartDate);
                //         $("#edit_task_due_date").val(formattedDueDate);

                //         // var wsUsers = response.asg.map((users) => users.id);
                //         $.each(
                //             response.project.employees,
                //             function (index, user) {
                //                 var option = $("<option>", {
                //                     value: user.id,
                //                     text: user.full_name,
                //                 });

                //                 $("#edit_task_assigned_to").append(option);
                //             }
                //         );

                //         var wsUsers = response.task.employees.map(
                //             (users) => users.id
                //         );
                //         console.log(wsUsers);

                //         console.log("Name: " + response.task.description);
                //         // $("#edit_task_modal_label").html(
                //         //     "Edit task (" +
                //         //         response.task.name +
                //         //         ") Project: " +
                //         //         response.project.name
                //         // );

                //         console.log("populating edit_task_assigned_to");
                //         console.log(wsUsers);
                //         $("#edit_task_assigned_to").val([]).change();
                //         $("#edit_task_assigned_to").val(wsUsers);
                //         $("#edit_task_assigned_to").trigger("change");

                //         $("#edit_task_description").val(response.task.description);
                //         tinymce
                //             .get("edit_task_description")
                //             .setContent(response.task.description);
                //     },
                // });

                $("#edit_task_modal").modal("show");
                $("#cover-spin").hide();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            },
        });
    });

    $("body").on("click", "#delete_project_file", function (e) {
        var id = $(this).data("id");
        var tableID = $(this).data("table");
        e.preventDefault();
        // alert("id: "+id);
        // alert("tableID: "+tableID);
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
                    url: "/global/files/delete/" + id,
                    type: "DELETE",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // Replace with your method of getting the CSRF token
                    },
                    dataType: "json",
                    success: function (result) {
                        if (!result["error"]) {
                            toastr.success(result["message"]);
                            // divToRemove.remove();
                            // $("#fileCount").html("File ("+result["count"]+")");
                            // console.log('before table refrest for #'+tableID);
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

});

$("body").on("click", "#add_task", function () {
    console.log("inside #add_task");

    // reset all values
    $("#add_task_form")[0].reset();
    $("#add_task_assigned_to").val([]).change();
    $("#add_task_tag").val([]).change();
    $("#add_task_form")[0].classList.remove("was-validated");
    var id = $(this).data("id");
    var event_id = $(this).data("projectid");
    var table = $(this).data("table");
    var action = $(this).data("action");
    var type = $(this).data("type");

    // set the form action with the source var
    // $("#add_task_form").attr("action", form_action);

    console.log(id + " " + table);
    $("#add_task_table_h").val(table);
    $("#add_task_event_id").val(event_id);

    // $("#workspace_modal").modal("show");
    console.log("Add");
    $("#add_task_modal_label").html("Add new task");
    $("#add_task_modal").modal("show");
});

("use strict");


$("#add_project_tag").on("select2:close", function (e) {
    e.preventDefault();
    console.log("projects.js on change of add_project_tag");
    console.log($("#add_project_tag").val());
});
