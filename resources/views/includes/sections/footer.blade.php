
  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="/dist/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/dist/plugins/bootstrap/bootstrap.bundle.min.js"></script>
{{-- Datatables --}}
<script src="/dist/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="/dist/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="/dist/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="/dist/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="/dist/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="/dist/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
{{-- DATATABLES BUTTONS --}}
<script src="/dist/plugins/datatables/js/jszip.min.js"></script>
<script src="/dist/plugins/datatables/js/pdfmake.min.js"></script>
<script src="/dist/plugins/datatables/js/vfs_fonts.js"></script>

<script src="/dist/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="/dist/plugins/datatables/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="/dist/js/demo.js"></script> --}}
<!-- Page specific script -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
