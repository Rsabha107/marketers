<script src="{{ asset('fnx/assets/js/phoenix.js') }}"></script>

<input type="hidden" id="edit_task_id_h" name="id" value="{{ $task->id }}">
<input type="hidden" id="edit_task_table_h" name="table" value="task_table">
<input type="hidden" id="edit_task_event_id" name="project_id" value="{{ $task->project_id }}">

<div class="card">
    <div class="card-header d-flex align-items-center border-bottom">
        <div class="ms-3">
            <h5 class="mb-0 fs-sm">Edit Task</h5>
        </div>
    </div>
    <div class="card-body">
        <div class="row gx-14">
            <div class="col-12 col-lg-7 border-end-lg">
                <div class="py-6">
                    <div class="mb-7">
                        <div class="d-flex align-items-center mb-3">
                            <h4 class="text-body me-3">Description</h4><a class="btn btn-link text-decoration-none p-0"
                                href="#!"><span class="fa-solid fa-pen"></span></a>
                        </div>
                        <p class="text-body-highlight mb-0">{{ $task->description }}</p>
                    </div>
                    <div class="mb-7">

                        <table class="table">
                            <thead>

                            </thead>
                            <tbody>
                                <tr>
                                    <td class="bg-body-highlight align-middle border-top">
                                        <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Start Date
                                        </h6>
                                    </td>
                                    <td class="px-5 mb-0  border-top border-end">{{ format_date($task->start_date) }}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="bg-body-highlight align-middle">
                                        <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Due Date
                                        </h6>
                                    </td>
                                    <td class="px-5 mb-0  border-end">{{ format_date($task->due_date) }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-body-highlight align-middle">
                                        <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Cost</h6>
                                    </td>
                                    <td class="px-5 mb-0  border-end">{{ $task->budget_allocation }}</td>
                                </tr>
                                <tr>
                                    <td class="bg-body-highlight align-middle">
                                        <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Sales</h6>
                                    </td>
                                    <td class="px-5 mb-0  border-end">{{ $task->actual_budget_allocated }}</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                    <div class="mb-3">
                        <div>
                            <h4 class="mb-3">Files</h4>
                        </div>
                        <div class="border-top px-0 pt-4 pb-3">
                            <div class="me-n3">
                                <div class="d-flex flex-between-center">
                                    <div class="d-flex mb-1"><span
                                            class="fa-solid fa-image me-2 text-body-tertiary fs-9"></span>
                                        <p class="text-body-highlight mb-0 lh-1">Silly_sight_1.png</p>
                                    </div>
                                    <div class="btn-reveal-trigger">
                                        <button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a><a class="dropdown-item"
                                                href="#!">Report abuse</a></div>
                                    </div>
                                </div>
                                <div class="d-flex fs-9 text-body-tertiary mb-2 flex-wrap"><span>768 kb</span><span
                                        class="text-body-quaternary mx-1">| </span><a href="#!">Shantinan Mekalan
                                    </a><span class="text-body-quaternary mx-1">| </span><span class="text-nowrap">21st
                                        Dec, 12:56 PM</span></div><img class="rounded-2" src="assets/img/generic/40.png"
                                    alt="" style="width:230px" />
                            </div>
                        </div>
                        <div class="border-top px-0 pt-4 pb-3">
                            <div class="me-n3">
                                <div class="d-flex flex-between-center">
                                    <div>
                                        <div class="d-flex align-items-center mb-1"><span
                                                class="fa-solid fa-image me-2 fs-9 text-body-tertiary"></span>
                                            <p class="text-body-highlight mb-0 lh-1">All_images.zip</p>
                                        </div>
                                        <div class="d-flex fs-9 text-body-tertiary mb-0 flex-wrap"><span>12.8
                                                mb</span><span class="text-body-quaternary mx-1">| </span><a
                                                href="#!">Yves Tanguy </a><span class="text-body-quaternary mx-1">|
                                            </span><span class="text-nowrap">19th Dec, 08:56 PM</span></div>
                                    </div>
                                    <div class="btn-reveal-trigger">
                                        <button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a><a class="dropdown-item"
                                                href="#!">Report abuse</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="border-top px-0 pt-4 pb-3 border-bottom">
                            <div class="me-n3">
                                <div class="d-flex flex-between-center">
                                    <div>
                                        <div class="d-flex align-items-center mb-1 flex-wrap"><span
                                                class="fa-solid fa-file-lines me-2 fs-9 text-body-tertiary"></span>
                                            <p class="text-body-highlight mb-0 lh-1">Project.txt</p>
                                        </div>
                                        <div class="d-flex fs-9 text-body-tertiary mb-0 flex-wrap"><span>123
                                                kb</span><span class="text-body-quaternary mx-1">| </span><a
                                                href="#!">Shantinan Mekalan </a><span
                                                class="text-body-quaternary mx-1">| </span><span
                                                class="text-nowrap">12th Dec, 12:56 PM</span></div>
                                    </div>
                                    <div class="btn-reveal-trigger">
                                        <button
                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                            type="button" data-bs-toggle="dropdown" data-boundary="window"
                                            aria-haspopup="true" aria-expanded="false"
                                            data-bs-reference="parent"><span
                                                class="fas fa-ellipsis-h"></span></button>
                                        <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item"
                                                href="#!">Edit</a><a class="dropdown-item text-danger"
                                                href="#!">Delete</a><a class="dropdown-item"
                                                href="#!">Download</a><a class="dropdown-item"
                                                href="#!">Report abuse</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <label class="btn btn-link p-0" for="customFile"><span
                                    class="fas fa-plus me-1"></span>Add file(s)</label>
                            <input class="d-none" id="customFile" type="file" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-5">
                <div class="py-6">
                    {{-- <h4 class="mb-4 text-body-emphasis">Others Information</h4> --}}
                    <span
                        class="badge badge-phoenix fs--2 badge-phoenix-{{ $task->status->color }} mb-4">{{ $task->status->title }}
                    </span>
                    <div class="mb-7">
                        <h4 class="mb-3">Memebers</h4>
                        </h4>
                        <div class="row g-3">
                            <div class="col-12">

                                @foreach ($task->employees as $key => $emp)
                                    @if ($emp->emp_files?->file_path)
                                        <div class="d-flex align-items-center mb-3"><a href="#!" role="button"
                                                title="{{ $emp->full_name }}">
                                                <div class="avatar avatar-l me-3 pull-up"><img class="rounded-circle"
                                                        src="{{ $emp->emp_files->file_path }}{{ $emp->emp_files->file_name }}"
                                                        alt="" />
                                                </div>
                                            </a>
                                            <div><a class="fs-9 fw-bold" href="#!">{{ $emp->full_name }}</a>
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0 text-body-highlight fw-semibold fs-10 me-2">
                                                        {{ $emp->designation->name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="d-flex align-items-center mb-3"><a href="#!" role="button"
                                                title="{{ $emp->full_name }}">
                                                <div class="avatar avatar-xl me-3 rounded-circle pull-up">
                                                    <div class="avatar-name rounded-circle me-2">
                                                        <span>{{ generateInitials($emp->full_name) }}</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <div><a class="fs-8 fw-bold" href="#!">{{ $emp->full_name }}</a>
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0 text-body-highlight fw-semibold fs-9 me-2">
                                                        {{ $emp->designation->name }}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                        @if (Auth::user()->can('project.edit'))
                            <a class="fw-bold fs-9" href="#!"><span class="fas fa-plus me-1"></span>Add
                                memeber</a>
                        @endif
                    </div>
                    <div class="mb-7">
                        <h4 class="mb-3">Subtasks</h4>
                        <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top">
                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                                <input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3"
                                    type="checkbox" id="subtaskundefined1" />
                                <label class="form-check-label mb-0 fs-8" for="subtaskundefined1">Study
                                    Dragons</label>
                            </div>
                            <div class="hover-actions end-0">
                                <button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span
                                        class="fa-solid fa-pencil"></span></button>
                                <button class="btn btn-sm text-body-tertiary px-0"><span
                                        class="fa-solid fa-xmark fs-8"></span></button>
                            </div>
                        </div>
                        <div class="d-flex flex-between-center hover-actions-trigger py-3 border-top">
                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                                <input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3"
                                    type="checkbox" id="subtaskundefined2" />
                                <label class="form-check-label mb-0 fs-8" for="subtaskundefined2">Procrastinate a
                                    bit</label>
                            </div>
                            <div class="hover-actions end-0">
                                <button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span
                                        class="fa-solid fa-pencil"></span></button>
                                <button class="btn btn-sm text-body-tertiary px-0"><span
                                        class="fa-solid fa-xmark fs-8"></span></button>
                            </div>
                        </div>
                        <div
                            class="d-flex flex-between-center hover-actions-trigger py-3 border-top border-bottom mb-3">
                            <div class="form-check mb-1 mb-md-0 d-flex align-items-center lh-1 min-h-auto">
                                <input class="subtask-checkbox form-check-input form-check-line-through mt-0 me-3"
                                    type="checkbox" id="subtaskundefined3" />
                                <label class="form-check-label mb-0 fs-8" for="subtaskundefined3">Staring at the
                                    notebook for 5 mins</label>
                            </div>
                            <div class="hover-actions end-0">
                                <button class="btn btn-sm me-1 fs-10 text-body-tertiary px-0 me-3"><span
                                        class="fa-solid fa-pencil"></span></button>
                                <button class="btn btn-sm text-body-tertiary px-0"><span
                                        class="fa-solid fa-xmark fs-8"></span></button>
                            </div>
                        </div><a class="fw-bold fs-9" href="#!"><span class="fas fa-plus me-1"></span>Add
                            subtask</a>
                    </div>
                    <h5 class="text-body-highlight mb-2">Tags</h5>
                    <select class="form-select mb-4" aria-label="Default select example">
                        <option selected="">Select</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <h5 class="text-body-highlight mb-2">Due Date</h5>
                    <div class="flatpickr-input-container mb-4">
                        <input class="form-control datetimepicker ps-6" type="text" placeholder="Set the due date"
                            data-options='{"disableMobile":true}' /><span
                            class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                    </div>
                    <h5 class="text-body-highlight mb-2">Reminder</h5>
                    <div class="flatpickr-input-container mb-4">
                        <input class="form-control datetimepicker ps-6" type="text" placeholder="Reminder"
                            data-options='{"enableTime":true,"noCalendar":true,"dateFormat":"H:i","disableMobile":true,"static":true}' /><span
                            class="uil uil-bell-school flatpickr-icon text-body-tertiary"></span>
                    </div>
                    <h5 class="text-body-highlight mb-2">Tag</h5>
                    <div class="choices-select-container mb-6">
                        <select class="form-select" data-choices="data-choices" multiple="multiple"
                            data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">Select organizer...</option>
                            <option>Massachusetts Institute of Technology</option>
                            <option>University of Chicago</option>
                            <option>GSAS Open Labs At Harvard</option>
                            <option>California Institute of Technology</option>
                        </select><span class="uil uil-tag-alt choices-icon text-body-tertiary"
                            style="top: 26%;"></span>
                    </div>
                    <div class="text-end mb-9">
                        <button class="btn btn-phoenix-danger">Delete Task</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


            <!-- this is the Add Attachement Modal for tasks -->
            <div class="modal fade" id="addTaskAttachementModal" tabindex="-1" data-bs-backdrop="static"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-top">
                    <div class="modal-content bg-100">
                        <div class="modal-header bg-modal-header">
                            <h3 class=" text-white mb-0" id="staticBackdropLabel">Upload File</h3>
                            <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                                    class="fas fa-times fs--1 text-danger"></span></button>
                        </div>
                        <form id="fileUploadForm" class="needs-validation form-submit-event" novalidate=""
                            action="{{ route('file.store') }}" method="POST" enctype='multipart/form-data'>
                            @csrf

                            <input type="hidden" id="model_id" name="model_id" value="{{ $task->id }}">
                            <input type="hidden" id="employee_id" name="employee_id" value="0">
                            <input type="hidden" name="model_name" value="task">
                            <input type="hidden" name="table" value="task_file_table">

                            <div class="modal-body">
                                <div class="modal-body px-0">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <div class="mb-4">
                                                <label class="text-1000 fw-bold mb-2">File</label>
                                                <input class="form-control" type="file" name="file_name"
                                                    id="fileupld" required />
                                            </div>
                                            <div class="form-group">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success"
                                                        role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                        aria-valuemax="100" style="width: 0%"></div>
                                                </div>
                                            </div>
                                            <!-- <div class="mb-4">
                                                                                    <label class="text-1000 fw-bold mb-2">Status</label>
                                                                                    <select class="form-select" name="active_flag" id="activeFlag" required>
                                                                                        <option value="" >Select</option>
                                                                                        <option value="1" selected>Active</option>
                                                                                        <option value="2">Inactive</option>
                                                                                    </select>
                                                                                </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-outline-danger" type="button"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" type="submit" id="submit_btn">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
