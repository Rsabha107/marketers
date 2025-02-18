
<?php $__env->startSection('main'); ?>
    <!-- ***************************************************************************** */ -->
    <!-- <div class="pb-9"> -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-style1">
            <li class="breadcrumb-item">
                <a href="<?php echo e(url('/home')); ?>"><?= get_label('home', 'Home') ?></a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo e(route('projects.admin.project')); ?>"><?= get_label('projects', 'Projects') ?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php echo e($projectData->name); ?>

            </li>
        </ol>
    </nav>
    <div class="row justify-content-between align-items-end mb-4 g-3">

        <div class="row align-items-center justify-content-between g-3 mb-4">
            <div class="col-12 col-md-auto">
                <h2 class="mb-0"><?php echo e($projectData->name); ?></h2>
            </div>
            <div class="col-12 col-md-auto d-flex">
                <button class="btn btn-phoenix-secondary px-3 px-sm-5 me-2"><span
                        class="fa-solid fa-edit me-sm-2"></span><span class="d-none d-sm-inline">Edit </span></button>
                <button class="btn btn-phoenix-danger me-2"><span class="fa-solid fa-trash me-2"></span><span>Delete
                        Deal</span></button>
                <div>
                    <button class="btn px-3 btn-phoenix-secondary" type="button" data-bs-toggle="dropdown"
                        data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                            class="fa-solid fa-ellipsis"></span></button>
                    <ul class="dropdown-menu dropdown-menu-end p-0" style="z-index: 9999;">
                        <li><a class="dropdown-item" href="#!">View profile</a></li>
                        <li><a class="dropdown-item" href="#!">Report</a></li>
                        <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                        <li><a class="dropdown-item text-danger" href="#!">Delete Lead</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-xxl-12">
            <ul class="nav nav-underline deal-details scrollbar flex-nowrap w-100 pb-1 mb-3 bg-success bg-opacity-10" id="myTab"
                role="tablist" style="overflow-y: hidden;">
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link active" id="project-tab"
                        data-bs-toggle="tab" href="#tab-project" role="tab" aria-controls="tab-project"
                        aria-selected="false" tabindex="-1"> <span
                            class="fa-solid fa-chart-line me-2 tab-icon-color"></span>Project</a></li>
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link" id="activity-tab"
                        data-bs-toggle="tab" href="#tab-activity" role="tab" aria-controls="tab-activity"
                        aria-selected="false" tabindex="-1"> <span
                            class="fa-solid fa-chart-line me-2 tab-icon-color"></span>Tasks</a></li>
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link" id="notes-tab"
                        data-bs-toggle="tab" href="#tab-notes" role="tab" aria-controls="tab-notes"
                        aria-selected="false" tabindex="-1"> <span
                            class="fa-solid fa-clipboard me-2 tab-icon-color"></span>Notes</a></li>
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link" id="attachments-tab"
                        data-bs-toggle="tab" href="#tab-attachments" role="tab" aria-controls="tab-attachments"
                        aria-selected="true"> <span class="fa-solid fa-paperclip me-2 tab-icon-color"></span>Attachments</a>
                <li class="nav-item text-nowrap me-2" role="presentation"><a class="nav-link" id="attendees-tab"
                        data-bs-toggle="tab" href="#tab-attendees" role="tab" aria-controls="tab-attendees"
                        aria-selected="true"> <span class="fas fa-person-booth me-2 tab-icon-color"></span>Attendance</a>
                </li>
            </ul>

            
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade active show" id="tab-project" role="tabpanel" aria-labelledby="project-tab">
                    <div class="pb-9">
                        <div class="row g-4 g-xl-6">
                            <div class="col-xl-7 col-xxl-9">
                                <div class="card mb-3">
                                    <!-- <img class="card-img-top" src="../../../assets/img//generic/66.jpg" alt="..." /> -->
                                    <div class="card-body">
                                        <h4 class="card-title">Brief</h4>
                                        <!-- <p class="card-text">Here is the example of the Multiple Container Sortable feature of the </p> -->
                                        <p class="card-text text-body-secondary mb-4">
                                            <?php echo e(strip_tags($projectData->description)); ?></p>
                                    </div>
                                </div>
                                <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-2 row-cols-xxl-2 g-3 mb-3">
                                    <div class="col">
                                        <div class="card h-100 ">
                                            <div class="card-body">
                                                <div class="d-flex align-items-center mb-3">
                                                    <h4 class="fw-bolder mb-2 line-clamp-1 mb-1">Project Information</h4>
                                                    <button class="btn btn-link p-0">
                                                        <a href="javascript:void(0);" id="add_edit_project"
                                                            data-action="update" data-source="list" data-type="edit"
                                                            data-table="none" data-id="<?php echo e($projectData->id); ?>"
                                                            data-redirect="list"
                                                            data-workspace_id="<?php echo e(session()->get('workspace_id')); ?>"
                                                            role="button" title="edit">
                                                            <span class="fas fa-pen fs-8 ms-3 text-body-quaternary"></span>
                                                        </a>
                                                    </button>
                                                </div>

                                                <div class="col-12 col-sm-auto flex-1">
                                                    <table class="lh-sm">
                                                        <tbody>
                                                            <tr>
                                                                <td class="align-top py-1 text-body text-nowrap fw-bold">
                                                                    Location : </td>
                                                                <td
                                                                    class="text-body-tertiary text-opacity-85 fw-semibold ps-3">
                                                                    <?php echo e($projectData->locations?->name ? $projectData->locations?->name : 'not specified'); ?>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-top py-1 text-body text-nowrap fw-bold">
                                                                    Venue : </td>
                                                                <td
                                                                    class="text-body-tertiary text-opacity-85 fw-semibold ps-3">
                                                                    <?php echo e($projectData->venues?->name ? $projectData->venues?->name : 'not specified'); ?>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-top py-1 text-body text-nowrap fw-bold">
                                                                    Project Type :</td>
                                                                <td
                                                                    class="text-body-tertiary text-opacity-85 fw-semibold ps-3">
                                                                    <?php echo e($projectData->types?->name ? $projectData->types?->name : 'not specified'); ?>

                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="align-top py-1 text-body text-nowrap fw-bold">
                                                                    Project Category :</td>
                                                                <td class="text-warning fw-semibold ps-3">
                                                                    <?php echo e($projectData->categories?->name ? $projectData->categories?->name : 'not specified'); ?>

                                                                </td>
                                                            </tr>
                                                            <tr class="mb-3">
                                                                <td class="align-top py-1 text-body text-nowrap fw-bold">
                                                                    Attendeese :</td>
                                                                <td
                                                                    class="text-body-tertiary text-opacity-85 fw-semibold ps-3">
                                                                    <?php echo e($projectData->audiences?->name ? $projectData->audiences?->name : 'not specified'); ?>

                                                                </td>
                                                            </tr>
                                                            <!-- <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center mt-3"><span class="fa-solid fa-list-check me-2 text-body-tertiary fs-9"></span>
                                                            <h5 class="text-body-emphasis mb-0 me-2"><?php echo e($projectData->tasks->count()); ?><span class="text-body fw-normal ms-2">tasks</span></h5>
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
                                                        (<?php echo e($projectData->tasks->count()); ?> tasks)</h4>
                                                </div>

                                                <div class="col-12 col-sm-auto flex-1">
                                                    <div class="echart-pie-edge-align-chart-example"
                                                        style="min-height:200px;width:100%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-xxl-3">
                                <div class="sticky-leads-sidebar">
                                    <div class="card mb-3">
                                        <div class="card-body">
                                            <div class="row align-items-center g-3">
                                                <div class="col-12 col-sm-auto flex-1">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <h4 class="fw-bolder mb-2 line-clamp-1 mb-1">Project Details</h4>
                                                        <button class="btn btn-link p-0">
                                                            <a href="javascript:void(0);" id="edit_project"
                                                                data-action="update" data-source="list" data-type="edit"
                                                                data-table="none" data-id="<?php echo e($projectData->id); ?>"
                                                                data-redirect="list"
                                                                data-workspace_id="<?php echo e(session()->get('workspace_id')); ?>"
                                                                role="button" title="edit">
                                                                <span
                                                                    class="fas fa-pen fs-8 ms-3 text-body-quaternary"></span>
                                                            </a>
                                                        </button>
                                                    </div>
                                                    <span class="badge badge-phoenix badge-phoenix-warning" role="button"
                                                        data-bs-toggle="tooltip" data-bs-placement="left"
                                                        title="Workspace"><?php echo e($projectData->workspaces?->title); ?><span
                                                            class="ms-1 fa-solid fas fa-network-wired"></span></span>
                                                    <span
                                                        class="badge badge-phoenix badge-phoenix-<?php echo e($projectData->status->color); ?> mb-4"><?php echo e($projectData->status->title); ?><span
                                                            class="ms-1 uil uil-stopwatch"></span></span>

                                                    <div class="align-items-center mb-4">
                                                        <div>
                                                            <div class="d-flex justify-content-between">
                                                                <p class="text-body fw-semibold">Budget :</p>
                                                                <p class="text-body-emphasis fw-semibold">
                                                                    <?php echo e(number_format($projectData->budget_allocation)); ?></p>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <p class="text-body fw-semibold">Used :</p>
                                                                <p class="text-danger fw-semibold">
                                                                    <?php echo e(number_format($projectData->budget_allocation - $remainingBudget)); ?>

                                                                </p>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <p class="text-body fw-semibold">Remaining :</p>
                                                                <p class="text-body-emphasis fw-semibold">
                                                                    <?php echo e(number_format($remainingBudget)); ?></p>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <p class="text-body fw-semibold">Created :</p>
                                                                <p class="text-body-emphasis fw-semibold">
                                                                    <?php echo e(\Carbon\Carbon::parse($projectData->start_date)->format('d-M-Y')); ?>

                                                                </p>
                                                            </div>
                                                            <div class="d-flex justify-content-between">
                                                                <p class="text-body fw-semibold">Deadline :</p>
                                                                <p class="text-body-emphasis fw-semibold">
                                                                    <?php echo e(\Carbon\Carbon::parse($projectData->end_date)->format('d-M-Y')); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-md-flex d-xl-block align-items-center justify-content-between mb-5">
                                                        <div class="d-flex align-items-center mb-3 mb-md-0 mb-xl-3">
                                                            <div class="avatar avatar-xl me-3"><img class="rounded-circle"
                                                                    src="<?php echo e(asset('fnx/assets/img/team/72x72/58.webp')); ?>"
                                                                    alt="" /></div>
                                                            <div>
                                                                <h5><?php echo e($projectData->clients->pluck('first_name')->first() . ' ' . $projectData->clients->pluck('last_name')->first()); ?>

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
                                                                                        novalidate="" action="#"
                                                                                        method="POST">
                                                                                        <h4 class="mb-3 fw-bold">Switch
                                                                                            ownership</h4>
                                                                                        <h5 class="mb-3">Project Client
                                                                                        </h5>
                                                                                        <select class="form-select mb-3"
                                                                                            id="project_client_owner_id"
                                                                                            aria-label="Default select"
                                                                                            name="project_client_owner">
                                                                                            <option selected="selected">
                                                                                                Select</option>
                                                                                            <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                                <option
                                                                                                    value="<?php echo e($client->id); ?>">
                                                                                                    <?php echo e($client->first_name . ' ' . $client->last_name); ?>

                                                                                                </option>
                                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                            <?php $__currentLoopData = $projectData->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <span class="badge badge-tag me-2 mb-1 pull-up"
                                                                    style="background-color:<?php echo e($item->color); ?>;"><?php echo e($item->title); ?></span>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <!-- <span class="badge badge-phoenix badge-phoenix-success me-2">Success</span>
                                                <span class="badge badge-phoenix badge-phoenix-danger me-2">Lost</span>
                                                <span class="badge badge-phoenix badge-phoenix-secondary">Close</span> -->
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-flex justify-content-between text-body-tertiary fw-semibold">
                                                        <p class="mb-2"> Progress</p>
                                                        <p class="mb-2 text-1100"><?php echo e($project_progress); ?>%</p>
                                                    </div>
                                                    <div class="progress bg-success-100">
                                                        <div class="progress-bar rounded bg-<?php echo e($projectData->status->color); ?>"
                                                            role="progressbar" aria-label="Success example"
                                                            style="width: <?php echo e($project_progress); ?>%" aria-valuenow="25"
                                                            aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="fw-bolder mb-2 line-clamp-1 mb-5">Assigned Users
                                                <?php if(Auth::user()->can('project.edit')): ?>
                                                    <div class="float-end avatar avatar-m  me-1">
                                                        <a class="dropdown-toggle dropdown-caret-none d-inline-block"
                                                            href="javascript:void(0);" id="edit_project"
                                                            data-action="update" data-source="list" data-type="edit"
                                                            data-table="none" data-id="<?php echo e($projectData->id); ?>"
                                                            data-redirect="list"
                                                            data-workspace_id="<?php echo e(session()->get('workspace_id')); ?>"
                                                            role="button" title="add">
                                                            <div class="avatar avatar-m  rounded-circle pull-up">
                                                                <div class="avatar-name rounded-circle me-2 text-warning">
                                                                    <span>+</span></div>
                                                                <!-- <img class="rounded-circle " src="../../assets/img/team/34.webp" alt=""> -->
                                                            </div>
                                                        </a>
                                                    </div>
                                                <?php endif; ?>
                                            </h4>
                                            <div class="row g-3">
                                                <div class="col-12">

                                                    <?php $__currentLoopData = $projectData->employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $emp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($emp->emp_files?->file_path): ?>
                                                            <div class="d-flex align-items-center mb-3"><a href="#!"
                                                                    role="button" title="<?php echo e($emp->full_name); ?>">
                                                                    <div class="avatar avatar-xl me-3 pull-up"><img
                                                                            class="rounded-circle"
                                                                            src="<?php echo e($emp->emp_files->file_path); ?><?php echo e($emp->emp_files->file_name); ?>"
                                                                            alt="" />
                                                                    </div>
                                                                </a>
                                                                <div><a class="fs-8 fw-bold"
                                                                        href="#!"><?php echo e($emp->full_name); ?></a>
                                                                    <div class="d-flex align-items-center">
                                                                        <p
                                                                            class="mb-0 text-body-highlight fw-semibold fs-9 me-2">
                                                                            <?php echo e($emp->designation->name); ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="d-flex align-items-center mb-3"><a href="#!"
                                                                    role="button" title="<?php echo e($emp->full_name); ?>">
                                                                    <div
                                                                        class="avatar avatar-xl me-3 rounded-circle pull-up">
                                                                        <div class="avatar-name rounded-circle me-2">
                                                                            <span><?php echo e(generateInitials($emp->full_name)); ?></span>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div><a class="fs-8 fw-bold"
                                                                        href="#!"><?php echo e($emp->full_name); ?></a>
                                                                    <div class="d-flex align-items-center">
                                                                        <p
                                                                            class="mb-0 text-body-highlight fw-semibold fs-9 me-2">
                                                                            <?php echo e($emp->designation->name); ?></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-activity" role="tabpanel" aria-labelledby="activity-tab">
                    <!-- <div class="card"> -->
                    <div class="mb-0">
                        <?php if (isset($component)) { $__componentOriginaldc59c18c401c8376b7d9886b38a79a7c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc59c18c401c8376b7d9886b38a79a7c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.projects.admin-tasks-card','data' => ['users' => $users,'projectId' => $projectData->id,'statuses' => $statuses,'departments' => $departments,'source' => 'list','showpage' => 'list','showpageid' => 'list_'.e($projectData->id).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('projects.admin-tasks-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['users' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($users),'projectId' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($projectData->id),'statuses' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statuses),'departments' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($departments),'source' => 'list','showpage' => 'list','showpageid' => 'list_'.e($projectData->id).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc59c18c401c8376b7d9886b38a79a7c)): ?>
