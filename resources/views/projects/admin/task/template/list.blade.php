@extends('projects.admin.layout.admin_template')
@section('main')


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->


<div class="container-fluid">
    <div class="mb-2">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="{{route('hr.admin.employee')}}"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                        <?= get_label('employees', 'Task Template') ?>
                    </li>

                </ol>
            </nav>
        </div>
        <div class="d-flex justify-content-center">
            <div id="cover-spin" style="display:none;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
    <div class="row g-3 align-items-sm-center justify-content-between mb-5">
        <div class="col-sm">
            <div class="theme-wizard flight-booking-wizard" style="width: 18.125rem">
                <h2>Task Templates</h2>
            </div>
        </div>
        <div class="col-sm text-sm-end">
            <a href="javascript:void(0)" id="add_task_template" data-action="store" data-source="manage" data-type="add" data-table="task_table" data-id="0">
                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_task_tmeplate', 'Create task template') ?>">
                    <i class="bx bx-plus"></i>
                </button>
            </a>
        </div>
    </div>
    <x-admin-tasks-template-card projectId="" />
</div>

<script src="{{asset('assets/js/pages/project/admin/task_template.js')}}"></script>

@endsection

@push('script')


@endpush