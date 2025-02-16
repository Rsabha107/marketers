
<?php $__env->startSection('main'); ?>


<div class="content">

    <div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
        <div class="bg-holder bg-auth-card-overlay" style="background-image:url(../../../assets/img/bg/37.png);">
        </div>
        <!--/.bg-holder-->

        <div class="row flex-center position-relative min-vh-100 g-0 py-5">
            <div class="col-11 col-sm-10 col-xl-8">
                <div class="card border border-translucent auth-card">
                    <div class="card-body pe-md-0">
                        <div class="row align-items-center gx-0 gy-7">
                            <div class="col mx-auto">
                                <div class="auth-form-box">
                                    <div class="text-center mb-5"><a class="d-flex flex-center text-decoration-none mb-4" href="<?php echo e(route('hr.admin.dashboard')); ?>">
                                            <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block">
                                                <!-- <img src="<?php echo e(asset('assets/img/icons/LogoPrintemps_2022_vert.png')); ?>" alt="Printemps" width="58" /> -->
                                            </div>
                                        </a>
                                        <h3 class="text-body-highlight">Edit User</h3>
                                        <p class="text-body-tertiary">Edit account today</p>
                                    </div>
                                    <?php if(count($errors) > 0): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                    <form method="POST" action="<?php echo e(route('sec.adminuser.update')); ?>" class="needs-validation validatedForm" novalidate>
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                                        <div class="mb-3 text-start">
                                            <label class="form-label" for="name">User Name</label>
                                            <input class="form-control" name="username" id="user_name" type="text" placeholder="User Name" value="<?php echo e($user->username); ?>" required>
                                        </div>
                                        <div class="mb-3 text-start">
                                            <label class="form-label" for="name">Name</label>
                                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" value="<?php echo e($user->name); ?>" required>
                                        </div>
                                        <div class="mb-3 text-start">
                                            <label class="form-label" for="email">Email address</label>
                                            <input class="form-control" id="email" name="email" type="email" placeholder="name@example.com" value="<?php echo e($user->email); ?>" required>
                                        </div>
                                        <div class="mb-3 text-start">
                                            <label class="form-label" for="phone">Phone</label>
                                            <input class="form-control" id="phone" name="phone" type="phone" placeholder="phone number" value="<?php echo e($user->phone); ?>" required>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for="">
                                                <?= get_label('require_email_verification', 'Require email verification?') ?>
                                                <i class='bx bx-info-circle text-primary' data-bs-toggle="tooltip" data-bs-placement="top" title="If 'Yes' is selected, user will receive a verification link via email. Please ensure that email settings are configured and operational."></i>
                                            </label>
                                            <div class="">
                                                <div class="btn-group btn-group d-flex justify-content-center" role="group" aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" id="require_ev_yes" name="require_ev" value="1" checked>
                                                    <label class="btn btn-outline-primary" for="require_ev_yes"><?= get_label('yes', 'Yes') ?></label>
                                                    <input type="radio" class="btn-check" id="require_ev_no" name="require_ev" value="0">
                                                    <label class="btn btn-outline-primary" for="require_ev_no"><?= get_label('no', 'No') ?></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-md-6">
                                            <label class="form-label" for=""><?= get_label('status', 'Status') ?> (<small class="text-muted mt-2">If Deactive, user won't be able to log in to their account</small>)</label>
                                            <div class="">
                                                <div class="btn-group btn-group d-flex justify-content-center" role="group" aria-label="Basic radio toggle button group">
                                                    <input type="radio" class="btn-check" id="user_active" name="status" value="1">
                                                    <label class="btn btn-outline-primary" for="user_active"><?= get_label('active', 'Active') ?></label>
                                                    <input type="radio" class="btn-check" id="user_deactive" name="status" value="0" checked>
                                                    <label class="btn btn-outline-primary" for="user_deactive"><?= get_label('deactive', 'Deactive') ?></label>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-4 mb-3">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="faUser" type="radio" name="usertype" value="functional" <?php echo e(($user->usertype == 'functional')? "checked":""); ?> />
                                                <label class="form-check-label" for="inlineRadio1">Functional
                                                    Area</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="departmentUser" type="radio" name="usertype" value="department" <?php echo e(($user->usertype == 'department')? "checked":""); ?> />
                                                <label class="form-check-label" for="inlineRadio2">Department</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="adminUser" type="radio" name="usertype" value="admin" <?php echo e(($user->usertype == 'admin')? "checked":""); ?> />
                                                <label class="form-check-label" for="inlineRadio2">Admin</label>
                                            </div>
                                        </div>
                                        <div class="mb-3 text-start" id="FASelect" <?php echo e(($user->usertype == 'functional')? "":"style=display:none"); ?>>
                                            <label class="form-label" for="email">Functional Area</label>
                                            <select name="functional_area_id" class="form-select" id="floatingSelectFA">
                                                <option selected="selected" value=""> Select funcitonal Area
                                                </option>
                                                <?php $__currentLoopData = $workspace; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" <?php echo e(($user->functional_area_id == $item->id)? "selected":""); ?>>
                                                    <?php echo e($item->name); ?>

                                                </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="mb-3 text-start" id="DepartmentSelect" <?php echo e(($user->usertype == 'department')? "":"style=display:none"); ?>>
                                            <label class="form-label" for="email">Department</label>
                                            <select name="department_id" class="form-select" id="floatingSelectDepartment">
                                                <option selected="selected" value=""> Select department </option>
                                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($item->id); ?>" <?php echo e(($user->department_assignment_id == $item->id)? "selected":""); ?>>
                                                    <?php echo e($item->name); ?>

                                                </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-md-9">
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" id="inlineCheckbox<?php echo e($item->name); ?>" type="checkbox" name="roles[]" value="<?php echo e($item->id); ?>" <?php echo e($user->hasRole($item->name)? 'checked':''); ?>>
                                                <label class="form-check-label" for="inlineCheckbox<?php echo e($item->name); ?>"><?php echo e($item->name); ?></label>
                                            </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                        <!-- <div class="form-check mb-3">
                                            <input class="form-check-input" id="termsService" type="checkbox" required>
                                            <label class="form-label fs-9 text-transform-none" for="termsService">I
                                                accept the <a href="#!">terms </a>and <a href="#!">privacy
                                                    policy</a></label>
                                        </div> -->
                                        <button class="btn btn-primary w-100 mb-3" type="submit">Update now</button>
                                        
                                        <div class="text-center"><a class="fs-9 fw-bold" href="<?php echo e(route('sec.adminuser.list')); ?>">Go back to list</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <?php $__env->stopSection(); ?>

    <?php $__env->startPush('script'); ?>
    <script>
        $(document).ready(function() {
            console.log('fauser checked ')
            console.log('user type: ' + $("input[name=usertype]:checked").val());
            if ($("input[name=usertype]:checked").val() == 'department') {
                $("#floatingSelectDepartment").prop('required', true);
                $("#floatingSelectFA").prop('required', false);
            } else if ($("input[name=usertype]:checked").val() == 'functional') {
                $("#floatingSelectDepartment").prop('required', false);
                $("#floatingSelectFA").prop('required', true);
            } else {
                $("#floatingSelectDepartment").prop('required', false);
                $("#floatingSelectFA").prop('required', false);
            }
            // $("#FASelect").show();
            // $("#DepartmentSelect").hide();
            // $("#floatingSelectDepartment").prop('required', false);
            // $("#floatingSelectFA").prop('required', true);
            $("input[name=usertype]").change(function() {
                console.log('usertype changing')
                if ($("#faUser").is(':checked')) {
                    $("#FASelect").show();
                    $("#DepartmentSelect").hide();
                    $("#floatingSelectDepartment").prop('required', false);
                    $("#floatingSelectFA").prop('required', true);

                } else if ($("#departmentUser").is(':checked')) {
                    $("#DepartmentSelect").show();
                    $("#FASelect").hide();
                    $("#floatingSelectFA").prop('required', false);
                    $("#floatingSelectDepartment").prop('required', true);
                } else {
                    $("#DepartmentSelect").hide();
                    $("#FASelect").hide();
                    $("#floatingSelectFA").prop('required', false);
                    $("#floatingSelectDepartment").prop('required', false);
                }
            });
        });
    </script>

    <?php $__env->stopPush(); ?>

<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\sec\adminuser\edit_original.blade.php ENDPATH**/ ?>