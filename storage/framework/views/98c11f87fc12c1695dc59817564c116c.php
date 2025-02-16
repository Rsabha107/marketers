
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->


    <div class="container-fluid">
        <!-- <div class="d-flex justify-content-between mb-2 mt-4"> -->
        <!-- <div class="d-flex justify-content-center m-2"> -->
        <div class="mb-2">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('hr.admin.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item"><a href="<?php echo e(route('hr.admin.employee')); ?>">
                                <?= get_label('letter', 'Letter') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('generate', 'Generate') ?>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Generate</h2>
            </div>
        </div>
        <div class="mb-4 mt-4">
            <div class="d-flex flex-wrap gap-3">
                <!-- <div class="search-box">
                    <form class="position-relative">
                        <input class="form-control search-input search" type="search" placeholder="Search products" aria-label="Search" />
                        <span class="fas fa-search search-box-icon"></span>

                    </form>
                </div> -->


                <div class="ms-xxl-auto">
                    <!-- <button class="btn btn-link text-body me-4 px-0"><span class="fa-solid fa-file-export fs-9 me-2"></span>Export</button> -->
                    <!-- <button class="btn btn-primary" id="addBtn"><span class="fas fa-plus me-2"></span>Add product</button> -->
                    <a href="<?php echo e(route('hr.admin.letter.generate.create')); ?>" target="_blank">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee_leave', 'Create employee_leave') ?>">
                            <i class="bx bx-plus"></i>
                        </button>
                    </a>
                </div>
            </div>
        </div>


        <!-- </div> -->
        <?php if (isset($component)) { $__componentOriginalc9341a3e418057f2e11c2fd9de4b0c5e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9341a3e418057f2e11c2fd9de4b0c5e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.admin-generated-letter-template-card','data' => ['employeeid' => '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('admin-generated-letter-template-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['employeeid' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9341a3e418057f2e11c2fd9de4b0c5e)): ?>
<?php $attributes = $__attributesOriginalc9341a3e418057f2e11c2fd9de4b0c5e; ?>
<?php unset($__attributesOriginalc9341a3e418057f2e11c2fd9de4b0c5e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9341a3e418057f2e11c2fd9de4b0c5e)): ?>
<?php $component = $__componentOriginalc9341a3e418057f2e11c2fd9de4b0c5e; ?>
<?php unset($__componentOriginalc9341a3e418057f2e11c2fd9de4b0c5e); ?>
<?php endif; ?>
    </div>


    <script src="<?php echo e(asset('assets/js/pages/hr/admin/admin_employees_letter.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>

    <?php $__env->stopPush(); ?>
<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\admin\letter\generate\list.blade.php ENDPATH**/ ?>