
<?php $__env->startSection('main'); ?>
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="<?php echo e(route('hr.admin.dashboard')); ?>">Home</a></li>
            <li class="breadcrumb-item"><a href="<?php echo e(route('sec.adminuser.list')); ?>">All Users</a></li>
            <li class="breadcrumb-item active"><?php echo e($user->username); ?></li>
        </ol>
    </nav>
    <h2 class="mb-4">Edit User</h2>
    <div class="row">
        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center text-center">
                        <img src="<?php echo e(!empty($user->photo) ? url('upload/admin_images/' . $user->photo) : url('upload/no_image.jpg')); ?>"
                            alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                        <div class="mt-3">
                            <h4><?php echo e($user->name); ?></h4>
                            <p class="text-secondary mb-1"><?php echo e($user->username); ?></p>
                            <p class="text-muted font-size-sm"><?php echo e($user->email); ?></p>
                            <button class="btn btn-primary">Follow</button>
                            <button class="btn btn-outline-primary">Message</button>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                            <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="feather feather-globe me-2 icon-inline">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg>Website</h6>
                            <span class="text-secondary">https://codervent.com</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <form method="POST" action="<?php echo e(route('sec.adminuser.update')); ?>"
                class="row g-3 mb-6 needs-validation validatedForm" novalidate enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="user_id" value="<?php echo e($user->id); ?>">
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating">
                        <input class="form-control" name="username" id="user_name" type="text" placeholder="User Name"
                            value="<?php echo e($user->username); ?>" required />
                        <label for="floatingInputGrid">User Name</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating">
                        <input class="form-control" id="name" name="name" type="text" placeholder="Name"
                            value="<?php echo e($user->name); ?>" required>
                        <label for="floatingInputGrid">Name</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating">
                        <input class="form-control" id="email" name="email" type="email"
                            placeholder="name@example.com" value="<?php echo e($user->email); ?>" required>
                        <label for="floatingInputGrid">Email Address</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-8">
                    <div class="form-floating">
                        <input class="form-control" id="phone" name="phone" type="phone" placeholder="phone number"
                            value="<?php echo e($user->phone); ?>" required>
                        <label for="floatingInputGrid">Phone</label>
                    </div>
                </div>
                <div class="mb-3 col-md-8">
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
                <div class="mb-3 col-md-8">
                    <label class="form-label" for=""><?= get_label('status', 'Status') ?> (<small
                            class="text-muted mt-2">If Deactive, user won't be able to log in to their
                            account</small>)</label>
                    <div class="">
                        <div class="btn-group btn-group d-flex justify-content-center" role="group"
                            aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" id="user_active" name="status" value="1">
                            <label class="btn btn-outline-primary"
                                for="user_active"><?= get_label('active', 'Active') ?></label>
                            <input type="radio" class="btn-check" id="user_deactive" name="status" value="0"
                                checked>
                            <label class="btn btn-outline-primary"
                                for="user_deactive"><?= get_label('deactive', 'Deactive') ?></label>

                        </div>
                    </div>
                </div>
                <div class="mb-3 col-md-8">
                    <label class="form-label" for=""><?= get_label('user_type', 'User Type') ?> </label>
                    <div class="">
                        <div class="btn-group btn-group d-flex justify-content-center" role="group"
                            aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" id="userUser" name="usertype" value="user"
                                <?php echo e($user->role == 'user' ? 'checked' : ''); ?>>
                            <label class="btn btn-outline-success" for="userUser"><?= get_label('user', 'User') ?></label>
                            <input type="radio" class="btn-check" id="adminUser" name="usertype" value="admin"
                                <?php echo e($user->role == 'admin' ? 'checked' : ''); ?>>
                            <label class="btn btn-outline-danger"
                                for="adminUser"><?= get_label('admin', 'Admin') ?></label>

                        </div>
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
                                <?php echo e($user->hasRole($item->name) ? 'checked' : ''); ?>>
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('#profile_image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
    
<?php $__env->stopPush(); ?>

<?php echo $__env->make('hr.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\sec\adminuser\edit.blade.php ENDPATH**/ ?>