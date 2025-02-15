@extends('procurement.admin.layout.admin_template')
@section('main')

<div class="container-fluid">


    <div class="d-flex justify-content-between mb-2 mt-2">
        <div class="d-flex justify-content-between m-2">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="{{route('hr.admin.dashboard')}}"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item"><a href="{{route('general.settings.company')}}">
                                <?= get_label('settings', 'Settings') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            All purchase Orders ({{ $purchases->count() }})
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div id="cover-spin" style="display:none;" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
        <div>
            <a href="javascript:void(0)" data-table="purchase_table" id="offcanvas-add-purchase" data-id="0">
                <button type="button" class="btn btn-primary px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                    data-bs-original-title=" <?= get_label('add_new_purchase', 'Add new purchase order') ?>">
                    <i class="fa-solid fa-plus me-2"></i>Add new purchase order
                </button>
            </a>
        </div>
    </div>

    <x-procurement.purchase.admin-purchase-card />
</div>
@include('procurement.admin.partials.purchase_modal')

@endsection

@push('script')
<script src="{{ asset('assets/js/pages/procurement/admin/purchase.js') }}"></script>
@endpush