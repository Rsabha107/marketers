
<?php $__env->startSection('main'); ?>


<div class="container-small">
    <nav class="mb-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="#!">Page 1</a></li>
            <li class="breadcrumb-item"><a href="#!">Page 2</a></li>
            <li class="breadcrumb-item active" aria-current="page">Default</li>
        </ol>
    </nav>
    <div class="d-flex justify-content-between align-items-end mb-4">
        <h2 class="mb-0">Purchase Order</h2>
        <div>
            <button class="btn btn-phoenix-secondary me-2"><span class="fa-solid fa-download me-sm-2"></span><span class="d-none d-sm-inline-block">Download Invoice</span></button>
            <button class="btn btn-phoenix-secondary"><span class="fa-solid fa-print me-sm-2"></span><span class="d-none d-sm-inline-block">Print</span></button>
            <button class="btn btn-phoenix-secondary"><span class="fa-solid fa-print me-sm-2"></span><span class="d-none d-sm-inline-block">Edit</span></button>
        </div>
    </div>
    <div class="bg-body dark__bg-gray-1100 p-4 mb-4 rounded-2">
        <div class="row g-4">
            <div class="d-flex col-12 col-lg-3">
                <div class="row g-4 g-lg-2">
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="row align-items-center g-0">
                            <div class="col-auto col-lg-6 col-xl-5">
                                <h6 class="mb-0 me-3">Purchase Order No :</h6>
                            </div>
                            <div class="col-auto col-lg-6 col-xl-7">
                                <p class="fs-9 text-body-secondary fw-semibold mb-0"><?php echo e($header->po_number); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="row align-items-center g-0">
                            <div class="col-auto col-lg-6 col-xl-5">
                                <h6 class="me-3">Invoice Date :</h6>
                            </div>
                            <div class="col-auto col-lg-6 col-xl-7">
                                <p class="fs-9 text-body-secondary fw-semibold mb-0"><?php echo e(format_date($header->order_date)); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="d-flex ms-auto col-12 col-sm-6 col-lg-4">
                <div class="row g-4">
                    <div class="col-12 col-lg-6">
                        <h6 class="mb-2"> Billing Address :</h6>
                        <div class="fs-9 text-body-secondary fw-semibold mb-0">
                            <p class="mb-2">John Doe,</p>
                            <p class="mb-2">36, Gree Donwtonwn,<br />Golden road, FL,</p>
                            <p class="mb-2">johndoe@jeemail.com</p>
                            <p class="mb-0">+334933029030</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <h6 class="mb-2"> Shipping Address :</h6>
                        <div class="fs-9 text-body-secondary fw-semibold mb-0">
                            <p class="mb-2"><?php echo e($company->name); ?></p>
                            <p class="mb-2"><?php echo e($header->business_address?->address1); ?>,<br />
                                                <?php echo e($header->business_address?->address2); ?>, <br />
                                                <?php echo e($header->business_address?->city); ?>,<br /><?php echo e($header->business_address?->country?->name); ?>

                            </p>
                            <p class="mb-2"><?php echo e($company->email); ?></p>
                            <p class="mb-2"><?php echo e($company->phone_number); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="px-0">
        <div class="table-responsive scrollbar">
            <table class="table fs-9 text-body mb-0">
                <thead class="bg-body-secondary">
                    <tr>
                        <th scope="col" style="width: 24px;"></th>
                        <th scope="col" style="min-width: 60px;">SL NO.</th>
                        <th scope="col" style="min-width: 360px;">Products</th>
                        
                        
                        <th class="text-end" scope="col" style="width: 80px;">Quantity</th>
                        <th class="text-end" scope="col" style="width: 100px;">Price</th>
                        
                        
                        <th class="text-end" scope="col" style="min-width: 92px;">Tax</th>
                        <th class="text-end" scope="col" style="min-width: 60px;">Total</th>
                        <th scope="col" style="width: 24px;"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $lines; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $grand_total =  $header->lines->sum('line_total');
                        $grand_total = $grand_total + $header->shipping_cost;
                    ?>
                    <tr>
                        <td class="border-0"></td>
                        <td class="align-middle">1</td>
                        <td class="align-middle">
                            <p class="line-clamp-1 mb-0 fw-semibold"><?php echo e($line->product?->item_name); ?> <?php echo e($line->line_description); ?></p>
                        </td>
                        
                        
                        <td class="align-middle text-end text-body-highlight fw-semibold"><?php echo e($line->quantity); ?></td>
                        <td class="align-middle text-end fw-semibold"><?php echo e($header->currency?->symbol); ?><?php echo e($line->unit_price); ?></td>
                        
                        
                        <td class="align-middle text-end fw-semibold"></td>
                        <td class="align-middle text-end fw-semibold"><?php echo e($header->currency?->symbol); ?><?php echo e($line->line_total); ?></td>
                        <td class="border-0"></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <tr class="bg-body-secondary">
                        <td></td>
                        <td class="align-middle fw-semibold" colspan="5">Subtotal</td>
                        <td class="align-middle text-end fw-bold"><?php echo e($header->currency?->symbol); ?><?php echo e($header->lines->sum('line_total')); ?></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td class="border-0"></td>
                        <td colspan="2"></td>
                        <td class="align-middle fw-bold ps-15" colspan="2">Shipping Cost</td>
                        <td class="align-middle text-end fw-semibold" colspan="2"><?php echo e($header->currency?->symbol); ?><?php echo e($header->shipping_cost); ?></td>
                        <td class="border-0"></td>
                      </tr>
                      
                      <tr class="bg-body-secondary">
                        <td class="align-middle ps-4 fw-bold text-body-highlight" colspan="3">Grand Total</td>
                        <td class="align-middle fw-bold text-body-highlight" colspan="3">Three Hundred and Ninenty Eight USD</td>
                        <td class="align-middle text-end fw-bold"><?php echo e($header->currency?->symbol); ?><?php echo e($grand_total); ?></td>
                        <td></td>
                      </tr>
                </tbody>
            </table>
        </div>
        <div class="text-end py-9 border-bottom mb-3"><img class="mb-3" src="../../../assets/img/logos/phoenix-mart.png" alt="" />
            <h4>Authorized Signatory</h4>
        </div>
    </div>
    <div class="d-flex flex-column align-items-end mb-3">
        
        <div>
            <button class="btn btn-phoenix-secondary me-2"><span class="fa-solid fa-download me-sm-2"></span><span class="d-none d-sm-inline-block">Download Invoice</span></button>
            <button class="btn btn-phoenix-secondary"><span class="fa-solid fa-print me-sm-2"></span><span class="d-none d-sm-inline-block">Print</span></button>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
<!-- <script src="<?php echo e(asset('assets/js/pages/procurement/admin/purchase.js')); ?>"></script> -->
<?php $__env->stopPush(); ?>
<?php echo $__env->make('procurement.admin.layout.admin_template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views/procurement/admin/purchase/purchase-order.blade.php ENDPATH**/ ?>