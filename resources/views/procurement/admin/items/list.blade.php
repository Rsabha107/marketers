@extends('procurement.admin.layout.admin_template')
@section('main')
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->

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
                                <?= get_label('product', 'Product') ?>
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
                <a href="javascript:void(0)" data-table="item_master_table" id="offcanvas-add-item-master">
                    <button type="button" class="btn btn-primary px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-original-title=" <?= get_label('add_product', 'Add Product') ?>">
                        <i class="fa-solid fa-plus me-2"></i>Add Product
                    </button>
                </a>
            </div>
        </div>


            {{-- <div class="mb-2">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1">
                    <li class="breadcrumb-item">
                        <a href="{{route('hr.admin.employee')}}"><?= get_label('home', 'Home') ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                        <?= get_label('products', 'Porducts') ?>
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
                <h4>Products</h4>
            </div>
        </div>
        <div class="col-12 col-sm-auto">
            <div class="d-flex align-items-center">
                <a href="javascript:void(0)" data-table="item_master_table" id="offcanvas-add-item-master" data-id="0">
                    <button type="button" class="btn btn-primary px-5" data-bs-toggle="tooltip" data-bs-placement="right"
                        data-bs-original-title=" <?= get_label('add_product', 'Add Product') ?>">
                        <i class="fa-solid fa-plus me-2"></i>Add Product
                    </button>
                </a>
            </div>
        </div>
    </div> --}}
            @include('procurement.admin.partials.item_modal')
            <x-procurement.items.admin-item-master-card projectId="" />
        </div>

        <script src="{{ asset('assets/js/pages/procurement/admin/item_master.js') }}"></script>
    @endsection

    @push('script')
    @endpush
