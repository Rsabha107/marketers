
<?php $__env->startSection('main'); ?>
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('hr.admin.dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('sec.adminuser.list')); ?>">All Users</a></li>
            <li class="breadcrumb-item active">new user</li>
        </ol>
    </nav>
    <h2 class="mb-4">Create a User</h2>
    <div class="row">
        
        <div class="col-xl-8">
            <form method="POST" action="<?php echo e(route('sec.adminuser.create')); ?>"
                class="row g-3 mb-6 needs-validation validatedForm" novalidate enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating">
                        <input class="form-control" name="username" id="user_name" type="text" placeholder="User Name"
                            value="<?php echo e(old('user_name')); ?>" required />
                        <label for="floatingInputGrid">User Name</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name"
                            value="<?php echo e(old('name')); ?>" required>
                        <label for="floatingInputGrid">Name</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating">
                        <input class="form-control" id="email" name="email" type="email"
                            placeholder="name@example.com" value="<?php echo e(old('email')); ?>" required>
                        <label for="floatingInputGrid">Email Address</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating">
                        <input class="form-control" id="phone" name="phone" type="phone" placeholder="phone number"
                            value="<?php echo e(old('phone')); ?>" required>
                        <label for="floatingInputGrid">Phone</label>
                    </div>
                </div>
                <div class="row g-2 mb-3">
                <div class="mb-3 col-md-3">
                    <label class="form-label" for="">
                        <?= get_label('require_email_verification', 'Require email verification?') ?>
                        <i class='bx bx-info-circle text-primary' data-bs-toggle="tooltip" data-bs-placement="top"
                            title="If 'Yes' is selected, user will receive a verification link via email. Please ensure that email settings are configured and operational."></i>
                    </label>
                    <div class="">
                        <div class="btn-group btn-group d-flex justify-content-center" role="group"
                            aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" id="require_ev_yes" name="require_ev" value="1"
                                checked>
                            <label class="btn btn-outline-primary"
                                for="require_ev_yes"><?= get_label('yes', 'Yes') ?></label>
                            <input type="radio" class="btn-check" id="require_ev_no" name="require_ev"
                                value="0">
                            <label class="btn btn-outline-primary"
                                for="require_ev_no"><?= get_label('no', 'No') ?></label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-md-3">
                    <label class="form-label" for=""><?= get_label('status', 'Status') ?> (<small
                            class="text-muted mt-2">If Deactive, user won't be able to log into their
                            account</small>)</label>
                    <div class="">
                        <div class="btn-group btn-group d-flex justify-content-center" role="group"
                            aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" id="user_active" name="status" value="1" checked>
                            <label class="btn btn-outline-primary"
                                for="user_active"><?= get_label('active', 'Active') ?></label>
                            <input type="radio" class="btn-check" id="user_deactive" name="status" value="0"
                                >
                            <label class="btn btn-outline-primary"
                                for="user_deactive"><?= get_label('deactive', 'Deactive') ?></label>

                        </div>
                    </div>
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for=""><?= get_label('user_type', 'User Type') ?> </label>
                    <div class="">
                        <div class="btn-group btn-group d-flex justify-content-center" role="group"
                            aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" id="userUser" name="usertype" value="user"
                                checked>
                            <label class="btn btn-outline-primary" for="userUser"><?= get_label('user', 'User') ?></label>
                            <input type="radio" class="btn-check" id="adminUser" name="usertype" value="admin">
                            <label class="btn btn-outline-primary"
                                for="adminUser"><?= get_label('admin', 'Admin') ?></label>

                        </div>
                    </div>
                </div>
            </div>
                
                
                <div class="row g-2 mb-3">
                    <div class="col-xl-4">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control form-icon-input" name="password" id="password" type="password"
                            placeholder="Password" required>
                    </div>
                    <div class="col-xl-4">
                        <label class="form-label" for="password_confirmation">Confirm
                            Password</label>
                        <input class="form-control form-icon-input" type="password" id="password_confirmation"
                            name="password_confirmation" placeholder="Confirm Password" required>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 mb-3">
                    <label class="form-label" for="photo"><?= get_label('photo', 'photo') ?></label>
                    <input class="form-control" id="profile_image" name="photo" type="file" placeholder="photo">
                </div>
                <div class="col-sm-4 text-secondary">
                    <img src="<?php echo e(!empty($user->photo) ? url('upload/admin_images/' . $user->photo) : url('upload/no_image.jpg')); ?>"
                        alt="Admin" class="rounded-circle p-1 bg-primary" width="80" id="showImage">
                </div>
                <div class="col-sm-6 col-md-9">
                    <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" id="inlineCheckbox<?php echo e($item->id); ?>" type="checkbox"
                                name="roles[]" value="<?php echo e($item->id); ?>"
                                >
                            <label class="form-check-label"
                                for="inlineCheckbox<?php echo e($item->id); ?>"><?php echo e($item->name); ?></label>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <button class="btn btn-primary mb-3" type="submit">Update now</button>
                
                <div class="text-center"><a class="fs-9 fw-bold" href="<?php echo e(route('sec.adminuser.list')); ?>">Go back to
                        list</a>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\sec\adminuser\add.blade.php ENDPATH**/ ?>