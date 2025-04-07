<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Inventaris Toko Accu FBC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  {{-- <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('templates/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  {{-- <link rel="stylesheet" href="../dist/css/adminlte.min.css"> --}}
  <link rel="stylesheet" href="{{ asset('templates/dist/css/adminlte.min.css') }}">

    <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('templates//plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('templates//plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('templates//plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('layouts.components.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layouts.components.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @yield('header')
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>
    <!-- /.content -->

    {{-- <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a> --}}
  </div>
  <!-- /.content-wrapper -->

  {{-- <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer> --}}

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
{{-- <script src="../plugins/jquery/jquery.min.js"></script> --}}
<script src="{{ asset('templates/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
{{-- <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
<script src="{{ asset('templates/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
{{-- <script src="../dist/js/adminlte.min.js"></script> --}}
<script src="{{ asset('templates/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="../dist/js/demo.js"></script> --}}
{{-- <script src="{{ asset('templates/dist/js/demo.js') }}"></script> --}}

<!-- DataTables  & Plugins -->
<script src="{{ asset('templates/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('templates/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('templates/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('templates//plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('templates//plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('templates//plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('templates//plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('templates//plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('templates//plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('templates//plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('templates//plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('templates//plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
    //   "buttons": [
    //     // "copy", "csv", "excel",
    //   "pdf", "print"],
      "searching": false,

    "paging": false,
    //   "ordering": true,
      "info": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>
