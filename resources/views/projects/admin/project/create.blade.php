@extends('projects.admin.layout.admin_template')
@section('main')
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active">Default</li>
        </ol>
    </nav>
    <h2 class="mb-4">Create a project</h2>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <div class="row">
        <div class="col-xl-12">
            <form class="row g-3 mb-6 px-3 needs-validation" novalidate="" action="{{ route('project.store') }}"
                method="POST">
                @csrf
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating">
                        <input class="form-control @error('name') is-invalid @enderror" name="name"
                            id="floatingInputGrid" type="text" placeholder="Project title" value="{{ old('name') }}" />
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="floatingInputGrid">Project title</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating">
                        <select name="functional_area_id" class="form-select">
                            <option selected="selected" value="">Select...</option>
                            @foreach ($functional_areas as $key => $item)
                                @if (Request::old('id') == $item->id)
                                    <option value="{{ $item->id }}" selected>
                                        {{ $item->name }}
                                    </option>
                                @else
                                    <option value="{{ $item->id }}">
                                        {{ $item->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        <label for="floatingSelectTask">Functional Area</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-floating">
                        <select name="project_type_id" class="form-select  @error('project_type_id') is-invalid @enderror"
                            id="add_project_project_type">
                            <option selected="selected" value="">Select...</option>
                            @foreach ($project_type as $key => $item)
                                @if (Request::old('id') == $item->id)
                                    <option value="{{ $item->id }}" selected>
                                        {{ $item->name }}
                                    </option>
                                @else
                                    <option value="{{ $item->id }}">
                                        {{ $item->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        @error('project_type_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="floatingSelectPrivacy">Project type</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-floating">
                        <select name="use_project_template" class="form-select">
                            <option selected="selected" value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                        <label for="floatingSelectTask">Use Project Template</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-floating">
                        <select name="category_id" class="form-select" id="add_project_category">
                            <option selected="selected" value="">Select...</option>
                            @foreach ($event_category as $key => $item)
                                @if (Request::old('id') == $item->id)
                                    <option value="{{ $item->id }}" selected>
                                        {{ $item->name }}
                                    </option>
                                @else
                                    <option value="{{ $item->id }}">
                                        {{ $item->name }}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                        <label for="floatingSelectTeam">Category </label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-floating">
                        <select name="client_id" class="form-select" id="add_project_client">
                            <option selected="selected" value="">Select...</option>
                            @foreach ($clients as $key => $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->first_name . ' ' . $item->last_name }}
                                </option>
                            @endforeach
                        </select>
                        <label for="floatingSelectAdmin">Cleint</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="flatpickr-input-container">
                        <div class="form-floating">
                            <input class="form-control datetimepicker" id="floatingInputStartDate" type="date"
                                placeholder="dd/mm/yyyy" placeholder="start date" name="start_date"
                                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                            <label class="ps-6" for="floatingInputStartDate">Start date</label><span
                                class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="flatpickr-input-container">
                        <div class="form-floating">
                            <input class="form-control datetimepicker" id="floatingInputDeadline" type="date"
                                placeholder="dd/mm/yyyy" placeholder="deadline" name="end_date"
                                data-options='{"disableMobile":true,"dateFormat":"d/m/Y"}' />
                            <label class="ps-6" for="floatingInputDeadline">Deadline</label><span
                                class="uil uil-calendar-alt flatpickr-icon text-body-tertiary"></span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating form-floating-advance-select">
                        <label>Add Tags</label>
                        <select name="tag_id[]" class="form-select" id="organizerMultiple" data-choices="data-choices"
                            multiple="multiple" data-options='{"removeItemButton":true,"placeholder":true}'>
                            @foreach ($tags as $key => $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->title }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-12 gy-3">
                    <div class="form-floating">
                        <textarea class="form-control  @error('description') is-invalid @enderror" name="description" id="floatingProjectOverview" placeholder="Leave a comment here"
                            style="height: 100px">{{ old('description') }}</textarea>
                            @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <label for="floatingProjectOverview">project overview</label>
                    </div>
                </div>

                <div class="col-md-4 gy-3">
                    <div class="form-floating">
                        <input name="budget_allocation" class="form-control" id="edit_project_budget_allocation"
                            type="number" step="0.01" placeholder="Budget" value="0" />
                        <label for="floatingInputBudget">Cost</label>
                    </div>
                </div>
                <div class="col-md-4 gy-3">
                    <div class="form-floating">
                        <input name="total_sales" class="form-control" id="floatingInputBudget" type="number"
                            step="0.01" placeholder="Budget" value="0" />
                        <label for="floatingInputBudget">Sales</label>
                    </div>
                </div>
                <div class="col-md-4 gy-3">
                    <div class="form-floating">
                        <input name="sales_margin" class="form-control" id="floatingInputBudget" type="number"
                            step="0.01" placeholder="Budget" value="0" />
                        <label for="floatingInputBudget">Sales Margin</label>
                    </div>
                </div>
                <div class="col-12 gy-3">
                    <div class="form-floating form-floating-advance-select">
                        <label>Add Resources</label>
                        <select name="assignment_to_id[]" class="form-select" id="organizerMultiple"
                            data-choices="data-choices" multiple="multiple"
                            data-options='{"removeItemButton":true,"placeholder":true}'>
                            @foreach ($employees as $key => $item)
                                <option value="{{ $item->id }}">
                                    {{ $item->full_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-12 gy-3">
                    <div class="row g-3 justify-content-end">
                        <a href="{{ route('projects.admin.project') }}" class="col-auto">
                            <button type="button" class="btn btn-phoenix-danger px-5" data-bs-toggle="tooltip"
                                data-bs-placement="right">
                                Cancel
                            </button>
                        </a>
                        <div class="col-auto">
                            <button class="btn btn-primary px-5 px-sm-15">Create Project</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('script')
    <script src="{{ asset('assets/js/pages/project/admin/projects.js') }}"></script>
@endpush
