@extends('projects.admin.layout.admin_template')
@section('main')
    <!-- ***************************************************************************** */ -->
    <!-- <div class="pb-9"> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="{{ url('/home') }}"><?= get_label('home', 'Home') ?></a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('projects.admin.project') }}"><?= get_label('projects', 'Projects') ?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                {{ $projectData->name }}
            </li>
        </ol>
    </nav>

    <div class="col-12">
        <div class="container col-8">
            <div class="theme-wizard flight-booking-wizard">
                <ul class="nav justify-content-between nav-wizard nav-wizard-success">
                    @foreach ($project->tasks->where('milestone', '1')->sortBy('id') as $milestone_task)
                        @if ($milestone_task->status?->title === 'Completed')
                            @php
                                $done_flag = 'done completed';
                                $fa = 'fas fa-check';
                            @endphp
                        @else
                            @php
                                $done_flag = null;
                                $fa = 'fas fa-user';
                            @endphp
                        @endif
                        <li class="nav-item">
                            <a class="{{ $done_flag }} nav-link fw-semibold" data-toggle="tooltip"
                                title="{{ $milestone_task->name }}" href="javascript:void(0);" data-wizard-step="1">
                                <div class="d-inline-block text-center">
                                    <span class="nav-item-circle-parent">
                                        <span class="d-block nav-item-circle">
                                            <span class="{{ $fa }}"></span>
                                        </span>
                                    </span>
                                    <span class="mt-1 fs-9">{{ Str::substr($milestone_task->name, 0, 7) }}</span>
                                </div>
                            </a>
                        </li>
                    @endforeach
                    {{-- <li class="nav-item">
                        <a class="nav-link fw-semibold" href="../../../apps/travel-agency/flight/booking.html"
                            data-wizard-step="2">
                            <div class="d-inline-block text-center">
                                <span class="nav-item-circle-parent">
                                    <span class="d-block nav-item-circle">
                                        <span class="fas fa-check"></span>
                                    </span>
                                </span>
                                <span class="mt-1 fs-9">Booking</span>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="../../../apps/travel-agency/flight/payment.html"
                            data-wizard-step="3">
                            <div class="d-inline-block text-center">
                                <span class="nav-item-circle-parent">
                                    <span class="d-block nav-item-circle">
                                        <span class="fas fa-money-bill"></span>
                                    </span>
                                </span>
                                <span class="mt-1 fs-9">Payment</span>
                            </div>
                        </a>
                    </li> --}}
                    <!--  <li class="nav-item">
                                    <a class="nav-link fw-semibold" href="../../../apps/travel-agency/flight/homepage.html" data-wizard-step="1">
                                        <div class="d-inline-block text-center">
                                            <span class="nav-item-circle-parent">
                                                <span class="d-block nav-item-circle">
                                                    <span class="fas fa-user"></span>
                                                </span>
                                            </span>
                                            <span class="mt-1 fs-9">Flight</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" href="../../../apps/travel-agency/flight/booking.html" data-wizard-step="2">
                                        <div class="d-inline-block text-center">
                                            <span class="nav-item-circle-parent">
                                                <span class="d-block nav-item-circle">
                                                    <span class="fas fa-check"></span>
                                                </span>
                                            </span>
                                            <span class="mt-1 fs-9">Booking</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" href="../../../apps/travel-agency/flight/payment.html" data-wizard-step="3">
                                        <div class="d-inline-block text-center">
                                            <span class="nav-item-circle-parent">
                                                <span class="d-block nav-item-circle">
                                                    <span class="fas fa-money-bill"></span>
                                                </span>
                                            </span>
                                            <span class="mt-1 fs-9">Payment</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" href="../../../apps/travel-agency/flight/homepage.html" data-wizard-step="1">
                                        <div class="d-inline-block text-center">
                                            <span class="nav-item-circle-parent">
                                                <span class="d-block nav-item-circle">
                                                    <span class="fas fa-user"></span>
                                                </span>
                                            </span>
                                            <span class="mt-1 fs-9">Flight</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" href="../../../apps/travel-agency/flight/booking.html" data-wizard-step="2">
                                        <div class="d-inline-block text-center">
                                            <span class="nav-item-circle-parent">
                                                <span class="d-block nav-item-circle">
                                                    <span class="fas fa-check"></span>
                                                </span>
                                            </span>
                                            <span class="mt-1 fs-9">Booking</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" href="../../../apps/travel-agency/flight/payment.html" data-wizard-step="3">
                                        <div class="d-inline-block text-center">
                                            <span class="nav-item-circle-parent">
                                                <span class="d-block nav-item-circle">
                                                    <span class="fas fa-money-bill"></span>
                                                </span>
                                            </span>
                                            <span class="mt-1 fs-9">Payment</span>
                                        </div>
                                    </a>
                                </li> -->
                </ul>
            </div>
        </div>
    </div>

    <div class="row justify-content-between align-items-end mb-4 g-3">

        <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-12 col-md-auto">
                <h2 class="mb-0">{{ $projectData->name }}</h2>
            </div>
            <div class="col-12 col-md-auto d-flex">
                <a href="javascript:void(0);" id="edit_project" data-id="{{ $projectData->id }}"
                    class="btn btn-phoenix-secondary px-3 px-sm-5 me-2"><span class="fa-solid fa-edit me-sm-2"></span><span
                        class="d-none d-sm-inline">Edit </span></a>
                <button class="btn btn-phoenix-danger me-2"><span class="fa-solid fa-trash me-2"></span><span>Delete
                        Project</span></button>
                <!-- <div>
                                <button class="btn px-3 btn-phoenix-secondary" type="button" data-bs-toggle="dropdown"
                                    data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                        class="fa-solid fa-ellipsis"></span></button>
                                <ul class="dropdown-menu dropdown-menu-end p-0" style="z-index: 9999;">
                                    <li><a class="dropdown-item" href="#!">View profile</a></li>
                                    <li><a class="dropdown-item" href="#!">Report</a></li>
                                    <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                                    <li><a class="dropdown-item text-danger" href="#!">Delete Lead</a></li>
                                </ul>
                            </div> -->
            </div>
        </div>

        <div class="row g-0 border-top">
            <div class="nav flex-sm-row border-bottom border-bottom-sm-0 fs-9 vertical-tab h-100 justify-content-between"
                role="tablist" aria-orientation="horizontal">
                <a class="nav-link border-end border-end-sm border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center active"
                    id="overviewTab" data-bs-toggle="tab" data-bs-target="#overviewTabContent" role="tab"
                    aria-controls="overviewTabContent" aria-selected="true"> <svg xmlns="http://www.w3.org/2000/svg"
                        width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="fa-solid fa-chart-line me-2 tab-icon-color">

                    </svg><span class="d-none d-sm-inline">Overview</span>
                </a>
                <a class="nav-link border-end border-end-sm border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                    id="memeberTab" data-bs-toggle="tab" data-bs-target="#memeberTabContent" role="tab"
                    aria-controls="memeberTabContent" aria-selected="false" tabindex="-1"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-truck me-sm-2 fs-4 nav-icons">
                        <rect x="1" y="3" width="15" height="13"></rect>
                        <polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon>
                        <circle cx="5.5" cy="18.5" r="2.5"></circle>
                        <circle cx="18.5" cy="18.5" r="2.5"></circle>
                    </svg><span class="d-none d-sm-inline">Memebers</span>
                </a>
                <a class="nav-link border-end border-end-sm border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                    id="taskTab" data-bs-toggle="tab" data-bs-target="#taskTabContent" role="tab"
                    aria-controls="taskTabContent" aria-selected="false" tabindex="-1"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="fa-solid fa-chart-line me-2 tab-icon-color">
                    </svg><span class="d-none d-sm-inline">Tasks</span>
                </a>
                <a class="nav-link border-end border-end-sm border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                    id="kanbanTab" data-bs-toggle="tab" data-bs-target="#kanbanTabContent" role="tab"
                    aria-controls="kanbanTabContent" aria-selected="false" tabindex="-1"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="fa-solid fa-chart-line me-2 tab-icon-color">
                    </svg><span class="d-none d-sm-inline">Task Board</span>
                </a>
                <a class="nav-link border-end border-end-sm border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                    id="ganttTab" data-bs-toggle="tab" data-bs-target="#ganttTabContent" role="tab"
                    aria-controls="ganttTabContent" aria-selected="false" tabindex="-1"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="fa-solid fa-chart-line me-2 tab-icon-color">
                    </svg><span class="d-none d-sm-inline">Gantt</span>
                </a>
                <a class="nav-link border-end border-end-sm border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                    id="notesTab" data-bs-toggle="tab" data-bs-target="#notesTabContent" role="tab"
                    aria-controls="notesTabContent" aria-selected="false" tabindex="-1"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="fa-solid fa-clipboard me-2 tab-icon-color">
                    </svg><span class="d-none d-sm-inline">Notes</span>
                </a>
                <a class="nav-link border-end border-end-sm border-bottom-sm text-center text-sm-start cursor-pointer outline-none d-sm-flex align-items-sm-center"
                    id="filesTab" data-bs-toggle="tab" data-bs-target="#filesTabContent" role="tab"
                    aria-controls="filesTabContent" aria-selected="false" tabindex="-1"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="fa-solid fa-paperclip me-2 tab-icon-color">
                    </svg><span class="d-none d-sm-inline">Files ({{ $projectData->attachments->count() }})</span>
                </a>
                <a class="nav-link text-center text-sm-start border-bottom-sm cursor-pointer outline-none d-sm-flex align-items-sm-center"
                    id="advancedTab" data-bs-toggle="tab" data-bs-target="#advancedTabContent" role="tab"
                    aria-controls="advancedTabContent" aria-selected="false" tabindex="-1"> <svg
                        xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-lock me-sm-2 fs-4 nav-icons">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                    </svg><span class="d-none d-sm-inline">Advanced</span>
                </a>
            </div>
            <div class="col-sm-12 mt-1">
                <div class="tab-content py-3 h-100">
                    <!--======================================
                                        OVERVIEW TAB AREA
                                    ======================================-->
                    <div class="tab-pane fade active show" id="overviewTabContent" role="tabpanel"
                        aria-labelledby="overviewTab">
                        <h4 class="mb-3 d-sm-none">Overview</h4>
                        <div class="pb-9">
                            <div class="row g-4 g-xl-6">
                                <div class="col-xl-5 col-xxl-3">
                                    <div class="sticky-leads-sidebar">
                                        <div class="card mb-3">
                                            <div class="card-body">
                                                <div class="row align-items-center g-3">
                                                    <div class="col-12 col-sm-auto flex-1">
                                                        <div class="d-flex align-items-center mb-3">
                                                            <h4 class="fw-bolder mb-2 line-clamp-1 mb-1">Project Details
                                                            </h4>
                                                            <button class="btn btn-link p-0">
                                                                <a href="javascript:void(0);" id="edit_project"
                                                                    data-action="update" data-source="list"
                                                                    data-type="edit" data-table="none"
                                                                    data-id="{{ $projectData->id }}" data-redirect="list"
                                                                    data-workspace_id="{{ session()->get('workspace_id') }}"
                                                                    role="button" title="edit">
                                                                    <span
                                                                        class="fas fa-pen fs-8 ms-3 text-body-quaternary"></span>
                                                                </a>
                                                            </button>
                                                        </div>
                                                        {{-- <span class="badge badge-phoenix badge-phoenix-warning"
                                                            role="button" data-bs-toggle="tooltip"
                                                            data-bs-placement="left"
                                                            title="Workspace">{{ $projectData->workspaces?->title }}<span
                                                        class="ms-1 fa-solid fas fa-network-wired"></span>
                                                    </span> --}}
                                                        <span
                                                            class="badge badge-phoenix badge-phoenix-{{ $projectData->status->color }} mb-4">{{ $projectData->status->title }}<span
                                                                class="ms-1 uil uil-stopwatch"></span></span>

                                                        <div class="align-items-center mb-4">
                                                            <div>
                                                                <div class="d-flex justify-content-between">
                                                                    <p class="text-body fw-semibold">Budget :</p>
                                                                    <p class="text-body-emphasis fw-semibold">
                                                                        {{ number_format($projectData->budget_allocation) }}
                                                                    </p>
                                                                </div>
                                                                <div class="d-flex justify-content-between">
                                                                    <p class="text-body fw-semibold">Used :</p>
                                                                    <p class="text-danger fw-semibold">
                                                                        {{ number_format($projectData->budget_allocation - $remainingBudget) }}
                                                                    </p>
                                                                </div>
                                                                <div class="d-flex justify-content-between">
                                                                    <p class="text-body fw-semibold">Remaining :</p>
                                                                    <p class="text-body-emphasis fw-semibold">
                                                                        {{ number_format($remainingBudget) }}
                                                                    </p>
                                                                </div>
                                                                <div class="d-flex justify-content-between">
                                                                    <p class="text-body fw-semibold">Created :</p>
                                                                    <p class="text-body-emphasis fw-semibold">
                                                                        {{ \Carbon\Carbon::parse($projectData->start_date)->format('d-M-Y') }}
                                                                    </p>
                                                                </div>
                                                                <div class="d-flex justify-content-between">
                                                                    <p class="text-body fw-semibold">Deadline :</p>
                                                                    <p class="text-body-emphasis fw-semibold">
                                                                        {{ \Carbon\Carbon::parse($projectData->end_date)->format('d-M-Y') }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-md-flex d-xl-block align-items-center justify-content-between mb-5">
                                                            <div class="d-flex align-items-center mb-3 mb-md-0 mb-xl-3">
                                                                <div class="avatar avatar-xl me-3"><img
                                                                        class="rounded-circle"
                                                                        src="{{ asset('fnx/assets/img/team/72x72/58.webp') }}"
                                                                        alt="" /></div>
                                                                <div>
                                                                    <h5>{{ $projectData->client?->first_name . ' ' . $projectData->client?->last_name }}
                                                                    </h5>
                                                                    <div class="dropdown"><a
                                                                            class="text-body-secondary dropdown-toggle text-decoration-none dropdown-caret-none"
                                                                            href="#!" data-bs-toggle="dropdown"
                                                                            aria-expanded="false">
                                                                            Client<span
                                                                                class="fa-solid fa-caret-down text-body-secondary fs-9 ms-2"></span></a>
                                                                        <div class="dropdown-menu shadow-sm"
                                                                            style="min-width:20rem">
                                                                            <div class="card position-relative border-0">
                                                                                <div class="card-body p-0">
                                                                                    <div class="mx-3">
                                                                                        <form id="switchClientOwner"
                                                                                            class="needs-validation"
                                                                                            novalidate=""
                                                                                            action="{{ route('projects.admin.project.update.client') }}"
                                                                                            method="POST">
                                                                                            @csrf
                                                                                            <input type="hidden"
                                                                                                name="project_id"
                                                                                                value="{{ $projectData->id }}">
                                                                                            <h4 class="mb-3 fw-bold">Switch
                                                                                                ownership</h4>
                                                                                            <h5 class="mb-3">Project
                                                                                                Client
                                                                                            </h5>
                                                                                            <select id="change_client"
                                                                                                class="form-select mb-3"
                                                                                                data-id = "{{ $projectData->id }}"
                                                                                                aria-label="Default select"
                                                                                                name="client_id">
                                                                                                <option
                                                                                                    selected="selected">
                                                                                                    Select</option>
                                                                                                @foreach ($clients as $key => $client)
                                                                                                    <option
                                                                                                        value="{{ $client->id }}">
                                                                                                        {{ $client->first_name . ' ' . $client->last_name }}
                                                                                                    </option>
                                                                                                @endforeach
                                                                                            </select>
                                                                                            <div class="text-end">
                                                                                                <button
                                                                                                    class="btn btn-link text-danger"
                                                                                                    type="button">Cancel</button>
                                                                                                <button
                                                                                                    class="btn btn-sm btn-primary px-5"
                                                                                                    type="submit">Save</button>
                                                                                            </div>
                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div>
                                                                @foreach ($projectData->tags as $key => $item)
                                                                    <span class="badge badge-tag me-2 mb-1 pull-up"
                                                                        style="background-color:{{ $item->color }};">{{ $item->title }}</span>
                                                                @endforeach
                                                                <!-- <span class="badge badge-phoenix badge-phoenix-success me-2">Success</span>
                                                                                            <span class="badge badge-phoenix badge-phoenix-danger me-2">Lost</span>
                                                                                            <span class="badge badge-phoenix badge-phoenix-secondary">Close</span> -->
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex justify-content-between text-body-tertiary fw-semibold">
                                                            <p class="mb-2"> Progress</p>
                                                            <p class="mb-2 text-1100">{{ $project_progress }}%</p>
                                                        </div>
                                                        <div class="progress bg-success-100">
                                                            <div class="progress-bar rounded bg-{{ $projectData->status->color }}"
                                                                role="progressbar" aria-label="Success example"
                                                                style="width: {{ $project_progress }}%"
                                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="fw-bolder mb-2 line-clamp-1 mb-5">Assigned Users
                                                    @if (Auth::user()->can('project.edit'))
                                                        <div class="float-end avatar avatar-m  me-1">
                                                            <a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                                href="javascript:void(0);" id="edit_project"
                                                                data-action="update" data-source="list" data-type="edit"
                                                                data-table="none" data-id="{{ $projectData->id }}"
                                                                data-redirect="list"
                                                                data-workspace_id="{{ session()->get('workspace_id') }}"
                                                                role="button" title="add">
                                                                <div class="avatar avatar-m  rounded-circle pull-up">
                                                                    <div
                                                                        class="avatar-name rounded-circle me-2 text-warning">
                                                                        <span>+</span>
                                                                    </div>
                                                                    <!-- <img class="rounded-circle " src="../../assets/img/team/34.webp" alt=""> -->
                                                                </div>
                                                            </a>
                                                        </div>
                                                    @endif
                                                </h4>
                                                <div class="row g-3">
                                                    <div class="col-12">

                                                        @foreach ($projectData->employees as $key => $emp)
                                                            @if ($emp->emp_files?->file_path)
                                                                <div class="d-flex align-items-center mb-3"><a
                                                                        href="#!" role="button"
                                                                        title="{{ $emp->full_name }}">
                                                                        <div class="avatar avatar-xl me-3 pull-up"><img
                                                                                class="rounded-circle"
                                                                                src="{{ $emp->emp_files->file_path }}{{ $emp->emp_files->file_name }}"
                                                                                alt="" />
                                                                        </div>
                                                                    </a>
                                                                    <div><a class="fs-8 fw-bold"
                                                                            href="#!">{{ $emp->full_name }}</a>
                                                                        <div class="d-flex align-items-center">
                                                                            <p
                                                                                class="mb-0 text-body-highlight fw-semibold fs-9 me-2">
                                                                                {{ $emp->designation->name }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @else
                                                                <div class="d-flex align-items-center mb-3"><a
                                                                        href="#!" role="button"
                                                                        title="{{ $emp->full_name }}">
                                                                        <div
                                                                            class="avatar avatar-xl me-3 rounded-circle pull-up">
                                                                            <div class="avatar-name rounded-circle me-2">
                                                                                <span>{{ generateInitials($emp->full_name) }}</span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <div><a class="fs-8 fw-bold"
                                                                            href="#!">{{ $emp->full_name }}</a>
                                                                        <div class="d-flex align-items-center">
                                                                            <p
                                                                                class="mb-0 text-body-highlight fw-semibold fs-9 me-2">
                                                                                {{ $emp->designation->name }}
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-xxl-9">
                                    <div class="card mb-3">
                                        <!-- <img class="card-img-top" src="../../../assets/img//generic/66.jpg" alt="..." /> -->
                                        <div class="card-body">
                                            <h4 class="card-title">Brief</h4>
                                            <!-- <p class="card-text">Here is the example of the Multiple Container Sortable feature of the </p> -->
                                            <p class="card-text text-body-secondary mb-4">
                                                {{ strip_tags($projectData->description) }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-2 row-cols-xxl-2 g-3 mb-3">
                                        <div class="col">
                                            <div class="card h-100 ">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fw-bolder mb-2 line-clamp-1 mb-1">Project Information
                                                        </h4>
                                                        <button class="btn btn-link p-0">
                                                            <a href="javascript:void(0);" id="edit_project"
                                                                data-action="update" data-source="list" data-type="edit"
                                                                data-table="none" data-id="{{ $projectData->id }}"
                                                                data-redirect="list"
                                                                data-workspace_id="{{ session()->get('workspace_id') }}"
                                                                role="button" title="edit">
                                                                <span
                                                                    class="fas fa-pen fs-8 ms-3 text-body-quaternary"></span>
                                                            </a>
                                                        </button>
                                                    </div>

                                                    <div class="col-12 col-sm-auto flex-1">
                                                        <table class="lh-sm">
                                                            <tbody>
                                                                <tr>
                                                                    <td
                                                                        class="align-top py-1 text-body text-nowrap fw-bold">
                                                                        Functional Area : </td>
                                                                    <td
                                                                        class="text-body-tertiary text-opacity-85 fw-semibold ps-3">
                                                                        {{ $projectData->functional_area?->name ? $projectData->functional_area?->name : 'not specified' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="align-top py-1 text-body text-nowrap fw-bold">
                                                                        Project Type :</td>
                                                                    <td
                                                                        class="text-body-tertiary text-opacity-85 fw-semibold ps-3">
                                                                        {{ $projectData->types?->name ? $projectData->types?->name : 'not specified' }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td
                                                                        class="align-top py-1 text-body text-nowrap fw-bold">
                                                                        Project Category :</td>
                                                                    <td class="text-warning fw-semibold ps-3">
                                                                        {{ $projectData->categories?->name ? $projectData->categories?->name : 'not specified' }}
                                                                    </td>
                                                                </tr>
                                                                <tr class="mb-3">
                                                                    <td
                                                                        class="align-top py-1 text-body text-nowrap fw-bold">
                                                                        Attendeese :</td>
                                                                    <td
                                                                        class="text-body-tertiary text-opacity-85 fw-semibold ps-3">
                                                                        {{ $projectData->audiences?->name ? $projectData->audiences?->name : 'not specified' }}
                                                                    </td>
                                                                </tr>
                                                                <!-- <tr>
                                                                                                <td>
                                                                                                    <div class="d-flex align-items-center mt-3"><span class="fa-solid fa-list-check me-2 text-body-tertiary fs-9"></span>
                                                                                                        <h5 class="text-body-emphasis mb-0 me-2">{{ $projectData->tasks->count() }}<span class="text-body fw-normal ms-2">tasks</span></h5>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr> -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="card h-100 ">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fw-bolder mb-2 line-clamp-1 mb-1">Task status
                                                            ({{ $projectData->tasks->count() }} tasks)</h4>
                                                    </div>

                                                    <div class="col-12 col-sm-auto flex-1">
                                                        <div class="echart-pie-edge-align-chart-example"
                                                            style="min-height:200px;width:100%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-2 row-cols-xxl-2 g-3 mb-3">
                                        <div class="col">
                                            <div class="card h-100 ">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fw-bolder mb-2 line-clamp-1 mb-1">Project Information
                                                        </h4>
                                                        <button class="btn btn-link p-0">
                                                            <a href="javascript:void(0);" id="edit_project"
                                                                data-action="update" data-source="list" data-type="edit"
                                                                data-table="none" data-id="{{ $projectData->id }}"
                                                                data-redirect="list"
                                                                data-workspace_id="{{ session()->get('workspace_id') }}"
                                                                role="button" title="edit">
                                                                <span
                                                                    class="fas fa-pen fs-8 ms-3 text-body-quaternary"></span>
                                                            </a>
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="card h-100">
                                                <div class="card-body d-flex flex-column">
                                                    <div class="d-flex justify-content-between">
                                                        <div>
                                                            <h5 class="mb-2">Total Spent</h5>
                                                            <h6 class="text-body-tertiary">Budget:
                                                                {{ number_format($projectData->budget_allocation) }}
                                                            </h6>
                                                        </div>
                                                        <h4>{{ number_format($total_budget_spent) }}</h4>
                                                    </div>
                                                    <div class="d-flex justify-content-center pt-3 flex-1">
                                                        <div class="echarts-budget-utilization"
                                                            style="height:100%;width:100%;"
                                                            data-percent="{{ number_format($budget_percentage_used, 2) }}">
                                                        </div>
                                                    </div>
                                                    <div class="mt-3">
                                                        <div class="d-flex align-items-center mb-2">
                                                            <div class="bullet-item bg-primary me-2"></div>
                                                            <h6 class="text-body fw-semibold flex-1 mb-0">Budget
                                                                Uitlization</h6>
                                                            <h6 class="text-body fw-semibold mb-0">
                                                                {{ number_format($budget_percentage_used, 2) }}%
                                                            </h6>
                                                        </div>
                                                        <!-- <div class="d-flex align-items-center">
                                                                                <div class="bullet-item bg-primary-subtle me-2"></div>
                                                                                <h6 class="text-body fw-semibold flex-1 mb-0">Non-paying customer</h6>
                                                                                <h6 class="text-body fw-semibold mb-0">70%</h6>
                                                                            </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--======================================
                                        END OVERVIEW TAB AREA
                                    ======================================-->

                    <!--======================================
                                        TASKS AREA
                                    ======================================-->
                    <div class="tab-pane fade h-100" id="taskTabContent" role="tabpanel" aria-labelledby="taskTab">
                        <h5 class="mb-3 text-body-highlight">Tasks</h5>
                        <div class="mb-4 mt-4">
                            <div class="d-flex flex-wrap gap-3">
                                <!-- <div class="search-box">
                                                            <form class="position-relative">
                                                                <input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                                                                <span class="fas fa-search search-box-icon"></span>
                            
                                                            </form>
                                                        </div> -->
                                <div>
                                    <select class="form-select select-appearance" id="tasks_department_filter"
                                        aria-label="Default select example">
                                        <option value="" selected>
                                            <?= get_label('select_department', 'Select department') ?></option>
                                        @foreach ($departments as $key)
                                            <option value="{{ $key->id }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <select class="form-select select-appearance" id="tasks_employee_filter"
                                        aria-label="Default select example">
                                        <option value="" selected>
                                            <?= get_label('select_employee', 'Select employee') ?>
                                        </option>
                                        @foreach ($employees as $key)
                                            <option value="{{ $key->id }}">{{ $key->first_name }}
                                                {{ $key->last_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <select class="form-select select-appearance" id="tasks_status_filter"
                                        aria-label="Default select example">
                                        <option value="" selected><?= get_label('select_status', 'Select status') ?>
                                        </option>
                                        @foreach ($statuses as $key)
                                            <option value="{{ $key->id }}">{{ $key->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!-- <div >
                                                            <select class="form-select select-appearance" id="active_archived_filter" aria-label="Default select example">
                                                                <option value=""><?= get_label('active_archived', 'Select Active or Archived') ?></option>
                                                                <option value="N" $selected>Active</option>
                                                                <option value="Y" >Archived</option>
                                                            </select>
                                                        </div> -->

                                <div class="ms-xxl-auto">
                                    <!-- <button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button> -->
                                    <!-- <button class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add product</button> -->
                                    @if (Auth::user()->can('task.create'))
                                        <a href="#!" id="add_task" data-action="store" data-source="manage"
                                            data-type="add" data-table="task_table" data-id="0">
                                            <button type="button" class="btn btn-sm btn-primary"
                                                data-bs-toggle="tooltip" data-bs-placement="right"
                                                data-bs-original-title=" <?= get_label('create_task', 'Create task') ?>">
                                                <i class="bx bx-plus"></i>Create new task
                                            </button>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="mb-0">
                            <x-projects.admin-tasks-card :projectId="$projectData->id" />
                        </div>
                    </div>
                    <!--======================================
                                        END TASKS AREA
                                    ======================================-->

                    <!--======================================
                                        GANTT AREA
                                    ======================================-->
                    <div class="tab-pane fade h-100" id="ganttTabContent" role="tabpanel" aria-labelledby="ganttTab">
                        {{-- <h5 class="mb-3 text-body-highlight">gantts</h5> --}}
                        {{-- <div class="d-xl-flex justify-content-between mb-3">
                            <a href="javascript:void(0);">
                                <button type="button" id="add_project_member" data-id="{{ $projectData->id }}"
                                    class="btn btn-primary px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                                    data-bs-original-title=" <?= get_label('add_new_project', 'Add project member') ?>">
                                    <i class="fa-solid fa-plus me-2"></i>Add GAntt
                                </button>
                            </a>
                        </div> --}}
                        <div>
                            <x-admin-project-gantt-card :project="$projectData" />
                        </div>
                    </div>
                    <!--======================================
                                        End GANTT AREA
                                    ======================================-->

                    <!--======================================
                                        Kanban AREA
                                    ======================================-->
                    <div class="tab-pane fade h-100" id="kanbanTabContent" role="tabpanel" aria-labelledby="kanbanTab">
                        {{-- <h5 class="mb-3 text-body-highlight">kanbans</h5> --}}
                        <div>
                            <x-admin-project-kanban-card :project="$projectData" :taskStatuses="$statuses" :tasks="$tasks" />
                        </div>
                    </div>
                    <!--======================================
                                    End Kanban AREA
                                ======================================-->

                    <!--======================================
                                        MEMEBER AREA
                                    ======================================-->
                    <div class="tab-pane fade h-100" id="memeberTabContent" role="tabpanel"
                        aria-labelledby="memeberTab">
                        <div class="d-flex flex-column h-100">
                            {{-- <h5 class="mb-3 text-body-highlight">Memebers</h5> --}}
                            <div class="d-xl-flex justify-content-between mb-3">
                                <a href="javascript:void(0);">
                                    <button type="button" id="add_project_member" data-id="{{ $projectData->id }}"
                                        class="btn btn-primary px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                                        data-bs-original-title=" <?= get_label('add_new_project', 'Add project member') ?>">
                                        <i class="fa-solid fa-plus me-2"></i>Add project member
                                    </button>
                                </a>
                            </div>
                            <div class="mb-0">
                                <x-admin-project-members-card :users="$users" :projectId="$projectData->id" :statuses="$statuses"
                                    :departments="$departments" source="list" showpage="list"
                                    showpageid="list_{{ $projectData->id }}" />
                            </div>
                        </div>
                    </div>
                    <!--======================================
                                        End Member Memebers
                                    ======================================-->

                    <!--======================================
                                        Notes AREA
                                    ======================================-->
                    <div class="tab-pane fade" id="notesTabContent" role="tabpanel" aria-labelledby="notesTab">
                        <h5 class="mb-3 text-body-highlight">Notes</h5>
                        <div class="card mb-5">
                            <div class="mb-2">
                                <div class="row align-items-center justify-content-between g-3 mt-2 ms-2">
                                    <div class="col-12 col-md-auto d-flex">
                                        @if (Auth::user()->can('project.note.create'))
                                            <a href="#!" class="btn btn-phoenix-primary px-3 px-sm-5 me-2"
                                                data-bs-toggle="modal" data-bs-target="#addEventNoteModal"
                                                aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span class="fas fa-plus me-sm-2"></span><span
                                                    class="d-none d-sm-inline">Add a
                                                    new note</span></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- <textarea class="form-control mb-3" id="notes" rows="4"> </textarea> -->
                            <div class="row gy-4">
                                <div class="col-12 col-xl-auto flex-1">
                                    @foreach ($eventNote as $key => $item)
                                        <div class="border-top border-dashed border-300 px-3 pt-3 pb-4">
                                            <div class="d-flex flex-between-center">
                                                <div class="d-flex mb-1"><span
                                                        class="fa-solid fa-file-lines me-2 text-700 fs--1"></span>
                                                    <p class="text-1000 mb-0 lh-1">{{ $item->note_text }}</p>
                                                </div>
                                                @if (Auth::user()->can('project.note.delete'))
                                                    <div class="font-sans-serif btn-reveal-trigger">
                                                        <button
                                                            class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                            type="button" data-bs-toggle="dropdown"
                                                            data-boundary="window" aria-haspopup="true"
                                                            aria-expanded="false" data-bs-reference="parent"><span
                                                                class="fas fa-ellipsis-h"></span></button>
                                                        <div class="dropdown-menu dropdown-menu-end py-2">
                                                            <a class="dropdown-item text-danger" href=""
                                                                id="delete">Delete</a>
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <p class="fs--1 text-700 mb-2"><span class="text-400 mx-1">| </span><a
                                                    href="#!">{{ $item->users?->name }} </a><span
                                                    class="text-400 mx-1">| </span><span
                                                    class="text-nowrap">{{ $item->created_at }}</span>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--======================================
                                        End Notes AREA
                                    ======================================-->
                    <!--======================================
                                        Files AREA
                                    ======================================-->
                    <div class="tab-pane fade" id="filesTabContent" role="tabpanel" aria-labelledby="filesTab">
                        <h5 class="mb-3 text-body-highlight">Files</h5>
                        <div class="card mb-5">
                            <div class="mb-2">
                                <div class="row align-items-center justify-content-between g-3 mt-2 ms-2">
                                    <div class="col-12 col-md-auto d-flex">
                                        @if (Auth::user()->can('project.file.create'))
                                            <a href="#!" data-id="{{ $projectData->id }}" data-table="global_file_table"
                                                class="btn btn-phoenix-primary px-3 px-sm-5 me-2" data-bs-toggle="modal"
                                                data-bs-target="#addProjectAttachementModal" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fas fa-file-upload me-sm-2"></span><span
                                                    class="d-none d-sm-inline">Upload a new file</span></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <x-global.attachment-card :projectId="$projectData->id" />

                            {{-- @foreach ($fileName as $key => $item)
                                <div class="border-top border-dashed border-300 px-3 pt-3 pb-4">
                                    <div class="d-flex flex-between-center">
                                        <div class="d-flex mb-1"><span
                                                class="fa-solid fa-file-lines me-2 text-700 fs--1"></span>
                                            <p class="text-1000 mb-0 lh-1"><a
                                                    href="{{ $item->file_path }}{{ $item->file_name }}"
                                                    target="_blank">{{ $item->original_file_name }}</a></p>
                                        </div>
                                        @if (Auth::user()->can('project.file.delete'))
                                            <div class="font-sans-serif btn-reveal-trigger">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2">
                                                    <a class="dropdown-item text-danger" href=""
                                                        id="delete">Delete</a>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                    <p class="fs--1 text-700 mb-2"><span>{{ $item->file_size / 100 }}kB</span><span
                                            class="text-400 mx-1">| </span><a href="#!">{{ $item->users->name }}
                                        </a><span class="text-400 mx-1">| </span><span
                                            class="text-nowrap">{{ $item->created_at }}</span></p>
                                </div>
                            @endforeach --}}
                        </div>
                    </div>
                    <!--======================================
                                        End Files AREA
                                    ======================================-->
                    <!--======================================
                                        Advanced AREA
                                    ======================================-->
                    <div class="tab-pane fade" id="advancedTabContent" role="tabpanel" aria-labelledby="advancedTab">

                        {{-- <div> --}}
                        {{-- <div class="px-4 px-lg-6">
                                <div class="d-xl-flex justify-content-between">
                                    <div class="mb-3">
                                        <button class="btn btn-primary me-4" type="button" data-bs-toggle="modal"
                                            data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false"
                                            data-bs-reference="parent"><span class="fas fa-plus me-2"></span>Add
                                            Deal</button>
                                        <button class="btn btn-link text-body px-0"><span
                                                class="fa-solid fa-file-export fs-9 me-2"></span>Export</button>
                                    </div>
                                    <div class="d-flex mb-4">
                                        <div class="search-box">
                                            <form class="position-relative">
                                                <input class="form-control search-input search" type="search"
                                                    placeholder="Search by name" aria-label="Search" />
                                                <span class="fas fa-search search-box-icon"></span>

                                            </form>
                                        </div>
                                        <select class="form-select w-auto mx-2" id="select-deals">
                                            <option>Deals</option>
                                        </select>
                                        <button class="btn px-3 btn-phoenix-secondary" type="button"
                                            data-bs-toggle="modal" data-bs-target="#reportsFilterModal"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                                class="fa-solid fa-filter text-primary"
                                                data-fa-transform="down-3"></span></button>
                                    </div>
                                </div>
                            </div> --}}
                        <div class="px-4 px-lg-6 scrollbar">
                            <div class="deals">
                                <div class="deals-col me-4">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-sticky top-0 z-1 bg-body">
                                        <div>
                                            <h5 class="mb-2">New</h5>
                                            <p class="fs-9 text-body-tertiary mb-1">Forecast Revenue:</p>
                                            <h4 class="mb-3">$37,000.00</h4>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <button class="btn p-0" type="button" data-bs-toggle="modal"
                                                data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span class="fa-solid fa-plus"></span></button>
                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Add meeting</a></li>
                                                <li><a class="dropdown-item" href="#">See all connected
                                                        contacts</a></li>
                                                <li><a class="dropdown-item" href="#">Clone</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                <li><a class="dropdown-item" href="#">Display only bad deals</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="scrollbar deals-items-container">
                                        <div class="w-100 min-vh-50" data-sortable="data-sortable">
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-1" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-1"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                                    style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 30, 2022<span class="text-body-quaternary"> .
                                                                        2:15 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">Jo_Td01</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Financial
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $14,000.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">
                                                                    Knitkake.inc</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ally
                                                                    Aagaard</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-1">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-info">new</span><span
                                                                    class="badge badge-phoenix badge-phoenix-danger">Urgent</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $14,000.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            Knitkake.inc<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            27-12-2022<span> . 11:19 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option selected="selected">Ally Aagaard
                                                                            </option>
                                                                            <option>Lonnie Kub</option>
                                                                            <option>Aida Moen</option>
                                                                            <option>Niko Koss</option>
                                                                            <option>Alec Haag</option>
                                                                            <option>Ola Smith</option>
                                                                            <option>Leif Walsh</option>
                                                                            <option>Brain Cole</option>
                                                                            <option>Reese Mann</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-info"
                                                                    role="progressbar" style="width: 20%"
                                                                    aria-valuenow="20" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-2" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-2"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                                    style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 29, 2022<span class="text-body-quaternary"> .
                                                                        12:15 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2"><a
                                                                class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">Dimensions for
                                                                Printing</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $23,000.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">
                                                                    Kibikaba Clothings</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Lonnie
                                                                    Kub</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-2">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-info">New</span><span
                                                                    class="badge badge-phoenix badge-phoenix-success">Medium</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $23,000.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            Kibikaba Clothings<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            25-12-2022<span> . 2:00 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option>Ally Aagaard</option>
                                                                            <option selected="selected">Lonnie Kub
                                                                            </option>
                                                                            <option>Aida Moen</option>
                                                                            <option>Niko Koss</option>
                                                                            <option>Alec Haag</option>
                                                                            <option>Ola Smith</option>
                                                                            <option>Leif Walsh</option>
                                                                            <option>Brain Cole</option>
                                                                            <option>Reese Mann</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-info"
                                                                    role="progressbar" style="width: 20%"
                                                                    aria-valuenow="20" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-col me-4">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-sticky top-0 z-1 bg-body">
                                        <div>
                                            <h5 class="mb-2">In Progress</h5>
                                            <p class="fs-9 text-body-tertiary mb-1">Forecast Revenue:</p>
                                            <h4 class="mb-3">$101,300.00</h4>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <button class="btn p-0" type="button" data-bs-toggle="modal"
                                                data-bs-target="#addDealModal" aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span class="fa-solid fa-plus"></span></button>
                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Add meeting</a></li>
                                                <li><a class="dropdown-item" href="#">See all connected
                                                        contacts</a></li>
                                                <li><a class="dropdown-item" href="#">Clone</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                <li><a class="dropdown-item" href="#">Display only bad deals</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="scrollbar deals-items-container">
                                        <div class="w-100 min-vh-50" data-sortable="data-sortable">
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-3" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-3"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2" data-feather="clock"
                                                                    style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 30, 2022<span class="text-body-quaternary"> .
                                                                        06:15 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2">
                                                            <a class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">True and True
                                                                Attorneys</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary" data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Financial
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $33,000.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">PBR
                                                                    Holdings</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Aida
                                                                    Moen</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-3">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-primary">In
                                                                    Progress</span><span
                                                                    class="badge badge-phoenix badge-phoenix-warning">High</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $33,000.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            PBR Holdings<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            27-12-2022<span> . 11:19 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option>Ally Aagaard</option>
                                                                            <option>Lonnie Kub</option>
                                                                            <option selected="selected">Aida Moen
                                                                            </option>
                                                                            <option>Niko Koss</option>
                                                                            <option>Alec Haag</option>
                                                                            <option>Ola Smith</option>
                                                                            <option>Leif Walsh</option>
                                                                            <option>Brain Cole</option>
                                                                            <option>Reese Mann</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-primary"
                                                                    role="progressbar" style="width: 40%"
                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-4" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-4"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2"
                                                                    data-feather="clock" style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 30, 2022<span class="text-body-quaternary"> .
                                                                        08:20 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2">
                                                            <a class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">The Morlong
                                                                Corporation</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary"
                                                                    data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $45,300.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">
                                                                    Giraffes Studio</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Niko
                                                                    Koss</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-4">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-primary">In
                                                                    Progress</span><span
                                                                    class="badge badge-phoenix badge-phoenix-info">Low</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $45,300.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            Giraffes Studio<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            26-12-2022<span> . 12:10 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option>Ally Aagaard</option>
                                                                            <option>Lonnie Kub</option>
                                                                            <option>Aida Moen</option>
                                                                            <option selected="selected">Niko Koss
                                                                            </option>
                                                                            <option>Alec Haag</option>
                                                                            <option>Ola Smith</option>
                                                                            <option>Leif Walsh</option>
                                                                            <option>Brain Cole</option>
                                                                            <option>Reese Mann</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-primary"
                                                                    role="progressbar" style="width: 40%"
                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-5" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-5"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2"
                                                                    data-feather="clock" style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 30, 2022<span class="text-body-quaternary"> .
                                                                        3:25 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2">
                                                            <a class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">Product
                                                                List</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary"
                                                                    data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $23,000.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Birds
                                                                    eye</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Alec
                                                                    Haag</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-5">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-primary">In
                                                                    Progress</span><span
                                                                    class="badge badge-phoenix badge-phoenix-danger">Urgent</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $23,000.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            Birds eye<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            27-12-2022<span> . 11:19 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option>Ally Aagaard</option>
                                                                            <option>Lonnie Kub</option>
                                                                            <option>Aida Moen</option>
                                                                            <option>Niko Koss</option>
                                                                            <option selected="selected">Alec Haag
                                                                            </option>
                                                                            <option>Ola Smith</option>
                                                                            <option>Leif Walsh</option>
                                                                            <option>Brain Cole</option>
                                                                            <option>Reese Mann</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-primary"
                                                                    role="progressbar" style="width: 40%"
                                                                    aria-valuenow="40" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-col me-4">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-sticky top-0 z-1 bg-body">
                                        <div>
                                            <h5 class="mb-2">Pending</h5>
                                            <p class="fs-9 text-body-tertiary mb-1">Forecast Revenue:</p>
                                            <h4 class="mb-3">$23,400.00</h4>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <button class="btn p-0" type="button" data-bs-toggle="modal"
                                                data-bs-target="#addDealModal" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fa-solid fa-plus"></span></button>
                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Add meeting</a></li>
                                                <li><a class="dropdown-item" href="#">See all connected
                                                        contacts</a></li>
                                                <li><a class="dropdown-item" href="#">Clone</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                <li><a class="dropdown-item" href="#">Display only bad
                                                        deals</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="scrollbar deals-items-container">
                                        <div class="w-100 min-vh-50" data-sortable="data-sortable">
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-6" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-6"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2"
                                                                    data-feather="clock" style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 30, 2022<span class="text-body-quaternary"> .
                                                                        3:15 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2">
                                                            <a class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">Printing
                                                                Services by Feltz</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary"
                                                                    data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $23,400.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ant
                                                                    Family</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ally
                                                                    Aagaard</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-6">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-warning">Pending</span><span
                                                                    class="badge badge-phoenix badge-phoenix-warning">High</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $23,400.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            Ant Family<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            27-12-2022<span> . 11:19 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option selected="selected">Ally Aagaard
                                                                            </option>
                                                                            <option>Lonnie Kub</option>
                                                                            <option>Aida Moen</option>
                                                                            <option>Niko Koss</option>
                                                                            <option>Alec Haag</option>
                                                                            <option>Ola Smith</option>
                                                                            <option>Leif Walsh</option>
                                                                            <option>Brain Cole</option>
                                                                            <option>Reese Mann</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-warning"
                                                                    role="progressbar" style="width: 60%"
                                                                    aria-valuenow="60" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-col me-4">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-sticky top-0 z-1 bg-body">
                                        <div>
                                            <h5 class="mb-2">Canceled</h5>
                                            <p class="fs-9 text-body-tertiary mb-1">Forecast Revenue:</p>
                                            <h4 class="mb-3">$260.00</h4>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <button class="btn p-0" type="button" data-bs-toggle="modal"
                                                data-bs-target="#addDealModal" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fa-solid fa-plus"></span></button>
                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Add meeting</a></li>
                                                <li><a class="dropdown-item" href="#">See all connected
                                                        contacts</a></li>
                                                <li><a class="dropdown-item" href="#">Clone</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                <li><a class="dropdown-item" href="#">Display only bad
                                                        deals</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="scrollbar deals-items-container">
                                        <div class="w-100 min-vh-50" data-sortable="data-sortable">
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-7" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-7"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2"
                                                                    data-feather="clock" style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 31, 2022<span class="text-body-quaternary"> .
                                                                        01:30 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2">
                                                            <a class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">SP Flat
                                                                Plate</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary"
                                                                    data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Financial
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $14,000.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ant
                                                                    Family</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ola
                                                                    Smith</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-7">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-secondary">Canceled</span><span
                                                                    class="badge badge-phoenix badge-phoenix-success">Medium</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $14,000.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            Ant Family<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            29-12-2022<span> . 01:30 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option>Ally Aagaard</option>
                                                                            <option>Lonnie Kub</option>
                                                                            <option>Aida Moen</option>
                                                                            <option>Niko Koss</option>
                                                                            <option>Alec Haag</option>
                                                                            <option selected="selected">Ola Smith
                                                                            </option>
                                                                            <option>Leif Walsh</option>
                                                                            <option>Brain Cole</option>
                                                                            <option>Reese Mann</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-300"
                                                                    role="progressbar" style="width: 80%"
                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-8" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-8"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2"
                                                                    data-feather="clock" style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 31, 2022<span class="text-body-quaternary"> .
                                                                        2:15 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2">
                                                            <a class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">Ventilated
                                                                Pipe</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary"
                                                                    data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $14,000.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">
                                                                    Giraffes Studio</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Leif
                                                                    Walsh</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-8">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-secondary">Canceled</span><span
                                                                    class="badge badge-phoenix badge-phoenix-info">Low</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $14,000.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            Giraffes Studio<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            29-12-2022<span> . 02:15 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option>Ally Aagaard</option>
                                                                            <option>Lonnie Kub</option>
                                                                            <option>Aida Moen</option>
                                                                            <option>Niko Koss</option>
                                                                            <option>Alec Haag</option>
                                                                            <option>Ola Smith</option>
                                                                            <option selected="selected">Leif Walsh
                                                                            </option>
                                                                            <option>Brain Cole</option>
                                                                            <option>Reese Mann</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-300"
                                                                    role="progressbar" style="width: 80%"
                                                                    aria-valuenow="80" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="deals-col me-4">
                                    <div
                                        class="d-flex align-items-center justify-content-between position-sticky top-0 z-1 bg-body">
                                        <div>
                                            <h5 class="mb-2">Completed</h5>
                                            <p class="fs-9 text-body-tertiary mb-1">Forecast Revenue:</p>
                                            <h4 class="mb-3">$1,650.00</h4>
                                        </div>
                                        <div class="d-flex gap-3">
                                            <button class="btn p-0" type="button" data-bs-toggle="modal"
                                                data-bs-target="#addDealModal" aria-haspopup="true"
                                                aria-expanded="false" data-bs-reference="parent"><span
                                                    class="fa-solid fa-plus"></span></button>
                                            <button class="btn p-0" type="button" data-bs-toggle="dropdown"
                                                data-boundary="window" aria-haspopup="true" aria-expanded="false"
                                                data-bs-reference="parent"><span
                                                    class="fas fa-ellipsis-h fs-10"></span></button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Add meeting</a></li>
                                                <li><a class="dropdown-item" href="#">See all connected
                                                        contacts</a></li>
                                                <li><a class="dropdown-item" href="#">Clone</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                                <li><a class="dropdown-item" href="#">Display only bad
                                                        deals</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="scrollbar deals-items-container">
                                        <div class="w-100 min-vh-50" data-sortable="data-sortable">
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-9" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-9"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2"
                                                                    data-feather="clock" style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 29, 2022<span class="text-body-quaternary"> .
                                                                        03:12 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2">
                                                            <a class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">Product
                                                                Shipping</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary"
                                                                    data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Financial
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $15,000.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Birds
                                                                    eye</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Brain
                                                                    Cole</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-9">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-success">Completed</span><span
                                                                    class="badge badge-phoenix badge-phoenix-danger">Urgent</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $15,000.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            Birds eye<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            27-12-2022<span> . 11:19 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option>Ally Aagaard</option>
                                                                            <option>Lonnie Kub</option>
                                                                            <option>Aida Moen</option>
                                                                            <option>Niko Koss</option>
                                                                            <option>Alec Haag</option>
                                                                            <option>Ola Smith</option>
                                                                            <option>Leif Walsh</option>
                                                                            <option selected="selected">Brain Cole
                                                                            </option>
                                                                            <option>Reese Mann</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-success"
                                                                    role="progressbar" style="width: 100%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-10" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-10"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2"
                                                                    data-feather="clock" style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 29, 2022<span class="text-body-quaternary"> .
                                                                        06:15 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2">
                                                            <a class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">Product
                                                                List</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary"
                                                                    data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Financial
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $33,00.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ink
                                                                    Incorporated</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Reese
                                                                    Mann</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-10">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-success">Completed</span><span
                                                                    class="badge badge-phoenix badge-phoenix-info">Low</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $33,00.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            Ink Incorporated<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            28-12-2022<span> . 12:20 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option>Ally Aagaard</option>
                                                                            <option>Lonnie Kub</option>
                                                                            <option>Aida Moen</option>
                                                                            <option>Niko Koss</option>
                                                                            <option>Alec Haag</option>
                                                                            <option>Ola Smith</option>
                                                                            <option>Leif Walsh</option>
                                                                            <option>Brain Cole</option>
                                                                            <option selected="selected">Reese Mann
                                                                            </option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-success"
                                                                    role="progressbar" style="width: 100%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="card mb-3">
                                                    <div class="card-body"><a
                                                            class="dropdown-indicator-icon position-absolute text-body-tertiary"
                                                            href="#collapseWidthDeals-11" role="button"
                                                            data-bs-toggle="collapse" aria-expanded="false"
                                                            aria-controls="collapseWidthDeals-11"><span
                                                                class="fa-solid fa-angle-down"></span></a>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mb-3">
                                                            <div class="d-flex"><span class="me-2"
                                                                    data-feather="clock" style="stroke-width:2;"></span>
                                                                <p class="mb-0 fs-9 fw-semibold text-body-tertiary date">
                                                                    Dec 29, 2022<span class="text-body-quaternary"> .
                                                                        2:15 PM</span></p>
                                                            </div>
                                                        </div>
                                                        <div class="deals-items-head d-flex align-items-center mb-2">
                                                            <a class="text-primary fw-bold line-clamp-1 me-3 mb-0 fs-7"
                                                                href="../../apps/crm/deal-details.html">Dimensions for
                                                                Printing</a>
                                                            <p class="deals-category fs-10 mb-0 mt-1 d-none"><span
                                                                    class="me-1 text-body-quaternary"
                                                                    data-feather="grid"
                                                                    style="stroke-width:2; height: 12px; width: 12px"></span>Marketplace
                                                            </p>
                                                            <p
                                                                class="ms-auto fs-9 text-body-emphasis fw-semibold mb-0 deals-revenue">
                                                                $23,400.00</p>
                                                        </div>
                                                        <div class="deals-company-agent d-flex flex-between-center">
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-user me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Slim
                                                                    Apes</p>
                                                            </div>
                                                            <div class="d-flex align-items-center"><span
                                                                    class="uil uil-headphones me-2"></span>
                                                                <p class="text-body-secondary fw-bold fs-9 mb-0">Ally
                                                                    Aagaard</p>
                                                            </div>
                                                        </div>
                                                        <div class="collapse" id="collapseWidthDeals-11">
                                                            <div class="d-flex gap-2 mb-5"><span
                                                                    class="badge badge-phoenix badge-phoenix-success">Completed</span><span
                                                                    class="badge badge-phoenix badge-phoenix-danger">Urgent</span>
                                                            </div>
                                                            <table class="mb-4 w-100 table-stats table-stats">
                                                                <tr>
                                                                    <th></th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="dollar-sign"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Expected Revenue</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            $23,400.00</p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="user"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Company Name</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis d-flex align-items-center gap-2">
                                                                            Slim Apes<a href="#!"> <span
                                                                                    class="fa-solid fa-square-phone text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fa-solid fa-square-envelope text-body-tertiary"></span></a><a
                                                                                href="#!"> <span
                                                                                    class="fab fa-whatsapp-square text-body-tertiary"></span></a>
                                                                        </p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="calendar"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Closing Date &amp; Time</p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <p
                                                                            class="ps-6 ps-sm-0 fw-semibold fs-9 mb-0 mb-0 pb-3 pb-sm-0 text-body-emphasis">
                                                                            28-12-2022<span> . 02:19 PM</span></p>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="py-1">
                                                                        <div class="d-flex align-items-center"><span
                                                                                class="me-2 text-body-tertiary"
                                                                                data-feather="headphones"
                                                                                style="width:16px; height:16px"></span>
                                                                            <p
                                                                                class="fw-semibold fs-9 mb-0 text-body-tertiary">
                                                                                Assigned Agent </p>
                                                                        </div>
                                                                    </td>
                                                                    <td class="py-1 d-none d-sm-block pe-sm-2">:</td>
                                                                    <td class="py-1">
                                                                        <select
                                                                            class="form-select form-select-sm py-0 ms-n3 border-0 shadow-none">
                                                                            <option selected="selected">Ally Aagaard
                                                                            </option>
                                                                            <option>Lonnie Kub</option>
                                                                            <option>Aida Moen</option>
                                                                            <option>Niko Koss</option>
                                                                            <option>Alec Haag</option>
                                                                            <option>Ola Smith</option>
                                                                            <option>Leif Walsh</option>
                                                                            <option>Brain Cole</option>
                                                                            <option>Reese Mann</option>
                                                                        </select>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                            <p class="fs-9 mb-1"> Probability:</p>
                                                            <div class="progress" style="height:8px">
                                                                <div class="progress-bar rounded-pill bg-success"
                                                                    role="progressbar" style="width: 100%"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}
                    </div>
                    <!--======================================
                                        End Advanced AREA
                                    ======================================-->
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-xxl-12">

            <!-- this is the Add Attachement Modal for events -->
            <div class="modal fade" id="addProjectAttachementModal" tabindex="-1" data-bs-backdrop="static"
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

                            <input type="hidden" id="model_id" name="model_id" value="{{ $projectData->id }}">
                            <input type="hidden" id="employee_id" name="employee_id" value="0">
                            <input type="hidden" name="model_name" value="project">
                            <input type="hidden" name="table" value="global_file_table">

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

            <div class="modal fade" id="progressModal" tabindex="-1" data-bs-backdrop="static"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-top">
                    <div class="modal-content bg-100">
                        <div class="modal-header bg-modal-header">
                            <h3 class=" text-white mb-0" id="staticBackdropLabel">Change Propgress %</h3>
                            <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                                    class="fas fa-times fs--1 text-danger"></span></button>
                        </div>
                        <form class="needs-validation" novalidate="" action="" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="modal-body px-0">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <input type="hidden" id="editId" name="id">
                                            <input type="hidden" id="editEventId" name="event_id">
                                            <div class="mb-4">
                                                <label class="text-1000 fw-bold mb-2">Name</label>
                                                <input class="form-control" type="number" max="100"
                                                    min="0" name="prorgress_number" id="editPoregessNumber"
                                                    required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-outline-danger" type="button"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- this is the Add Event Notes Modal -->
            <div class="modal fade" id="addEventNoteModal" tabindex="-1" data-bs-backdrop="static"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content bg-100">
                        <div class="modal-header bg-modal-header">
                            <h3 class=" text-white mb-0" id="staticBackdropLabel">Add note</h3>
                            <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                                    class="fas fa-times fs--1 text-danger"></span></button>
                        </div>
                        <form class="needs-validation" novalidate="" action="" method="POST">
                            @csrf
                            <div class="modal-body">
                                <div class="modal-body px-0">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <input type="hidden" id="addId" name="event_id"
                                                value="{{ $projectData->id }}">
                                            <div class="mb-4">
                                                <label class="text-1000 fw-bold mb-2">Name</label>
                                                <textarea class="form-control mb-3" id="notes" name="note_text" rows="4"> </textarea>

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
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Modal to show the overview of the task and notes and attachment with tasks and  -->

        </div>
    </div>
@endsection

@push('script')
    @include('projects.admin.partials.charts-js')

    <script src="{{ asset('assets/jquery/dist/jquery.form.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/project/admin/projects.js') }}"></script>

    <script>
        $("#taskTab").click(function(e) {
            e.preventDefault();
            console.log('taskTab')
            $("#task_table").bootstrapTable("refresh");
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {

            // var id = $('#addId').val();
            $('#fileUploadForm').ajaxForm({
                beforeSend: function() {
                    var percentage = '0';

                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentage = percentComplete;
                    $('.progress .progress-bar').css("width", percentage + '%', function() {
                        return $(this).attr("aria-valuenow", percentage) + "%";
                    })
                },
                complete: function(xhr) {
                    console.log('File has uploaded: ' + "");
                    window.location.href = "";
                }
            });

            $('#taskFileUploadForm').ajaxForm({
                beforeSend: function() {
                    var percentage = '0';
                    console.log('File has uploaded: ' + "");

                },
                uploadProgress: function(event, position, total, percentComplete) {
                    var percentage = percentComplete;
                    $('.progress .progress-bar').css("width", percentage + '%', function() {
                        return $(this).attr("aria-valuenow", percentage) + "%";
                    })
                },
                complete: function(xhr) {
                    console.log('File has uploaded: ' + "");
                    window.location.href = "";
                }
            });

            $('#dataList').DataTable({
                "lengthChange": false,
                "paging": false,
                // "order": [
                //     [0, "asc"]
                // ],
                // dom: 'Bfrtip',
                // buttons: [
                //     'copyHtml5',
                //     'excelHtml5',
                //     'csvHtml5',
                //     'pdf',
                //     // 'colvis'
                // ]
                // buttons: [{
                //     extend: 'collection',
                //     text: 'Export',
                //     buttons: [{
                //             extend: 'copyHtml5',
                //             exportOptions: {
                //                 columns: [0, ':visible']
                //             }
                //         },
                //         {
                //             extend: 'excelHtml5',
                //             exportOptions: {
                //                 columns: ':visible'
                //             }
                //         },
                //         {
                //             extend: 'csvHtml5',
                //             exportOptions: {
                //                 columns: ':visible'
                //             }
                //         },
                //         {
                //             extend: 'pdfHtml5',
                //             exportOptions: {
                //                 columns: [0, 1, 2, 5]
                //             }
                //         },
                //         'colvis'
                //     ],
                // }]
            });

        });
    </script>
    @include('tracki.partials.event-js')
@endpush
