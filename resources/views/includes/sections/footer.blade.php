<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    {{-- <div class="float-right d-none d-sm-inline">
        Anything you want
    </div> --}}
    <!-- Default to the left -->
    {{-- <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved. --}}
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
<script src="/dist/plugins/datatables/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>
@stack('scripts')
<!-- AdminLTE for demo purposes -->
{{-- <script src="/dist/js/demo.js"></script> --}}
<!-- Page specific script -->

<!-- for ajax model view -->
<script>
    $(document).ready(function() {
        // Initialize DataTable for #example1 with buttons
        var table1 = $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "ordering": false, // Disable sorting
            "autoWidth": false,
            "paging": true, // If pagination is needed
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });

        // Append buttons container for #example1 to the correct DOM position
        table1.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        // Initialize DataTable for #example2 with buttons
        var table2 = $("#example2").DataTable({
            "paging": true, // Enable paging for #example2
            "lengthChange": false, // Disable length change dropdown
            "searching": false, // Disable search filter
            "ordering": false, // Disable sorting
            "info": true, // Show table info
            "autoWidth": false, // Disable auto width adjustments
            "responsive": true, // Responsive table
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        });

        // Append buttons container for #example2 to the correct DOM position
        table2.buttons().container().appendTo('#example2_wrapper .col-md-6:eq(0)');


    });
</script>

</body>

</html>
