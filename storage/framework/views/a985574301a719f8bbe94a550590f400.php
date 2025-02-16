
<?php $__env->startSection('main'); ?>
    <div class="row">
        <div class="col-sm-12">
            <form class="row g-3 needs-validation" id="company_id" novalidate=""
                action="<?php echo e(route('general.settings.update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <input type="hidden" name="table" value="vendor_table" />

                <div class="card">
                    <div class="card-header d-flex align-items-center border-bottom">
                        <div class="ms-3">
                            <h5 class="mb-0 fs-sm">Company Settings</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-floating">
                                    <input  class="form-control starlabel" 
                                            name="name" type="text"
                                            value="<?php echo e($company->name); ?>"
                                            placeholder="Company Name" 
                                            required />
                                    <div class="invalid-feedback">
                                        Please enter Company Name.
                                    </div>
                                    <label for="floatingInputGrid">Company Name <span class="red">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" 
                                        name="email" 
                                        type="text" 
                                        value="<?php echo e($company->email); ?>"
                                        placeholder="Company email"
                                        required />
                                    <div class="invalid-feedback">
                                        Please enter Company email.
                                    </div>
                                    <label for="floatingInputGrid">Company email <span class="red">*</span></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" 
                                        name="phone" 
                                        type="text"
                                        value="<?php echo e($company->phone); ?>"
                                        placeholder="Company Phone" 
                                        required />
                                    <div class="invalid-feedback">
                                        Please enter Company Phone.
                                    </div>
                                    <label for="floatingInputGrid">Company Phone <span class="red">*</span></label>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" 
                                        name="website" 
                                        type="text" 
                                        placeholder="Company Website"
                                        value="<?php echo e($company->website); ?>"
                                        required />
                                    <div class="invalid-feedback">
                                        Please enter Company Website.
                                    </div>
                                    <label for="floatingInputGrid">Company Website <span class="red">*</span></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border-top">
                        <div class="col-12 gy-3 mb-3">
                            <div class="row g-3 justify-content-end">
                                <a href="javascript:void(0)" class="col-auto">
                                    <button type="button" class="btn btn-phoenix-danger px-5" data-bs-toggle="tooltip"
                                        data-bs-placement="right" data-bs-dismiss="offcanvas">
                                        Cancel
                                    </button>
                                </a>
                                <div class="col-auto">
                                    <button class="btn btn-primary px-5 px-sm-15" id="submit_btn">Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <!--  -->
<?php $__env->stopPush(); ?>

<?php echo $__env->make('procurement.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\general\settings\company\edit.blade.php ENDPATH**/ ?>