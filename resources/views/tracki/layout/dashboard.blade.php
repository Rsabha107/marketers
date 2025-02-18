<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title> {{__('traki.page_title')}}</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset ('assets/tracki/img/favicons/apple-touch-icon.jpg') }}">
    <link rel="icon" type="image/jpg" sizes="32x32" href="{{ asset ('assets/tracki/img/favicons/sparkle_hrms.jpg') }}">
    <link rel="icon" type="image/jpg" sizes="16x16" href="{{ asset ('assets/tracki/img/favicons/sparkle_hrms.jpg') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('assets/tracki/img/favicons/sparkle_hrms.jpg') }}">
    <link rel="manifest" href="{{ asset ('assets/tracki/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset ('assets/tracki/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">



    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->

    @include('tracki.partials.style-list')



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
    <!-- <div class="se-pre-con"></div> -->
    <!-- <div id="cover-spin"></div> -->
    <!-- <div class="progress">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="10" aria-valuemax="100"></div>
    </div> -->
    <main class="main" id="top">
        <!-- ===============================================-->
        <!--    Main Content-->
        <!-- ===============================================-->

        <x-sidemenu />
        <x-topmenu />
        @yield('main')
        @include('tracki.modals')
        @include('tracki.partials.labels')
        @include('tracki.partials.footer')

        <!-- ===============================================-->
        <!--    End of Main Content-->
        <!-- ===============================================-->





        <!-- ===============================================-->
        <!--    JavaScripts-->
        <!-- ===============================================-->
        @include('tracki.partials.js-list')
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script> -->
        <!-- <script>
            // $(window).load(function() {
            // console.log('spinner')
            // $(".se-pre-con").fadeOut("slow");
            // $(document).ready(function() {

            //     $("#cover-spin").fadeOut("slow");
            // });
            // $(document).ready(function() {
            //     $('.progress-bar').animate({
            //         width: '100%'
            //     }, {
            //         duration: 3000,
            //         complete: function() {
            //             $('.progress').css('visibility', 'hidden');
            //         }
            //     });
            // });
        </script> -->
        @stack('script')
</body>

</html>