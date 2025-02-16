<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Tracki</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('assets/img/favicons/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('assets/img/favicons/sparkle_hrms.jpg')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('assets/img/favicons/sparkle_hrms.jpg')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset('assets/img/favicons/sparkle_hrms.jpg')); ?>">
    <link rel="manifest" href="<?php echo e(asset('assets/img/favicons/manifest.json')); ?>">
    <meta name="msapplication-TileImage" content="<?php echo e(asset('assets/img/favicons/mstile-150x150.png')); ?>">
    <meta name="theme-color" content="#ffffff">
    <script src="<?php echo e(asset('assets/vendors/imagesloaded/imagesloaded.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/simplebar/simplebar.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="<?php echo e(asset('assets/vendors/simplebar/simplebar.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link href="<?php echo e(asset('assets/css/theme-rtl.min.css')); ?>" type="text/css" rel="stylesheet" id="style-rtl">
    <link href="<?php echo e(asset('assets/css/theme.min.css')); ?>" type="text/css" rel="stylesheet" id="style-default">
    <link href="<?php echo e(asset('assets/css/user-rtl.min.css')); ?>" type="text/css" rel="stylesheet" id="user-style-rtl">
    <link href="<?php echo e(asset('assets/css/user.min.css')); ?>" type="text/css" rel="stylesheet" id="user-style-default">
    <script>
        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container">
            <div class="row flex-center min-vh-100 py-5">
                <div class="col-sm-10 col-md-8 col-lg-5 col-xl-5 col-xxl-3"><a class="d-flex flex-center text-decoration-none mb-4" href="<?php echo e(route('dashboard')); ?>">
                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block"><img src="../../../assets/img/icons/sparkle_hrms.jpg" alt="phoenix" width="58" />
                        </div>
                    </a>
                    <div class="text-center mb-6">
                        <h4 class="text-body-highlight">Reset new password</h4>
                        <p class="text-body-tertiary">Type your new password</p>
                        <?php if(Session::has('message')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(Session::get('message')); ?>

                        </div>
                        <?php endif; ?>
                        <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                        <form action="<?php echo e(route('reset.password.post')); ?>" method="POST" class="mt-5">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="token" value="<?php echo e($token); ?>">
                            <input class="form-control mb-2" name="email" id="email" type="email" placeholder="Type your email" required>
                            <input class="form-control mb-2" name="password" id="password" type="password" placeholder="Type new password" required autocomplete="new-password">
                            <input class="form-control mb-4" name="password_confirmation" id="confirmPassword" type="password" placeholder="Cofirm new password" required autocomplete="new-password" />
                            <button class="btn btn-primary w-100" type="submit">Set Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var navbarTopStyle = window.config.config.phoenixNavbarTopStyle;
            var navbarTop = document.querySelector('.navbar-top');
            if (navbarTopStyle === 'darker') {
                navbarTop.setAttribute('data-navbar-appearance', 'darker');
            }

            var navbarVerticalStyle = window.config.config.phoenixNavbarVerticalStyle;
            var navbarVertical = document.querySelector('.navbar-vertical');
            if (navbarVertical && navbarVerticalStyle === 'darker') {
                navbarVertical.setAttribute('data-navbar-appearance', 'darker');
            }
        </script>

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="<?php echo e(asset ('assets/jquery/dist/jquery-3.7.0.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendors/popper/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendors/bootstrap/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendors/anchorjs/anchor.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendors/is/is.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendors/fontawesome/all.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendors/lodash/lodash.min.js')); ?>"></script>
    <!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script> -->
    <script src="<?php echo e(asset ('assets/vendors/list.js/list.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendors/feather-icons/feather.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendors/dayjs/dayjs.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/js/phoenix.js')); ?>"></script>
    <script src="<?php echo e(asset ('assets/vendors/select2/select2.min.js')); ?>"></script>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\auth\reset.blade.php ENDPATH**/ ?>