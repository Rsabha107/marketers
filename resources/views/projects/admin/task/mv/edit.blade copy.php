<script src="{{ asset ('fnx/assets/js/phoenix.js') }}"></script>



<input type="hidden" id="edit_task_id_h" name="id" value="{{$task->id}}">
<input type="hidden" id="edit_task_table_h" name="table" value="task_table">
<input type="hidden" id="edit_task_event_id" name="project_id" value="{{$task->project_id}}">

<div class="modal-body">
    <div class="mb-3 col-md-12">
        <label class="form-label" for="inputEmail4">Title</label>
        <input name="name" id="edit_task_name" class="form-control" value="{{$task->name}}" type="text" placeholder="" required>
    </div>
    <div class="mb-3 row">
        <div class="mb-3 col-sm-6 col-md-6">
            <div class="form-floating">
                <select name="status_id" class="form-select" id="add_task_status">
                    <option selected="selected" value="">Select...</option>
                    @foreach ($statuses as $key => $item )
                    @if ($task->status_id == $item->id )
                    <option value="{{ $item->id  }}" selected>
                        {{ $item->title }}
                    </option>
                    @else
                    <option value="{{ $item->id  }}">
                        {{ $item->title }}
                    </option>
                    @endif
                    @endforeach
                </select>
                <label for="add_task_status">Status</label>
            </div>
        </div>
        <div class="mb-3 col-sm-6 col-md-6">
            <div class="form-floating">
                <select name="milestone" class="form-select" id="add_task_milestone">
                    @if ($task->milestone === 1)
                    <option value="0">No</option>
                    <option selected="selected" value="1">Yes</option>
                    @else
                    <option selected="selected" value="0">No</option>
                    <option value="1">Yes</option>
                    @endif
                </select>
                <label for="add_task_milestone">Milestone</label>
            </div>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-md-6">
            <label class="form-label" for="inputEmail4">Start Date</label>
            <input class="form-control datetimepicker" id="edit_task_start_date" value="{{ ($task->start_date)? \Carbon\Carbon::parse($task->start_date)->format('d/m/Y'):null }}" data-target="#floatingInputStartDate" name="start_date" type="text" placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}'>
        </div>
        <div class="col-md-6">
            <label class="form-label" for="inputEmail4">Due Date</label>
            <input class="form-control datetimepicker" id="edit_task_due_date" value="{{ $task->due_date? \Carbon\Carbon::parse($task->due_date)->format('d/m/Y'):'' }}" data-target="#floatingInputStartDate" name="due_date" type="text" placeholder="dd/mm/yyyy" placeholder="dd/mm/yyyy" data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}'>
        </div>
    </div>
    <div class="mb-3 row">

        <div class="col-6 mb-2">
            <label class="form-label" for="inputAddress2">Assigned to (multiple)</label>

            <select class="form-select js-select-task-assign-multiple" id="edit_task_assigned_to" name="assignment_to_id[]" multiple="multiple" data-with="100%" data-placeholder="<?= get_label('type_to_search', 'Type to search') ?>">
                <!-- <select name="assignment_to_id[]" class="form-select" data-choices="data-choices" size="1" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}' id="floatingSelectRating" required> -->
                @foreach ($task->project->employees as $emp)
                <option value="{{ $emp->id }}">{{ $emp->full_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-6 mb-2">
            <label class="form-label" for="inputAddress2">Tags (multiple)</label>

            <select class="form-select js-select-task-tags-multiple" id="edit_task_tag" name="tag_id[]" multiple="multiple" data-with="100%" data-placeholder="<?= get_label('type_to_search', 'Type to search') ?>">
                <!-- <select name="assignment_to_id[]" class="form-select" data-choices="data-choices" size="1" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}' id="floatingSelectRating" required> -->
                @foreach ($task->project->tags as $tag)
                <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-md-6">
            <label class="form-label" for="inputCity">Budget allocated</label>
            <input name="budget_allocation" class="form-control" id="edit_task_budget" type="number" step="0.01" placeholder="" value="{{$task->budget_allocation}}">
        </div>
        <div class="col-md-6">
            <label class="form-label" for="inputState">Actual budget utilized</label>
            <input name="actual_budget_allocated" class="form-control" id="edit_task_budget_utilization" type="number" step="0.01" placeholder="" value="{{$task->actual_budget_allocated}}">
        </div>

    </div>
    <!-- <h4 class="mt-6">Other Information</h4> -->

    <div class="col-12">
        <label class="form-label" for="gridCheck">Description</label>
        <textarea style="height: 100px;" name="description" class="form-control tinymce1" id="edit_task_description" data-tinymce="{}" placeholder="">{{$task->description}}</textarea>
    </div>
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal"><?= get_label('close', 'Close') ?></label></button>
    <button type="submit" class="btn btn-primary" id="submit_btn"><?= get_label('save', 'Save') ?></label></button>
</div>

@php
$selected_emps_id = [];
$selected_tags_id = [];
@endphp

@foreach ($task->employees as $selected_emp )
@php
array_push($selected_emps_id, $selected_emp->id);
@endphp
@endforeach

@foreach ($task->tags as $selected_tag )
@php
array_push($selected_tags_id, $selected_tag->id);
@endphp
@endforeach

<script>
    $(".js-select-task-assign-multiple").select2({
        closeOnSelect: false,
        placeholder: "Select ...",
    });
    $(".js-select-task-tags-multiple").select2({
        closeOnSelect: false,
        placeholder: "Select ...",
    });
    selected_emp_data = [];
    selected_tag_data = [];
    selected_emp_data = <?php echo json_encode($selected_emps_id); ?>;
    selected_tag_data = <?php echo json_encode($selected_tags_id); ?>;
    console.log('selected emp data');
    console.log(selected_emp_data);
    $('#edit_task_assigned_to').val(selected_emp_data);
    $("#edit_task_assigned_to").trigger("change");

    $('#edit_task_tag').val(selected_tag_data);
    $("#edit_task_tag").trigger("change");
</script>