<?php $attributes = $__attributesOriginaldc59c18c401c8376b7d9886b38a79a7c; ?>
<?php unset($__attributesOriginaldc59c18c401c8376b7d9886b38a79a7c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc59c18c401c8376b7d9886b38a79a7c)): ?>
<?php $component = $__componentOriginaldc59c18c401c8376b7d9886b38a79a7c; ?>
<?php unset($__componentOriginaldc59c18c401c8376b7d9886b38a79a7c); ?>
<?php endif; ?>
                    </div>
                    <!-- </div> -->
                </div>
                <div class="tab-pane fade" id="tab-notes" role="tabpanel" aria-labelledby="notes-tab">
                    <div class="card mb-5">
                        <div class="mb-2">
                            <div class="row align-items-center justify-content-between g-3 mt-2 ms-2">
                                <div class="col-12 col-md-auto">
                                    <h2 class="fw-bolder mb-1">Notes</h2>
                                </div>
                                <div class="col-12 col-md-auto d-flex">
                                    <?php if(Auth::user()->can('project.note.create')): ?>
                                        <a href="#!" class="btn btn-phoenix-primary px-3 px-sm-5 me-2"
                                            data-bs-toggle="modal" data-bs-target="#addEventNoteModal"
                                            aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-plus me-sm-2"></span><span class="d-none d-sm-inline">Add a
                                                new note</span></a>
                                    <?php endif; ?>
                                    <div>
                                        <!-- <button class="btn px-3 btn-phoenix-secondary" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fa-solid fa-ellipsis"></span></button> -->
                                        <ul class="dropdown-menu dropdown-menu-end p-0" style="z-index: 9999;">
                                            <li><a href="" target="_blank" class="dropdown-item">Gantt </a></li>
                                            <li><a class="dropdown-item" href="#!">View profile</a></li>
                                            <li><a class="dropdown-item" href="#!">Report</a></li>
                                            <li><a class="dropdown-item" href="#!">Manage notifications</a></li>
                                            <!-- <li><a class="dropdown-item text-danger" href="#!">Delete this event</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <textarea class="form-control mb-3" id="notes" rows="4"> </textarea> -->
                        <div class="row gy-4">
                            <div class="col-12 col-xl-auto flex-1">
                                <?php $__currentLoopData = $eventNote; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="border-top border-dashed border-300 px-3 pt-3 pb-4">
                                        <div class="d-flex flex-between-center">
                                            <div class="d-flex mb-1"><span
                                                    class="fa-solid fa-file-lines me-2 text-700 fs--1"></span>
                                                <p class="text-1000 mb-0 lh-1"><?php echo e($item->note_text); ?></p>
                                            </div>
                                            <?php if(Auth::user()->can('project.note.delete')): ?>
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
                                            <?php endif; ?>
                                        </div>
                                        <p class="fs--1 text-700 mb-2"><span class="text-400 mx-1">| </span><a
                                                href="#!"><?php echo e($item->users?->name); ?> </a><span
                                                class="text-400 mx-1">| </span><span
                                                class="text-nowrap"><?php echo e($item->created_at); ?></span>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-attachments" role="tabpanel" aria-labelledby="attachments-tab">
                    <div class="card mb-5">
                        <div class="mb-2">
                            <div class="row align-items-center justify-content-between g-3 mt-2 ms-2">
                                <div class="col-12 col-md-auto">
                                    <h2 class="fw-bolder mb-0">Attachments</h2>
                                </div>
                                <div class="col-12 col-md-auto d-flex">
                                    <?php if(Auth::user()->can('project.file.create')): ?>
                                        <a href="#!" data-id="<?php echo e($projectData->id); ?>"
                                            class="btn btn-phoenix-primary px-3 px-sm-5 me-2" data-bs-toggle="modal"
                                            data-bs-target="#addAttachementModal" aria-haspopup="true"
                                            aria-expanded="false" data-bs-reference="parent"><span
                                                class="fas fa-file-upload me-sm-2"></span><span
                                                class="d-none d-sm-inline">Upload a new file</span></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php $__currentLoopData = $fileName; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="border-top border-dashed border-300 px-3 pt-3 pb-4">
                                <div class="d-flex flex-between-center">
                                    <div class="d-flex mb-1"><span
                                            class="fa-solid fa-file-lines me-2 text-700 fs--1"></span>
                                        <p class="text-1000 mb-0 lh-1"><a
                                                href="../../../upload/event_files/<?php echo e($item->file_name); ?>"
                                                target="_blank"><?php echo e($item->original_file_name); ?></a></p>
                                    </div>
                                    <?php if(Auth::user()->can('project.file.delete')): ?>
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
                                    <?php endif; ?>
                                </div>
                                <p class="fs--1 text-700 mb-2"><span><?php echo e($item->file_size / 100); ?>kB</span><span
                                        class="text-400 mx-1">| </span><a href="#!"><?php echo e($item->users->name); ?>

                                    </a><span class="text-400 mx-1">| </span><span
                                        class="text-nowrap"><?php echo e($item->created_at); ?></span></p>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-attendees" role="tabpanel" aria-labelledby="attendees-tab">
                    <div class="card">
                        <div class="mb-9">
                            <div id="orderTable"
                                data-list='{"valueNames":["name","start_date","due_date","department","assigned_to","status","description"]}'>
                                <?php if(Auth::user()->can('project.attendance.assign')): ?>
                                    <div class="mb-4">
                                        <div class="row g-1 mx-2">
                                            <div class="col-auto px-2 pt-4">
                                                <div>
                                                    <a href="" class="btn btn-phoenix-primary px-3 px-sm-5 me-2">
                                                        <span class="fas fa-plus me-2"></span>Add Attendees</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div
                                    class="mx-n4 px-4 mx-lg-n6 px-lg-6 border-top border-bottom border-translucent position-relative top-1">
                                    <div class="table-responsive scrollbar mx-n1 px-1">
                                        <table class="table fs--1 mb-0 border-top border-200" id="dataList">
                                            <thead>
                                                <tr>

                                                    <!-- <th class="sort white-space-nowrap align-middle ps-0" scope="col" data-sort="name" style="width:10%;">NAME</th> -->
                                                    <th class="sort align-middle ps-5" scope="col"
                                                        data-sort="department" style="width:15%;">Name</th>
                                                    <!-- <th class="sort align-middle ps-3" scope="col" data-sort="assigness" style="width:10%;">Last name</th> -->
                                                    <th class="sort align-middle ps-3" scope="col" data-sort="start"
                                                        style="width:10%;">Email</th>
                                                    <th class="sort align-middle ps-3" scope="col"
                                                        data-sort="deadline" style="width:15%;">Phone</th>
                                                    <!-- <th class="sort align-middle ps-3" scope="col" data-sort="task" style="width:12%;">TASK</th> -->
                                                    <th class="sort align-middle ps-3" scope="col"
                                                        data-sort="projectprogress" style="width:1%;">Type</th>
                                                    <th class="sort align-middle ps-3" scope="col"
                                                        data-sort="projectprogress" style="width:1%;">Attended</th>
                                                    <!-- <th class="sort align-middle text-center" scope="col" data-sort="statuses" style="width:10%;">STATUS</th> -->
                                                    <th class="sort align-middle text-end" scope="col"
                                                        style="width:10%;"></th>
                                                    <th class="sort align-middle text-end" scope="col"
                                                        style="width:10%;"></th>

                                                </tr>
                                            </thead>
                                            <tbody class="list" id="order-table-body">
                                                <?php $__currentLoopData = $attendeez; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr class="hover-actions-trigger btn-reveal-trigger position-static">
                                                        <!-- <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-0" href="#"> <?php echo e($item->name); ?></a></td> -->
                                                        <!-- <td class="align-middle time white-space-nowrap ps-0 projectName py-4"><a class="fw-bold fs-0 ms-5" href="#!"><?php echo e($item->first_name); ?>&nbsp;<?php echo e($item->last_name); ?></a>
                                                            </td> -->
                                                        <td class="customer align-middle white-space-nowrap ps-2"><a
                                                                class="d-flex align-items-center text-900" href="#!">
                                                                <div class="avatar avatar-m">
                                                                    <div class="avatar-name rounded-circle">
                                                                        <span><?php echo e(substr($item->first_name, 0, 1)); ?></span>
                                                                    </div>
                                                                </div>
                                                                <p
                                                                    class="mb-0 ms-3 text-900 align-middle time white-space-nowrap fw-bold">
                                                                    <?php echo e($item->first_name); ?>&nbsp;<?php echo e($item->last_name); ?>

                                                                </p>
                                                            </a></td>
                                                        <td class="customer align-middle white-space-nowrap ps-1">
                                                            <p class="mb-0 ms-3 fs--1 text-900">
                                                                <?php echo e($item->email_address); ?></p>
                                                            </a>
                                                        </td>
                                                        <td class="customer align-middle white-space-nowrap ps-3">
                                                            <p class="mb-0 ms-0 text-900"> <?php echo e($item->phone_number); ?> </p>
                                                            </a>
                                                        </td>
                                                        <td class="customer align-middle white-space-nowrap ps-3">
                                                            <p class="mb-0 ms-3 text-900"> <?php echo e($item->name); ?></p>
                                                            </a>
                                                        </td>
                                                        <td class="customer align-middle white-space-nowrap ps-3">
                                                            <p class="mb-0 ms-3 text-900"> <?php echo e($item->guest_attended); ?></p>
                                                            </a>
                                                        </td>
                                                        <?php
                                                            $qr_code = App\Http\Controllers\UtilController::getQrCode(
                                                                $item->id,
                                                            );
                                                        ?>
                                                        <td class="customer align-middle white-space-nowrap ps-3">
                                                            <p class="mb-0 ms-3 text-900 zoom"> <?php echo e($qr_code); ?></p>
                                                            </a>
                                                        </td>
                                                        <td
                                                            class="align-middle white-space-nowrap text-end pe-0 ps-4 btn-reveal-trigger">
                                                            <?php if(Auth::user()->can('project.attendance.delete')): ?>
                                                                <div
                                                                    class="font-sans-serif btn-reveal-trigger position-static">
                                                                    <button
                                                                        class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal fs--2"
                                                                        type="button" data-bs-toggle="dropdown"
                                                                        data-boundary="window" aria-haspopup="true"
                                                                        aria-expanded="false"
                                                                        data-bs-reference="parent"><span
                                                                            class="fas fa-ellipsis-h fs--2"></span></button>
                                                                    <div class="dropdown-menu dropdown-menu-end py-2">
                                                                        <a class="dropdown-item text-danger"
                                                                            href="" id="delete">Remove</a>
                                                                    </div>
                                                                </div>
                                                            <?php endif; ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row g-4 g-xl-0 mt-3">
                </div>
            </div>
            <!-- </div> -->
            <!-- </div> -->
            <!-- </div> -->
            <!-- ===============================================-->
            <!--    End of Main Content-->
            <!-- ===============================================-->
            <!-- modal land -->

            <!-- this is the Add Attachement Modal for events -->
            <div class="modal fade" id="addAttachementModal" tabindex="-1" data-bs-backdrop="static"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-top">
                    <div class="modal-content bg-100">
                        <div class="modal-header bg-modal-header">
                            <h3 class=" text-white mb-0" id="staticBackdropLabel">Upload File</h3>
                            <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span
                                    class="fas fa-times fs--1 text-danger"></span></button>
                        </div>
                        <form id="fileUploadForm" class="needs-validation" novalidate="" action="" method="POST"
                            enctype='multipart/form-data'>
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <div class="modal-body px-0">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <input type="hidden" id="addId" name="event_id"
                                                value="<?php echo e($projectData->id); ?>">
                                            <div class="mb-4">
                                                <label class="text-1000 fw-bold mb-2">Name</label>
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
                                <button class="btn btn-primary" type="submit">Save</button>
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
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <div class="modal-body px-0">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <input type="hidden" id="editId" name="id">
                                            <input type="hidden" id="editEventId" name="event_id">
                                            <div class="mb-4">
                                                <label class="text-1000 fw-bold mb-2">Name</label>
                                                <input class="form-control" type="number" max="100" min="0"
                                                    name="prorgress_number" id="editPoregessNumber" required />
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
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <div class="modal-body px-0">
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <input type="hidden" id="addId" name="event_id"
                                                value="<?php echo e($projectData->id); ?>">
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
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <?php echo $__env->make('projects.admin.partials.charts-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('assets/jquery/dist/jquery.form.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/pages/project/admin/projects.js')); ?>"></script>

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
    <?php echo $__env->make('tracki.partials.event-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('projects.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\events\admin\event\d.blade.php ENDPATH**/ ?>