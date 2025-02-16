<?php $__env->startSection('main'); ?>


<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->

<div class="content">
    <div class="container-fluid">
        <div class="mb-2">
            <div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style1">
                        <li class="breadcrumb-item">
                            <a href="<?php echo e(route('dashboard')); ?>"><?= get_label('home', 'Home') ?></a>
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
                <h2 class="mb-0">Bank File</h2>
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
                <div class="col-md-2">
                    <select class="form-select select-appearance" id="timesheet_period_filter" aria-label="Default select example">
                        <option value="" selected><?= get_label('select_timesheet_period', 'Select month') ?></option>
                        <?php $__currentLoopData = $timesheet_periods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee_timesheet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($employee_timesheet->timesheet_period); ?>"><?php echo e($employee_timesheet->timesheet_period); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="ms-xxl-auto">

                </div>
            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginala48628f25c9b1dbba35f0db43bffbba7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala48628f25c9b1dbba35f0db43bffbba7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.payroll-bank-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('payroll-bank-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala48628f25c9b1dbba35f0db43bffbba7)): ?>
<?php $attributes = $__attributesOriginala48628f25c9b1dbba35f0db43bffbba7; ?>
<?php unset($__attributesOriginala48628f25c9b1dbba35f0db43bffbba7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala48628f25c9b1dbba35f0db43bffbba7)): ?>
<?php $component = $__componentOriginala48628f25c9b1dbba35f0db43bffbba7; ?>
<?php unset($__componentOriginala48628f25c9b1dbba35f0db43bffbba7); ?>
<?php endif; ?>
    </div>

    <script src="<?php echo e(asset('assets/js/pages/payroll_bank.js')); ?>"></script>

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>


    <?php $__env->stopPush(); ?>

<?php echo $__env->make('tracki.layout.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\payroll\bank\list.blade.php ENDPATH**/ ?>