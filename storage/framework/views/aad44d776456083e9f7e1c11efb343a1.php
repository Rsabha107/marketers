<?php $__env->startSection('main'); ?>




    <div class="widgets-scrollspy-nav mt-n5 bg-body-emphasis z-5 mx-n4 mx-lg-n6 border-bottom">
        <nav class="simplebar-scrollspy navbar py-0 scrollbar-overlay" id="widgets-scrollspy">
            <ul class="nav flex-nowrap">
                <li class="nav-item"> <a class="nav-link text-body-tertiary fw-bold py-3 lh-1 text-nowrap" href="#scrollspyStats">Number Stats and Charts</a></li>
                <li class="nav-item"> <a class="nav-link text-body-tertiary fw-bold py-3 lh-1 text-nowrap" href="#scrollspyEcommerce">E-commerce</a></li>
            </ul>
        </nav>
    </div>
    <div class="mb-9" data-bs-spy="scroll" data-bs-target="#widgets-scrollspy">
        <div class="d-flex mb-5 pt-8" id="scrollspyStats"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-percentage"></i></span>
            <div class="col">
                <h3 class="mb-0 text-primary position-relative fw-bold"><span class="bg-body pe-2">Number Stats &amp; Charts</span><span class="border border-primary-lighter position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h3>
                <p class="mb-0"><?php echo e(date("h:i:sa")); ?></p>
            </div>
        </div>
        <div class="px-3 mb-5">
            <div class="row justify-content-between">
                <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end border-bottom pb-4 pb-xxl-0 "><span class="uil fs-5 lh-1 uil-books text-primary"></span>
                    <h1 class="fs-5 pt-3"><a href="<?php echo e(route('tracki.employee')); ?>"> <?php echo e($employee_count); ?> </a></h1>
                    <p class="fs-9 mb-0">Count of Employees</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-xxl-0 border-bottom-xxl-0 border-end-md border-bottom pb-4 pb-xxl-0"><span class="uil fs-5 lh-1 uil-equal-circle text-info"></span>
                    <h1 class="fs-5 pt-3"><a href="<?php echo e(route('tracki.task.manage')); ?>"> 0</a></h1>
                    <p class="fs-9 mb-0">Total Tasks</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-bottom-xxl-0 border-bottom border-end border-end-md-0 pb-4 pb-xxl-0 pt-4 pt-md-0"><span class="uil fs-5 lh-1 uil-ambulance text-danger"></span>
                    <h1 class="fs-5 pt-3"><a href="<?php echo e(route('tracki.task.lt')); ?>">0</a></h1>
                    <p class="fs-9 mb-0">Late Tasks</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-md border-end-xxl-0 border-bottom border-bottom-md-0 pb-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-5 lh-1 uil-bell text-danger"></span>
                    <h1 class="fs-5 pt-3"><a href="<?php echo e(route('tracki.task.est')); ?>">0</a></h1>
                    <p class="fs-9 mb-0">Ending Soon</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end border-end-xxl-0 pb-md-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-5 lh-1 uil-bell-school text-success"></span>
                    <h1 class="fs-5 pt-3"><a href="<?php echo e(route('tracki.task.sst')); ?>">0</a></h1>
                    <p class="fs-9 mb-0">Staring Soon</p>
                </div>
                <div class="col-6 col-md-4 col-xxl-2 text-center border-translucent border-start-xxl border-end-xxl pb-md-4 pb-xxl-0 pt-4 pt-xxl-0"><span class="uil fs-5 lh-1 uil-file-contract-dollar text-danger"></span>
                    <h1 class="fs-5 pt-3"><a href="<?php echo e(route('tracki.employee')); ?>">0</a></h1>
                    <p class="fs-9 mb-0">Unbudgeted Projects</p>
                </div>
            </div>
        </div>
        <div class="row g-3 mb-5">
            <div class="col-md-6 col-xxl-3">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="mb-2">Total Spent</h5>
                                <h6 class="text-body-tertiary">Budget: <?php echo e(number_format(1000)); ?></h6>
                            </div>
                            <h4><?php echo e(number_format(1000)); ?></h4>
                        </div>
                        <div class="d-flex justify-content-center pt-3 flex-1">
                            <div class="echarts-budget-utilization" style="height:100%;width:100%;" data-percent="<?php echo e(number_format(10, 2)); ?>"></div>
                        </div>
                        <div class="mt-3">
                            <div class="d-flex align-items-center mb-2">
                                <div class="bullet-item bg-primary me-2"></div>
                                <h6 class="text-body fw-semibold flex-1 mb-0">Budget Uitlization</h6>
                                <h6 class="text-body fw-semibold mb-0"><?php echo e(number_format(10, 2)); ?>%</h6>
                            </div>
                            <!-- <div class="d-flex align-items-center">
                                <div class="bullet-item bg-primary-subtle me-2"></div>
                                <h6 class="text-body fw-semibold flex-1 mb-0">Non-paying customer</h6>
                                <h6 class="text-body fw-semibold mb-0">70%</h6>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="mb-1">Employee Count</h5>
                                <h6 class="text-body-tertiary">By month</h6>
                            </div>
                            <h4><?php echo e($employee_count); ?></h4>
                        </div>
                        <div class="d-flex justify-content-center px-4 py-6">
                            <div class="echart-total-employees-by-month" style="height:85px;width:115px"></div>
                        </div>
                        <div class="mt-2">
                            <div class="d-flex align-items-center mb-2">
                                <div class="bullet-item bg-primary me-2"></div>
                                <h6 class="text-body fw-semibold flex-1 mb-0">Count</h6>
                                <h6 class="text-body fw-semibold mb-0"><?php echo e($employee_count); ?></h6>
                            </div>
                            <!-- <div class="d-flex align-items-center">
                                <div class="bullet-item bg-primary-subtle me-2"></div>
                                <h6 class="text-body fw-semibold flex-1 mb-0">Pending payment</h6>
                                <h6 class="text-body fw-semibold mb-0">48%</h6>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xxl-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="mb-1">New customers<span class="badge badge-phoenix badge-phoenix-warning rounded-pill fs-9 ms-2"> <span class="badge-label">+26.5%</span></span></h5>
                                <h6 class="text-body-tertiary">Last 7 days</h6>
                            </div>
                            <h4>356</h4>
                        </div>
                        <div class="pb-0 pt-4">
                            <div class="echarts-new-customers-tracki" style="height:180px;width:100%;"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xxl-3">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h5 class="mb-2">Top coupons</h5>
                                <h6 class="text-body-tertiary">Last 7 days</h6>
                            </div>
                        </div>
                        <div class="pb-4 pt-3">
                            <div class="echart-top-coupons-tracki" style="height:115px;width:100%;"></div>
                        </div>
                        <div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="bullet-item bg-primary me-2"></div>
                                <h6 class="text-body fw-semibold flex-1 mb-0">Percentage discount</h6>
                                <h6 class="text-body fw-semibold mb-0">72%</h6>
                            </div>
                            <div class="d-flex align-items-center mb-2">
                                <div class="bullet-item bg-primary-lighter me-2"></div>
                                <h6 class="text-body fw-semibold flex-1 mb-0">Fixed card discount</h6>
                                <h6 class="text-body fw-semibold mb-0">18%</h6>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="bullet-item bg-info-dark me-2"></div>
                                <h6 class="text-body fw-semibold flex-1 mb-0">Fixed product discount</h6>
                                <h6 class="text-body fw-semibold mb-0">10%</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row gx-4 gy-6 pb-5 bg-body-emphasis">
            <!-- <div class="col-xl-6">
                <div class="card shadow-none" data-component-card="data-component-card">
                    <div class="card-header p-4">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Completed Projects by Month</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-4 code-to-copy">
                            <div class="echart-completed-projects-by-month" style="min-height:300px"></div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-xl-6">
                <div class="card shadow-none" data-component-card="data-component-card">
                    <div class="card-header p-4">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Functional Area statistics </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-4 code-to-copy">
                            <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/basic-bar-chart.js-->
                            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                            <div class="echart-employee-functional-area-pie-label-align-chart" style="min-height:300px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card shadow-none" data-component-card="data-component-card">
                    <div class="card-header p-4">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Directorate statistics </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-4 code-to-copy">
                            <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/basic-bar-chart.js-->
                            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                            <div class="echart-employee-directorate-pie-label-align-chart" style="min-height:300px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gy-6 pb-5 bg-body-emphasis">

            <div class="col-xl-6">
                <div class="card shadow-none" data-component-card="data-component-card">
                    <div class="card-header p-4">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Department statistics </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-4 code-to-copy">
                            <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/basic-bar-chart.js-->
                            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                            <div class="echart-employee-department-pie-label-align-chart" style="min-height:300px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card shadow-none" data-component-card="data-component-card">
                    <div class="card-header p-4">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Entity statistics </h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-4 code-to-copy">
                            <!-- Find the JS file for the following chart at: src/js/charts/echarts/examples/basic-bar-chart.js-->
                            <!-- If you are not using gulp based workflow, you can find the transpiled code at: public/assets/js/echarts-example.js-->
                            <div class="echart-employee-entity-pie-label-align-chart" style="min-height:300px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis py-5">
            <div class="col-12 col-xl-12">
                <div class="card shadow-none" data-component-card="data-component-card">
                    <div class="card-header p-4">
                        <div class="row g-3 justify-content-between align-items-center">
                            <div class="col-12 col-md">
                                <h4 class="text-body mb-0" data-anchor="data-anchor">Completed Projects by Month</h4>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="p-4 code-to-copy">
                            <div class="echart-employee-nationalities-bar" style="min-height:300px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mx-n4 px-4 mx-lg-n6 px-lg-6 bg-body-emphasis py-5">
            <div class="row g-6">
                <div class="col-12 col-xl-6">
                    <div class="me-xl-4">
                        <div>
                            <h3>Projection vs actual</h3>
                            <p class="mb-1 text-body-tertiary">Actual earnings vs projected earnings</p>
                        </div>
                        <div class="echart-projection-actual" style="height:300px; width:100%"></div>
                    </div>
                </div>
                <div class="col-12 col-xl-7 col-xxl-6">
                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-6">
                            <h3 class="text-body-emphasis text-nowrap">Spending by Department</h3>
                            <p class="text-body-tertiary mb-md-7">Budget utilization across all channels</p>
                            <div class="d-flex align-items-center justify-content-between">
                                <p class="mb-0 fw-bold">Department </p>
                                <p class="mb-0 fs-9">Total spend <span class="fw-bold"><?php echo e(number_format(100)); ?></span></p>
                            </div>

                            <button class="btn btn-outline-primary mt-5">See Details<span class="fas fa-angle-right ms-2 fs-10 text-center"></span></button>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="position-relative mb-sm-4 mb-xl-0">
                                <div class="echart-spend-by-department" style="min-height:390px;width:100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex mb-5 pt-7" id="scrollspyEcommerce"><span class="fa-stack me-2 ms-n1"><i class="fas fa-circle fa-stack-2x text-primary"></i><i class="fa-inverse fa-stack-1x text-primary-subtle fas fa-cart-plus" data-fa-transform="shrink-4"></i></span>
            <div class="col">
                <h3 class="mb-0 text-primary position-relative fw-bold"><span class="bg-body pe-2">E-commerce</span><span class="border border-primary-lighter position-absolute top-50 translate-middle-y w-100 start-0 z-n1"></span></h3>
                <p class="mb-0">Find more cards which are dedicatedly made for E-commerce.</p>
            </div>
        </div>
        <div>
            <h3 class="mb-3">Cart</h3>
            <div id="cartTable" data-list='{"valueNames":["products","color","size","price","quantity","total"],"page":10}'>
                <div class="table-responsive scrollbar mx-n1 px-1">
                    <table class="table fs-9 mb-0 border-top border-translucent">
                        <thead>
                            <tr>
                                <th class="sort white-space-nowrap align-middle fs-10" scope="col"></th>
                                <th class="sort white-space-nowrap align-middle" scope="col" style="min-width:250px;">PRODUCTS</th>
                                <th class="sort align-middle" scope="col" style="width:80px;">COLOR</th>
                                <th class="sort align-middle" scope="col" style="width:150px;">SIZE</th>
                                <th class="sort align-middle text-end" scope="col" style="width:300px;">PRICE</th>
                                <th class="sort align-middle ps-5" scope="col" style="width:200px;">QUANTITY</th>
                                <th class="sort align-middle text-end" scope="col" style="width:250px;">TOTAL</th>
                                <th class="sort text-end align-middle pe-0" scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list" id="cart-table-body">
                            <tr class="cart-table-row btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/1.png" alt="" width="53" /></a></td>
                                <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2" href="apps/e-commerce/landing/product-details.html">Fitbit Sense Advanced Smartwatch with Tools for Heart Health, Stress Management &amp; Skin Temperature Trends, Carbon/Graphite, One Size (S &amp; L Bands)</a></td>
                                <td class="color align-middle white-space-nowrap fs-9 text-body">Glossy black</td>
                                <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">XL</td>
                                <td class="price align-middle text-body fs-9 fw-semibold text-end">$199</td>
                                <td class="quantity align-middle fs-8 ps-5">
                                    <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity">
                                        <button class="btn btn-sm px-2" data-type="minus">-</button>
                                        <input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)" />
                                        <button class="btn btn-sm px-2" data-type="plus">+</button>
                                    </div>
                                </td>
                                <td class="total align-middle fw-bold text-body-highlight text-end">$398</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                                    <button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                                </td>
                            </tr>
                            <tr class="cart-table-row btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/2.png" alt="" width="53" /></a></td>
                                <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2" href="apps/e-commerce/landing/product-details.html">iPhone 13 pro max-Pacific Blue-128GB storage</a></td>
                                <td class="color align-middle white-space-nowrap fs-9 text-body">Glossy black</td>
                                <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">XL</td>
                                <td class="price align-middle text-body fs-9 fw-semibold text-end">$150</td>
                                <td class="quantity align-middle fs-8 ps-5">
                                    <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity">
                                        <button class="btn btn-sm px-2" data-type="minus">-</button>
                                        <input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)" />
                                        <button class="btn btn-sm px-2" data-type="plus">+</button>
                                    </div>
                                </td>
                                <td class="total align-middle fw-bold text-body-highlight text-end">$300</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                                    <button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                                </td>
                            </tr>
                            <tr class="cart-table-row btn-reveal-trigger">
                                <td class="align-middle white-space-nowrap py-0"><a class="d-block border border-translucent rounded-2" href="apps/e-commerce/landing/product-details.html"><img src="assets/img//products/3.png" alt="" width="53" /></a></td>
                                <td class="products align-middle"><a class="fw-semibold mb-0 line-clamp-2" href="apps/e-commerce/landing/product-details.html">Apple MacBook Pro 13 inch-M1-8/256GB-space</a></td>
                                <td class="color align-middle white-space-nowrap fs-9 text-body">Glossy Golden</td>
                                <td class="size align-middle white-space-nowrap text-body-tertiary fs-9 fw-semibold">34mm</td>
                                <td class="price align-middle text-body fs-9 fw-semibold text-end">$65</td>
                                <td class="quantity align-middle fs-8 ps-5">
                                    <div class="input-group input-group-sm flex-nowrap" data-quantity="data-quantity">
                                        <button class="btn btn-sm px-2" data-type="minus">-</button>
                                        <input class="form-control text-center input-spin-none bg-transparent border-0 px-0" type="number" min="1" value="2" aria-label="Amount (to the nearest dollar)" />
                                        <button class="btn btn-sm px-2" data-type="plus">+</button>
                                    </div>
                                </td>
                                <td class="total align-middle fw-bold text-body-highlight text-end">$130</td>
                                <td class="align-middle white-space-nowrap text-end pe-0 ps-3">
                                    <button class="btn btn-sm text-body-tertiary text-opacity-85 text-body-tertiary-hover me-2"><span class="fas fa-trash"></span></button>
                                </td>
                            </tr>
                            <tr class="cart-table-row btn-reveal-trigger">
                                <td class="text-body-emphasis fw-semibold ps-0 fs-8" colspan="6">Items subtotal :</td>
                                <td class="text-body-emphasis fw-bold text-end fs-8">$691</td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php $__env->stopSection(); ?>

        <?php $__env->startPush('script'); ?>

        <?php echo $__env->make('tracki.partials.employee-charts-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.admin_dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\index.blade.php ENDPATH**/ ?>