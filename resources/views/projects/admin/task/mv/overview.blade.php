<script src="{{ asset('fnx/assets/js/phoenix.js') }}"></script>
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/bootstrap-table.min.css" rel="stylesheet"> --}}
<script src="{{ asset('assets/vendors/bootstrap-table-master/dist/bootstrap-table.min.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>

{{-- <input type="hidden" id="edit_task_id_h" name="id" value="{{ $task->id }}">
<input type="hidden" id="edit_task_table_h" name="table" value="task_table">
<input type="hidden" id="edit_task_event_id" name="project_id" value="{{ $task->project_id }}"> --}}

<div class="card">
    <div class="card-header d-flex flex-wrap align-items-start mb-3 border-bottom">
        <h5 class="mb-0 fs-sm me-4">{{ $task->name }}</h5>
        <span
            class="badge badge-phoenix fs--2 badge-phoenix-{{ $task->status->color }} mb-4">{{ $task->status->title }}</span>
    </div>
    <div class="card-body">
        <section class="py-0">

            <div class="container">
                <ul class="nav nav-underline fs-9 mb-4" id="productTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab"
                            href="#tab-description" role="tab" aria-controls="tab-description"
                            aria-selected="true">Description</a></li>
                    <li class="nav-item"><a class="nav-link" id="file-tab" data-bs-toggle="tab" href="#tab-file"
                            role="tab" aria-controls="tab-file" aria-selected="false">Attachments</a></li>
                    <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#tab-reviews"
                            role="tab" aria-controls="tab-reviews" aria-selected="false">Ratings &amp; reviews</a>
                    </li>
                </ul>
                <div class="row gx-3 gy-7">
                    <div class="col-12 col-lg-7 col-xl-8">
                        <div class="tab-content" id="productTabContent">
                            <div class="tab-pane pe-lg-6 pe-xl-12 fade show active text-body-emphasis"
                                id="tab-description" role="tabpanel" aria-labelledby="description-tab">
                                <p class="mb-5">{{ $task->description }}</p>
                                <div class="row g-2 mb-2">
                                    <div class="col-auto"><a href="javascript:void(0)" data-gallery="gallery-0"><img
                                                src="{{ asset('assets/img/e-commerce/review-11.jpg') }}" alt=""
                                                height="164" /></a></div>
                                    <div class="col-auto"><a href="javascript:void(0)" data-gallery="gallery-0"><img
                                                src="{{ asset('assets/img/e-commerce/review-12.jpg') }}" alt=""
                                                height="164" /></a></div>
                                    <div class="col-auto"><a href="javascript:void(0)" data-gallery="gallery-0"><img
                                                src="{{ asset('assets/img/e-commerce/review-13.jpg') }}" alt=""
                                                height="164" /></a></div>
                                </div>
                            </div>

                            <div class="tab-pane pe-lg-6 pe-xl-12 fade" id="tab-file" role="tabpanel"
                                aria-labelledby="file-tab">
                                <div class="mb-2">
                                    <div class="row align-items-center justify-content-between g-3 mt-2 ms-2">
                                        <div class="col-12 col-md-auto d-flex">
                                            @if (Auth::user()->can('task.file.create'))
                                                <a href="#!" id="add_task_file" data-id="{{ $task->id }}"
                                                    data-table="task_file_table" data-modal="Y"
                                                    class="btn btn-phoenix-primary px-3 px-sm-5 me-2"
                                                    {{-- data-bs-toggle="modal"  --}} {{-- data-bs-target="#addTaskAttachementModal" --}} aria-haspopup="true"
                                                    aria-expanded="false" data-bs-reference="parent"><span
                                                        class="fas fa-file-upload me-sm-2"></span><span
                                                        class="d-none d-sm-inline">Upload a new file</span></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <x-projects.admin-tasks-attachment-card :projectId="$task->id" />
                            </div>
                            <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="bg-body-emphasis rounded-3 p-4 border border-translucent">
                                    <div class="row g-3 justify-content-between mb-4">
                                        <div class="col-auto">
                                            <div class="d-flex align-items-center flex-wrap">
                                                <h2 class="fw-bolder me-3">4.9<span
                                                        class="fs-8 text-body-quaternary fw-bold">/5</span></h2>
                                                <div class="me-3"><span
                                                        class="fa fa-star text-warning fs-6"></span><span
                                                        class="fa fa-star text-warning fs-6"></span><span
                                                        class="fa fa-star text-warning fs-6"></span><span
                                                        class="fa fa-star text-warning fs-6"></span><span
                                                        class="fa fa-star-half-alt star-icon text-warning fs-6"></span>
                                                </div>
                                                <p class="text-body mb-0 fw-semibold fs-7">6548 ratings and 567 reviews
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <button class="btn btn-primary rounded-pill" data-bs-toggle="modal"
                                                data-bs-target="#reviewModal">Rate this product</button>
                                            <div class="modal fade" id="reviewModal" tabindex="-1"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content p-4">
                                                        <div class="d-flex flex-between-center mb-2">
                                                            <h5 class="modal-title fs-8 mb-0">Your rating</h5>
                                                            <button class="btn p-0 fs-10">Clear</button>
                                                        </div>

                                                        <div class="mb-3">
                                                            <h5 class="text-body-highlight mb-3">Your review</h5>
                                                            <textarea class="form-control" id="reviewTextarea" rows="5" placeholder="Write your review"> </textarea>
                                                        </div>
                                                        <div class="dropzone dropzone-multiple p-0 mb-3"
                                                            id="my-awesome-dropzone" data-dropzone>
                                                            <div class="fallback">
                                                                <input name="file" type="file" multiple>
                                                            </div>
                                                            <div class="dz-preview d-flex flex-wrap">
                                                                <div class="border border-translucent bg-body-emphasis rounded-3 d-flex flex-center position-relative me-2 mb-2"
                                                                    style="height:80px;width:80px;"><img
                                                                        class="dz-image"
                                                                        src="../../../assets/img/products/23.png"
                                                                        alt="..." data-dz-thumbnail><a
                                                                        class="dz-remove text-body-quaternary"
                                                                        href="#!" data-dz-remove><span
                                                                            data-feather="x"></span></a></div>
                                                            </div>
                                                            <div class="dz-message text-body-tertiary text-opacity-85 fw-bold fs-9 p-4"
                                                                data-dz-message>
                                                                Drag your photo here <span
                                                                    class="text-body-secondary">or
                                                                </span>
                                                                <button class="btn btn-link p-0">Browse from device
                                                                </button><br><img class="mt-3 me-2"
                                                                    src="../../../assets/img/icons/image-icon.png"
                                                                    width="24" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="d-sm-flex flex-between-center">
                                                            <div class="form-check flex-1">
                                                                <input class="form-check-input" id="reviewAnonymously"
                                                                    type="checkbox" value="" checked="">
                                                                <label
                                                                    class="form-check-label mb-0 text-body-emphasis fw-semibold"
                                                                    for="reviewAnonymously">Review anonymously</label>
                                                            </div>
                                                            <button class="btn ps-0"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button
                                                                class="btn btn-primary rounded-pill">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="text-body-secondary ms-1"> by</span> Zingko Kudobum
                                            </h5>
                                            <div class="btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-body-tertiary fs-9 mb-1">35 mins ago</p>
                                        <p class="text-body-highlight mb-3">100% satisfied</p>
                                        <div class="row g-2 mb-2">
                                            <div class="col-auto"><a
                                                    href="../../../assets/img/e-commerce/review-11.jpg"
                                                    data-gallery="gallery-0"><img
                                                        src="../../../assets/img/e-commerce/review-11.jpg"
                                                        alt="" height="164" /></a></div>
                                            <div class="col-auto"><a
                                                    href="../../../assets/img/e-commerce/review-12.jpg"
                                                    data-gallery="gallery-0"><img
                                                        src="../../../assets/img/e-commerce/review-12.jpg"
                                                        alt="" height="164" /></a></div>
                                            <div class="col-auto"><a
                                                    href="../../../assets/img/e-commerce/review-13.jpg"
                                                    data-gallery="gallery-0"><img
                                                        src="../../../assets/img/e-commerce/review-13.jpg"
                                                        alt="" height="164" /></a></div>
                                        </div>
                                        <div class="d-flex"><span class="fas fa-reply fa-rotate-180 me-2"></span>
                                            <div>
                                                <h5>Respond from store<span class="text-body-tertiary fs-9 ms-2">5 mins
                                                        ago</span></h5>
                                                <p class="text-body-highlight mb-0">Thank you for your valuable
                                                    feedback</p>
                                            </div>
                                        </div>
                                        <div class="hover-actions top-0">
                                            <button class="btn btn-sm btn-phoenix-secondary me-2"><span
                                                    class="fas fa-thumbs-up"></span></button>
                                            <button class="btn btn-sm btn-phoenix-secondary me-1"><span
                                                    class="fas fa-thumbs-down"></span></button>
                                        </div>
                                    </div>
                                    <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa-regular fa-star text-warning-light"
                                                    data-bs-theme="light"></span><span
                                                    class="text-body-secondary ms-1">
                                                    by</span> Piere Auguste Renoir
                                            </h5>
                                            <div class="btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-body-tertiary fs-9 mb-1">23 Oct, 12:09 PM</p>
                                        <p class="text-body-highlight mb-1">Since the spring loaded event, I've been
                                            wanting an iMac, and it's exceeded my expectations. The screen is clear, the
                                            colors are vibrant (I got the blue one! ), and the performance is more than
                                            adequate for my needs as a college student. That's how good it is.</p>
                                        <div class="hover-actions top-0">
                                            <button class="btn btn-sm btn-phoenix-secondary me-2"><span
                                                    class="fas fa-thumbs-up"></span></button>
                                            <button class="btn btn-sm btn-phoenix-secondary me-1"><span
                                                    class="fas fa-thumbs-down"></span></button>
                                        </div>
                                    </div>
                                    <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star-half-alt star-icon text-warning"></span><span
                                                    class="fa-regular fa-star text-warning-light"
                                                    data-bs-theme="light"></span><span
                                                    class="text-body-secondary ms-1">
                                                    by</span> Abel Kablmann
                                            </h5>
                                            <div class="btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-body-tertiary fs-9 mb-1">21 Oct, 12:00 PM</p>
                                        <p class="text-body-highlight mb-1">Over the years, I've preferred Apple
                                            products. My job has allowed me to use Windows products on laptops and PCs.
                                            I've owned Windows laptops and desktops for home use in the past and will
                                            never use them again.</p>
                                        <div class="hover-actions top-0">
                                            <button class="btn btn-sm btn-phoenix-secondary me-2"><span
                                                    class="fas fa-thumbs-up"></span></button>
                                            <button class="btn btn-sm btn-phoenix-secondary me-1"><span
                                                    class="fas fa-thumbs-down"></span></button>
                                        </div>
                                    </div>
                                    <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                                        <div class="d-flex justify-content-between">
                                            <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="fa fa-star text-warning"></span><span
                                                    class="text-body-secondary ms-1"> by</span> Pennywise Alfred
                                            </h5>
                                            <div class="btn-reveal-trigger position-static">
                                                <button
                                                    class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal"
                                                    type="button" data-bs-toggle="dropdown" data-boundary="window"
                                                    aria-haspopup="true" aria-expanded="false"
                                                    data-bs-reference="parent"><span
                                                        class="fas fa-ellipsis-h fs-10"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                        class="dropdown-item" href="#!">View</a><a
                                                        class="dropdown-item" href="#!">Export</a>
                                                    <div class="dropdown-divider"></div><a
                                                        class="dropdown-item text-danger" href="#!">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-body-tertiary fs-9 mb-1">35 mins ago</p>
                                        <p class="text-body-highlight mb-3">Nice and beautiful product.</p>
                                        <div class="row g-2 mb-2">
                                            <div class="col-auto"><a
                                                    href="../../../assets/img/e-commerce/review-14.jpg"
                                                    data-gallery="gallery-3"><img
                                                        src="../../../assets/img/e-commerce/review-14.jpg"
                                                        alt="" height="164" /></a></div>
                                            <div class="col-auto"><a
                                                    href="../../../assets/img/e-commerce/review-15.jpg"
                                                    data-gallery="gallery-3"><img
                                                        src="../../../assets/img/e-commerce/review-15.jpg"
                                                        alt="" height="164" /></a></div>
                                            <div class="col-auto"><a
                                                    href="../../../assets/img/e-commerce/review-16.jpg"
                                                    data-gallery="gallery-3"><img
                                                        src="../../../assets/img/e-commerce/review-16.jpg"
                                                        alt="" height="164" /></a></div>
                                        </div>
                                        <div class="hover-actions top-0">
                                            <button class="btn btn-sm btn-phoenix-secondary me-2"><span
                                                    class="fas fa-thumbs-up"></span></button>
                                            <button class="btn btn-sm btn-phoenix-secondary me-1"><span
                                                    class="fas fa-thumbs-down"></span></button>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <nav>
                                            <ul class="pagination mb-0">
                                                <li class="page-item"><a class="page-link" href="#!"><span
                                                            class="fas fa-chevron-left"> </span></a></li>
                                                <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                                <li class="page-item active"><a class="page-link"
                                                        href="#!">4</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#!">5</a></li>
                                                <li class="page-item"><a class="page-link" href="#!"><span
                                                            class="fas fa-chevron-right"></span></a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Right div --}}
                    <div class="col-12 col-lg-5 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bg-body-highlight align-middle border-top">
                                                <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">
                                                    Start Date
                                                </h6>
                                            </td>
                                            <td class="px-5 mb-0  border-top border-end">
                                                {{ format_date($task->start_date) }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-body-highlight align-middle">
                                                <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Due
                                                    Date
                                                </h6>
                                            </td>
                                            <td class="px-5 mb-0  border-end">{{ format_date($task->due_date) }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-body-highlight align-middle">
                                                <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">
                                                    Cost</h6>
                                            </td>
                                            <td class="px-5 mb-0  border-end">{{ $task->budget_allocation }}</td>
                                        </tr>
                                        <tr>
                                            <td class="bg-body-highlight align-middle">
                                                <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">
                                                    Sales</h6>
                                            </td>
                                            <td class="px-5 mb-0  border-end">{{ $task->actual_budget_allocated }}
                                            </td>
                                        </tr>
                                        <tr>

                                            <td colspan="2" class="px-5 mb-0 border-start border-end">
                                                @foreach ($task->tags as $key => $item)
                                                    <span class="badge badge-tag me-2 mb-1 pull-up"
                                                        style="background-color:{{ $item->color }};">{{ $item->title }}</span>
                                                @endforeach
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mb-7">
                                    <h4 class="mb-3">Memebers</h4>
                                    </h4>
                                    <div class="row g-3">
                                        <div class="col-12">

                                            @foreach ($task->employees as $key => $emp)
                                                @if ($emp->emp_files?->file_path)
                                                    <div class="d-flex align-items-center mb-3"><a href="#!"
                                                            role="button" title="{{ $emp->full_name }}">
                                                            <div class="avatar avatar-l me-3 pull-up"><img
                                                                    class="rounded-circle"
                                                                    src="{{ $emp->emp_files->file_path }}{{ $emp->emp_files->file_name }}"
                                                                    alt="" />
                                                            </div>
                                                        </a>
                                                        <div><a class="fs-9 fw-bold"
                                                                href="#!">{{ $emp->full_name }}</a>
                                                            <div class="d-flex align-items-center">
                                                                <p
                                                                    class="mb-0 text-body-highlight fw-semibold fs-10 me-2">
                                                                    {{ $emp->designation->name }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @else
                                                    <div class="d-flex align-items-center mb-3"><a href="#!"
                                                            role="button" title="{{ $emp->full_name }}">
                                                            <div class="avatar avatar-xl me-3 rounded-circle pull-up">
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
                                    @if (Auth::user()->can('project.edit'))
                                        <a class="fw-bold fs-9" href="#!"><span
                                                class="fas fa-plus me-1"></span>Add
                                            memeber</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- end of .container-->

    </section>
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
            <form id="taskFileUploadForm" class="needs-validation form-submit-event" novalidate=""
                action="{{ route('file.store') }}" method="POST" enctype='multipart/form-data'>
                @csrf

                <input type="hidden" id="model_id" name="model_id" value="{{ $task->id }}">
                <input type="hidden" id="employee_id" name="employee_id" value="0">
                <input type="hidden" name="model_name" value="task">
                <input type="hidden" name="table" value="task_file_table">
                <input type="hidden" id="modal_type" name="modal_type" value="modal">


                <div class="modal-body">
                    <div class="modal-body px-0">
                        <div class="row g-4">
                            <div class="col-lg-12">
                                <div class="mb-4">
                                    <label class="text-1000 fw-bold mb-2">File</label>
                                    <input class="form-control" type="file" name="file_name" id="fileupld"
                                        required />
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
                    <button class="btn btn-outline-danger" type="button" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit" id="submit_btn">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
