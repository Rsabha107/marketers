
<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->

    <div class="container-fluid">
        <div class="mb-2">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('hr.emp.dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
                        </li>
                        <li class="breadcrumb-item active">
                            <?= get_label('employees', 'Employees') ?>
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
        <div class="row g-3 mb-4">
            <div class="col-auto">
                <h2 class="mb-0">Employees (Manager View)</h2>
            </div>
        </div>
        <?php
        /*
        <!-- <div class="mb-4 mt-4">
            <div class="d-flex flex-wrap gap-3">
                <div >
                    <select class="form-select select-appearance" id="directorate_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_directorate', 'Select directorate') ?></option>
                        @foreach ($directorate as $key)
                        <option value="{{$key->id}}">{{$key->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div >
                    <select class="form-select select-appearance" id="entity_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_entity', 'Select entity') ?></option>
                        @foreach ($entities as $key)
                        <option value="{{$key->id}}">{{$key->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div >
                    <select class="form-select select-appearance" id="department_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_department', 'Select department') ?></option>
                        @foreach ($departments as $key)
                        <option value="{{$key->id}}">{{$key->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div >
                    <select class="form-select select-appearance" id="functional_area_filter" aria-label="Default select example">
                        <option value=""><?= get_label('select_functional_area', 'Select fucntional area') ?></option>
                        @foreach ($functional as $key)
                        <?php
                        $selected = (request()->has('status') && request()->status == $status->id) ? 'selected' : '';
                        ?>
                        <option value="{{ $key->id }}" {{ $selected }}>{{ $key->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="ms-xxl-auto">
                    @if (Auth::user()->can('employee.create'))
                    <a href="#!" id="add_employee" data-action="store" data-source="manage" data-type="add" data-table="employee_table" data-id="0">
                        <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-original-title=" <?= get_label('create_employee', 'Create employee') ?>">
                            <i class="bx bx-plus"></i>
                        </button>
                    </a>
                    @endif
                </div>
            </div>
        </div> -->
        */
        ?>
        <?php if (isset($component)) { $__componentOriginalc9d7b3a8f738acce76c3895ca8ac1bfc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc9d7b3a8f738acce76c3895ca8ac1bfc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.managers-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('managers-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc9d7b3a8f738acce76c3895ca8ac1bfc)): ?>
<?php $attributes = $__attributesOriginalc9d7b3a8f738acce76c3895ca8ac1bfc; ?>
<?php unset($__attributesOriginalc9d7b3a8f738acce76c3895ca8ac1bfc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc9d7b3a8f738acce76c3895ca8ac1bfc)): ?>
<?php $component = $__componentOriginalc9d7b3a8f738acce76c3895ca8ac1bfc; ?>
<?php unset($__componentOriginalc9d7b3a8f738acce76c3895ca8ac1bfc); ?>
<?php endif; ?>
    </div>

    <script src="<?php echo e(asset('assets/js/pages/employees.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('hr.emp.layout.emp_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\hr\manager\list.blade.php ENDPATH**/ ?>