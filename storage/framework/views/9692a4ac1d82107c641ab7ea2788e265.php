<script src="<?php echo e(asset('fnx/assets/js/phoenix.js')); ?>"></script>

<input type="hidden" name="table" value="vendor_table" />
<input type="hidden" id="edit_vendor_id" name="id" value="<?php echo e($vendor->id); ?>">
<div>

    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom">
            <div class="ms-3">
                <h5 class="mb-0 fs-sm">Update Vendor</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-sm-6 col-md-6">
                    <div class="form-floating">
                        <input 
                            class="form-control" 
                            name="name"
                            value="<?php echo e($vendor->name); ?>"
                            id="floatingInputGrid" type="text" 
                            placeholder="Vendor Name (Company)" 
                            required />
                        <div class="invalid-feedback">
                            Please enter Vendor Name (Company).
                        </div>
                        <label for="floatingInputGrid">Vendor Name (Company)</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-floating">
                        <input 
                            class="form-control" 
                            name="contact_name"
                            value="<?php echo e($vendor->contact_name); ?>"
                            id="floatingInputGrid" 
                            type="text" 
                            placeholder="Contact Name" 
                            required />
                        <div class="invalid-feedback">
                            Please enter Contact Name.
                        </div>
                        <label for="floatingInputGrid">Contact Name</label>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating">
                        <input 
                            class="form-control" 
                            name="email"
                            value="<?php echo e($vendor->email); ?>"
                            id="floatingInputGrid" 
                            type="text" 
                            placeholder="Email Address" 
                            required />
                        <div class="invalid-feedback">
                            Please enter Email Address.
                        </div>
                        <label for="floatingInputGrid">Email Address</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating">
                        <input 
                            class="form-control" 
                            name="phone_number"
                            value="<?php echo e($vendor->phone_number); ?>"
                            id="floatingInputGrid" 
                            type="text" 
                            placeholder="Phone Number" />
                        <div class="invalid-feedback">
                            Please enter Phone Number.
                        </div>
                        <label for="floatingInputGrid">Phone Number</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-floating">
                        <input 
                            class="form-control" 
                            name="website"
                            value="<?php echo e($vendor->website); ?>"
                            id="floatingInputGrid" 
                            type="text" 
                            placeholder="Website" />
                        <div class="invalid-feedback">
                            Please enter Website.
                        </div>
                        <label for="floatingInputGrid">Website</label>
                    </div>
                </div>
            </div>

            <div class="col-12 gy-3 mb-3">
                <div class="form-floating">
                    <textarea 
                        class="form-control  
                        <?php $__errorArgs = ['shipping_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="billing_address" 
                        id="floatingProjectOverview" 
                        placeholder="eg:"
                        style="height: 100px"><?php echo e($vendor->billing_address); ?></textarea>
                    <div class="invalid-feedback">
                        Please enter Billing Address.
                    </div>
                    <label for="floatingProjectOverview">Billing Address</label>
                </div>
            </div>
            <div class="col-12 gy-3 mb-3">
                <div class="form-floating">
                    <textarea 
                        class="form-control  
                        <?php $__errorArgs = ['shipping_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" 
                        name="shipping_address" 
                        id="floatingProjectOverview" 
                        placeholder="eg:"
                        style="height: 100px"><?php echo e($vendor->shipping_address); ?></textarea>
                    <div class="invalid-feedback">
                        Please enter Shipping Address.
                    </div>
                    <label for="floatingProjectOverview">Shipping Address</label>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-6 col-md-6">
                    <div class="form-floating">
                        <input 
                            class="form-control" 
                            name="opening_balance"
                            value="<?php echo e($vendor->opening_balance); ?>"
                            id="floatingInputGrid" 
                            type="text" 
                            placeholder="Opening Balance" />
                        <div class="invalid-feedback">
                            Please enter Opening Balance.
                        </div>
                        <label for="floatingInputGrid">Opening Balance</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-floating">
                        <input 
                            class="form-control" 
                            name="currency"
                            value="<?php echo e($vendor->currency); ?>"
                            id="floatingInputGrid" 
                            type="text" 
                            placeholder="Currency" />
                        <div class="invalid-feedback">
                            Please enter Currency.
                        </div>
                        <label for="floatingInputGrid">Currency</label>
                    </div>
                </div>
            </div>

            <div class="col-12 gy-3">
                <div class="row g-3 justify-content-end">
                    <a href="javascript:void(0)" class="col-auto">
                        <button type="button" class="btn btn-phoenix-danger px-5" data-bs-toggle="tooltip"
                            data-bs-placement="right" data-bs-dismiss="offcanvas">
                            Cancel
                        </button>
                    </a>
                    <div class="col-auto">
                        <button class="btn btn-primary px-5 px-sm-15" id="submit_btn">Save Vendor</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views//procurement/admin/vendor/mv/edit.blade.php ENDPATH**/ ?>