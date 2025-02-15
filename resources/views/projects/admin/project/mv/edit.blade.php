<script src="{{ asset('fnx/assets/js/phoenix.js') }}"></script>

<input type="hidden" name="table" value="project_table" />
<input type="hidden" id="edit_project_id" name="id" value="{{$project->id}}">
<div>

    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom">
            <div class="ms-3">
                <h5 class="mb-0 fs-sm">Update Project</h5>
            </div>
        </div>
        <div class="card-body">

            <!-- <div class="row mb-3"> -->
            <div class="col-sm-6 col-md-12 mb-3">
                <div class="form-floating">
                    <input class="form-control @error('name') is-invalid @enderror" name="name"
                        id="floatingInputGrid" type="text" placeholder="Project title" value="{{ $project->name }}" required
                         />
                    <div class="invalid-feedback">
                        Please enter project title.
                    </div>
                    <label for="floatingInputGrid">Project title</label>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6  mb-3">
                    <div class="form-floating">
                        <select name="functional_area_id" class="form-select">
                            <option selected="selected" value="">Select...</option>
                            @foreach ($functional_areas as $key => $item)
                                <option value="{{ $item->id }}"
                                    {{ $project->functional_area_id == $item->id ? 'selected' : null }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        <label for="floatingSelectTask">Functional Area</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6  mb-3">
                    <div class="form-floating">
                        <select name="project_type_id"
                            class="form-select  @error('project_type_id') is-invalid @enderror"
                            id="add_project_project_type" required>
                            <option selected="selected" value="">Select...</option>
                            @foreach ($project_type as $key => $item)
                                <option value="{{ $item->id }}"
                                    {{ $project->project_type_id == $item->id ? 'selected' : null }}>
                                    {{ $item->name }}
                                </option>
                            @endforeach
                        </select>
                        <div class="invalid-feedback">
                            Please select project type.
                        </div>
                        <label for="floatingSelectPrivacy">Project type</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-12  mb-3">
                <div class="form-floating">
                    <select name="category_id" class="form-select" id="add_project_category">
                        <option selected="selected" value="">Select...</option>
                        @foreach ($event_category as $key => $item)
                            <option value="{{ $item->id }}"
                                {{ $project->category_id == $item->id ? 'selected' : null }}>
                                {{ $item->name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="floatingSelectTeam">Category </label>
                </div>
            </div>
            <div class="col-sm-6 col-md-12  mb-3">
                <div class="form-floating">
                    <select name="client_id" class="form-select" id="add_project_client">
                        <option selected="selected" value="">Select...</option>
                        @foreach ($clients as $key => $item)
                            <option value="{{ $item->id }}"
                                {{ $project->client_id == $item->id ? 'selected' : null }}>
                                {{ $item->first_name . ' ' . $item->last_name }}
                            </option>
                        @endforeach
                    </select>
                    <label for="floatingSelectAdmin">Cleint</label>
                </div>
            </div>
            <!-- </div> -->
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6  mb-3">
                    <div class="flatpickr-input-container">
                        <div class="form-floating">
                            <input class="form-control datetimepicker" id="floatingInputStartDate" type="text"
                                placeholder="dd/mm/yyyy" placeholder="start date" name="start_date"
                                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}'
                                value="{{ $project->start_date ? \Carbon\Carbon::parse($project->start_date)->format('d/m/Y') : null }}"
                                required />
                            <div class="invalid-feedback">
                                Please enter start date.
                            </div>
                            <label class="ps-6" for="floatingInputStartDate">Start date</label><span
                                class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6  mb-3">
                    <div class="flatpickr-input-container">
                        <div class="form-floating">
                            <input class="form-control datetimepicker" id="floatingInputDeadline" type="type"
                                placeholder="dd/mm/yyyy" placeholder="deadline" name="end_date"
                                value="{{ $project->end_date ? \Carbon\Carbon::parse($project->end_date)->format('d/m/Y') : null }}"
                                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                            <label class="ps-6" for="floatingInputDeadline">Deadline</label><span
                                class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 gy-3">
                <div class="form-floating">
                    <textarea class="form-control  @error('description') is-invalid @enderror" name="description"
                        id="floatingProjectOverview" placeholder="Leave a comment here" style="height: 100px" required>{{ $project->description }}</textarea>
                    <div class="invalid-feedback">
                        Please enter project overview.
                    </div>
                    <label for="floatingProjectOverview">project overview</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4 gy-3">
                    <div class="form-floating">
                        <input name="budget_allocation" class="form-control" id="edit_project_budget_allocation"
                            type="number" step="0.01" placeholder="Budget"
                            value="{{ $project->budget_allocation }}" />
                        <label for="floatingInputBudget">Cost</label>
                    </div>
                </div>
                <div class="col-md-4 gy-3">
                    <div class="form-floating">
                        <input name="total_sales" class="form-control" id="floatingInputBudget" type="number"
                            step="0.01" placeholder="Budget" value="{{ $project->total_sales }}" />
                        <label for="floatingInputBudget">Sales</label>
                    </div>
                </div>
                <div class="col-md-4 gy-3">
                    <div class="form-floating">
                        <input name="sales_margin" class="form-control" id="floatingInputBudget" type="number"
                            step="0.01" placeholder="Budget" value="{{ $project->sales_margin }}" />
                        <label for="floatingInputBudget">Sales Margin</label>
                    </div>
                </div>
            </div>
            <div class="col-12 gy-3 mb-3">
                {{-- <div class="form-floating form-floating-advance-select"> --}}
                    <label class="form-label" for="inputAddress2">Assigned to (multiple)</label>
                    <select class="form-select js-select-project-edit-assign-multiple" id="edit_project_assigned_to"
                        name="assignment_to_id[]" multiple="multiple" data-with="100%"
                        data-placeholder="<?= get_label('type_to_search', 'Type to search') ?>">
                        <!-- <select name="assignment_to_id[]" class="form-select" data-choices="data-choices" size="1" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}' id="floatingSelectRating" required> -->
                        @foreach ($employees as $emp)
                            <option value="{{ $emp->id }}">{{ $emp->full_name }}</option>
                        @endforeach
                    </select>
                {{-- </div> --}}
            </div>
            <div class="col-sm-6 col-md-12  mb-3">
                {{-- <div class="form-floating form-floating-advance-select"> --}}
                    <label class="form-label" for="inputAddress2">Tags (multiple)</label>
                    <select class="form-select js-select-project-edit-tags-multiple" id="edit_project_tag"
                        name="tag_id[]" multiple="multiple" data-with="100%"
                        data-placeholder="<?= get_label('type_to_search', 'Type to search') ?>">
                        <!-- <select name="assignment_to_id[]" class="form-select" data-choices="data-choices" size="1" multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}' id="floatingSelectRating" required> -->
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                {{-- </div> --}}
            </div>

            <div class="col-12 gy-3">
                <div class="row g-3 justify-content-end">
                    <a href="javascript:void(0)" class="col-auto">
                        <button type="button" class="btn btn-phoenix-danger px-5" data-bs-toggle="tooltip"
                            data-bs-placement="right" data-bs-dismiss="offcanvas">
                            Cancel
                        </button>
                    </a>
                    <div class="col-auto">
                        <button class="btn btn-primary px-5 px-sm-15" id="submit_btn">Create Project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@php
    $selected_emps_id = [];
    $selected_tags_id = [];
@endphp

@foreach ($project->employees as $selected_emp)
    @php
        array_push($selected_emps_id, $selected_emp->id);
    @endphp
@endforeach

@foreach ($project->tags as $selected_tag)
    @php
        array_push($selected_tags_id, $selected_tag->id);
    @endphp
@endforeach

<script>
    $(".js-select-project-edit-assign-multiple").select2({
        closeOnSelect: false,
        placeholder: "Select ...",
    });

    $(".js-select-project-edit-tags-multiple").select2({
        closeOnSelect: false,
        placeholder: "Select ...",
    });


    selected_emp_data = [];
    selected_tag_data = [];
    selected_emp_data = <?php echo json_encode($selected_emps_id); ?>;
    selected_tag_data = <?php echo json_encode($selected_tags_id); ?>;
    console.log('selected emp data');
    console.log(selected_emp_data);
    $('#edit_project_assigned_to').val(selected_emp_data);
    $("#edit_project_assigned_to").trigger("change");

    $('#edit_project_tag').val(selected_tag_data);
    $("#edit_project_tag").trigger("change");
</script>
