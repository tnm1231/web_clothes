
@jquery
@toastr_js
@toastr_render
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="/admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="/admin/plugins/raphael/raphael.min.js"></script>
<script src="/admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="/admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="/admin/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="/admin/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/admin/dist/js/pages/dashboard2.js"></script>

<script>
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            toastr.error("{{$error}}");
        @endforeach
        @endif
</script>
