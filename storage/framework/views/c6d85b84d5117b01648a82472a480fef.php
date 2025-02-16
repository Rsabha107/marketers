<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title><?php echo e(__('traki.page_title')); ?></title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset ('assets/img/favicons/apple-touch-icon.png')); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset ('assets/img/favicons/favicon-32x32.png')); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset ('assets/img/favicons/favicon-16x16.png')); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(asset ('assets/img/favicons/favicon.ico')); ?>">
    <link rel="manifest" href="<?php echo e(asset ('assets/img/favicons/manifest.json')); ?>">
    <meta name="msapplication-TileImage" content="<?php echo e(asset ('assets/img/favicons/mstile-150x150.png')); ?>">
    <meta name="theme-color" content="#ffffff">

    <!-- <script src="<?php echo e(asset ('assets/js/config.js')); ?>"></script> -->


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->

    <?php echo $__env->make('main.event.partials.style-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script>
    $(window).load(function() {
        // console.log('spinner')
        $(".se-pre-con").fadeOut("slow");
    });
    </script>

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
    <div class="se-pre-con"></div>
    <main class="main" id="top">
    <!-- <div class="content"><div> -->
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->
        <?php echo $__env->make('main.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make('main.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('main'); ?>
        <!-- <?php echo $__env->make('main.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> -->

        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->





        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        <?php echo $__env->make('main.event.partials.js-list', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> -->

        <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\event\layout\gantt-layout.blade.php ENDPATH**/ ?>