<!-- Vendor Scripts Start -->
<script src="<?= base_url('assets/') ?>js/vendor/jquery-3.5.1.min.js"></script>
<script src="<?= base_url('assets/js/datatables/') ?>jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/js/datatables/') ?>dataTables.bootstrap5.min.js"></script>
<script src="<?= base_url('assets/js/flatpickr/') ?>flatpickr.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/datatables.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/OverlayScrollbars.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/autoComplete.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/clamp.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/bootstrap-submenu.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/mousetrap.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/Chart.bundle.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/chartjs-plugin-datalabels.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/glide.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/intro.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/select2.full.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/plyr.min.js"></script>
<script src="<?= base_url('assets/') ?>js/icons/whether-icon-clipart.js"></script>
<script src="<?= base_url('assets/') ?>js/icons/icons-notify.js"></script>
<script src="<?= base_url('assets/') ?>js/icons/icon-clipart.js"></script>
<script src="<?= base_url('assets/') ?>js/icons/flag-icon-clipart.js"></script>
<script src="<?= base_url('assets/') ?>js/icons/feather-icon/feather.min.js"></script>
<script src="<?= base_url('assets/') ?>js/icons/feather-icon/feather-icon.js"></script>
<script src="<?= base_url('assets/') ?>js/icons/feather-icon/feather-icon-clipart.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/quill.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/quill.active.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/datepicker/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/') ?>js/vendor/datepicker/locales/bootstrap-datepicker.es.min.js"></script>
<script src="<?= base_url('assets/') ?>js/forms/controls.editor.js"></script>
<script src="<?= base_url('assets/') ?>js/forms/controls.datepicker.js"></script>
<!-- Vendor Scripts End -->


<!-- Template Base Scripts Start -->
<script src="<?= base_url('assets/') ?>font/CS-Line/csicons.min.js"></script>
<script src="<?= base_url('assets/') ?>js/base/helpers.js"></script>
<script src="<?= base_url('assets/') ?>js/base/globals.js"></script>
<script src="<?= base_url('assets/') ?>js/base/nav.js"></script>
<script src="<?= base_url('assets/') ?>js/base/search.js"></script>
<script src="<?= base_url('assets/') ?>js/base/settings.js"></script>
<script src="<?= base_url('assets/') ?>js/base/init.js"></script>
<!-- Template Base Scripts End -->
<!-- Page Specific Scripts Start -->
<script src="<?= base_url('assets/') ?>js/cs/glide.custom.js"></script>
<script src="<?= base_url('assets/') ?>js/cs/charts.extend.js"></script>
<script src="<?= base_url('assets/') ?>js/cs/datatable.extend.js"></script>
<script src="<?= base_url('assets/') ?>js/plugins/datatable.editableboxed.js"></script>
<script src="<?= base_url('assets/') ?>js/plugins/datatable.editablerows.js"></script>
<script src="<?= base_url('assets/') ?>js/pages/dashboard.default.js"></script>
<script src="<?= base_url('assets/') ?>js/common.js"></script>
<script src="<?= base_url('assets/') ?>js/scripts.js"></script>
<!-- Page Specific Scripts End -->

<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('content');
</script>

<script>
    $(document).ready(function() {
        $('#datatables').DataTable();
        $(".flatpickr").flatpickr();
    });
</script>
<script>
    $(document).ready(function() {
        $('.flatpickrtime').flatpickr({
            enableTime: true,
            noCalendar: true,
            dateFormat: "H:i",
            time_24hr: true
        });
    });
</script>
</body>

</html>