<div class="offcanvas-body">
    <div class="row">
        <div class="col-sm-12">

            <form class="row g-3 needs-validation form-submit-event" id="{{ $formId }}" novalidate=""
                action="{{ $formAction }}" method="POST">
                @csrf

                <input type="hidden" name="table" value="task_table" />

                @if (!$projects instanceof \Illuminate\Database\Eloquent\Collection)
                <input type="hidden" id="add_task_id_h" name="project_id" value="{{ $project->id }}">
                @endif
                <input type="hidden" id="add_task_table_h" name="table" value="task_table">
                <!-- <input type="hidden" id="add_task_event_id" name="event_id" value=""> -->

                <div class="card">
                    <div class="card-header d-flex align-items-center border-bottom">
                        <div class="ms-3">
                            <h5 class="mb-0 fs-sm">Add Task</h5>
                        </div>
                    </div>
                    <div class="card-body">

                        @if ($projects instanceof \Illuminate\Database\Eloquent\Collection)

                        <div class="mb-3 col-sm-6 col-md-12">
                            <div class="form-floating">
                                <select name="project_id" id="add_task_project_id" class="form-select" onChange="getProjectAssigned(this.value);" required>
                                    <option selected="selected" value="">Select...</option>
                                    @foreach ($projects as $key => $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->name }}
                                    </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    Please select a project.
                                </div>
                                <label for="add_task_project_id">Project</label>
                            </div>
                        </div>

                        @endif

                        <div class="mb-3 col-sm-6 col-md-12">
                            <div class="form-floating">
                                <input class="form-control" name="name" id="add_task_name" type="text"
                                    placeholder="Project title" required />
                                <label for="add_task_name">Task Title</label>
                                <div class="invalid-feedback">
                                    Please enter a title.
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="mb-3 col-sm-6 col-md-6">
                                <div class="form-floating">
                                    <select name="status_id" class="form-select" id="add_task_status">
                                        <option selected="selected" value="">Select...</option>
                                        @foreach ($statuses as $key => $item)
                                        <option value="{{ $item->id }}">
                                            {{ $item->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                    <label for="add_task_status">Status</label>
                                </div>
                            </div>
                            <div class="mb-3 col-sm-6 col-md-6">
                                <div class="form-floating">
                                    <select name="milestone" class="form-select" id="add_task_milestone">
                                        <option selected="selected" value="0">No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    <label for="add_task_milestone">Milestone</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-sm-6 col-md-6">
                                <div class="flatpickr-input-container">
                                    <div class="form-floating">
                                        <input class="form-control datetimepicker" id="add_task_start_date" type="date"
                                            placeholder="dd/mm/yyyy" placeholder="start date" name="start_date" required
                                            data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                                        <div class="invalid-feedback">
                                            Please enter start date.
                                        </div>
                                        <label class="ps-6" for="add_task_start_date">Start date</label><span
                                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-6">
                                <div class="flatpickr-input-container">
                                    <div class="form-floating">
                                        <input class="form-control datetimepicker" id="add_task_due_date" type="date"
                                            placeholder="dd/mm/yyyy" placeholder="deadline" name="due_date"
                                            data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                                        <label class="ps-6" for="add_task_start_date">Deadline</label><span
                                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputAddress2">Assign to (multiple)</label>
                                <select class="form-select js-select-task-assign-multiple" data-control="select2"
                                    id="add_task_assigned_to" name="assignment_to_id[]" multiple="multiple"
                                    data-with="100%">
                                    @foreach ($employees as $key => $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->full_name }}
                                    </option>
                                    @endforeach
                                </select>
                                <!-- <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                Please choose a username.
                            </div> -->
                            </div>
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="inputAddress2">Tags (multiple)</label>
                                <select class="form-select js-select-task-tags-multiple" id="add_task_tag"
                                    name="tag_id[]" multiple="multiple" data-with="100%">
                                    @foreach ($tags as $key => $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->title }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="mb-3 col-sm-6 col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="budget_allocation" id="add_task_budget" type="number" step="0.01"
                                        placeholder="" />
                                    <label for="add_task_budget">Cost</label>
                                </div>
                            </div>

                            <div class="mb-3 col-sm-6 col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" name="actual_budget_allocated" id="add_task_budget_utilization" type="number" step="0.01"
                                        placeholder="" />
                                    <label for="add_task_name">Sales</label>
                                </div>
                            </div>
                        </div>
                        <!-- <h4 class="mt-6">Other Information</h4> -->

                        <div class="col-12 gy-3 mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" name="description" id="add_task_description" placeholder="" style="height: 100px" required></textarea>
                                <div class="invalid-feedback">
                                    Please enter a description.
                                </div>
                                <label for="add_task_description">Description</label>
                            </div>
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
                                    <button class="btn btn-primary px-5 px-sm-15" id="submit_btn">Create Task</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>