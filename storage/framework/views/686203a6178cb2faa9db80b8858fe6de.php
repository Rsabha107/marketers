<script src="<?php echo e(asset ('assets/jquery/dist/jquery-3.7.0.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/jquery/dist/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/jquery/dist/jquery-ui.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/vendors/moment/min/moment.min.js')); ?>"></script>


<!-- <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script> -->
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.8/b-2.4.2/b-colvis-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/rr-1.4.1/sc-2.3.0/sb-1.6.0/datatables.min.js"></script>

<script src="<?php echo e(asset ('assets/vendors/popper/popper.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/vendors/bootstrap-5.2.3-dist/js/bootstrap.min.js')); ?>"></script>

<!-- Bootstrap-table -->
<script src="https://cdn.jsdelivr.net/npm/tableexport.jquery.plugin@1.28.0/tableExport.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.4/dist/extensions/export/bootstrap-table-export.min.js"></script>

<script src="<?php echo e(asset ('assets/vendors/anchorjs/anchor.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/vendors/is/is.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/vendors/fontawesome/all.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/vendors/lodash/lodash.min.js')); ?>"></script>
<!-- <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script> -->
<script src="<?php echo e(asset ('assets/vendors/list.js/list.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/vendors/feather-icons/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/vendors/dayjs/dayjs.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/vendors/choices/choices.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/vendors/echarts/echarts.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/js/dhtmlxgantt.js?v=8.0.6')); ?>"></script>
<!-- <script src="<?php echo e(asset ('assets/vendors/dhtmlx-gantt/dhtmlxgantt.js')); ?>"></script> -->
<script src="<?php echo e(asset ('assets/vendors/glightbox/glightbox.min.js')); ?>"> </script>
<script src="<?php echo e(asset ('assets/vendors/tinymce/tinymce.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/vendors/dropzone/dropzone.min.js')); ?>"></script>
<script src="<?php echo e(asset ('assets/js/toastr.min.js')); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js"></script>
<!-- <script src="<?php echo e(asset ('assets/js/select2.js')); ?>"></script> -->

<script src="<?php echo e(asset('assets/vendors/fullcalendar/main.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/prism/prism.js')); ?>"></script>



<script src="<?php echo e(asset ('assets/js/phoenix.js')); ?>"></script>
<!-- <script src="<?php echo e(asset ('assets/js/project-details.js')); ?>"></script> -->
<!-- <script src="<?php echo e(asset ('assets/vendors/leaflet/leaflet.js')); ?>"></script> -->
<!-- <script src="<?php echo e(asset ('assets/vendors/leaflet.markercluster/leaflet.markercluster.js')); ?>"></script> -->
<!-- <script src="<?php echo e(asset ('assets/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js')); ?>"> -->
<!-- </script> -->
<!-- <script src="<?php echo e(asset ('assets/js/ecommerce-dashboard.js')); ?>"></script> -->

<!-- <script src="<?php echo e(asset ('assets/js/projectmanagement-dashboard.js')); ?>"></script> -->
<!-- <script src="<?php echo e(asset ('assets/js/crm-dashboard.js')); ?>"></script> -->
<!-- <script src="<?php echo e(asset ('assets/js/crm-analytics.js')); ?>"></script> -->

<!-- sweetalert -->
<script src="<?php echo e(asset('assets/js/code/sweetalert2.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/lightbox/lightbox.min.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/custom.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/js/code/code.js')); ?>"></script>
 <script src="<?php echo e(asset('assets/vendors/spin/spin.js')); ?>"></script>

<script>
 <?php if(Session::has('message')): ?>
 toastr.options = {
  "closeButton": true,
  "debug": false,
  "newestOnTop": false,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "preventDuplicates": false,
  "onclick": null,
  "showDuration": "400",
  "hideDuration": "1000",
  "timeOut": "5000",
  "extendedTimeOut": "1000",
  "showEasing": "swing",
  "hideEasing": "linear",
  "showMethod": "fadeIn",
  "hideMethod": "fadeOut"
}
 var type = "<?php echo e(Session::get('alert-type','info')); ?>"
 switch(type){
    case 'info':
    toastr.info(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'success':
    toastr.success(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'warning':
    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
    break;

    case 'error':
    toastr.error(" <?php echo e(Session::get('message')); ?> ");
    break;
 }
 <?php endif; ?>
</script>
<?php /**PATH C:\xampp\htdocs\laravel\marketers\resources\views\tracki\event\partials\js-list.blade.php ENDPATH**/ ?>