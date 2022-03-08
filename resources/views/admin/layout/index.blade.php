<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPC-Karya | @yield('namePage')</title>
    <link rel="icon" href="{{asset('images')}}/favicon.png">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <link rel="stylesheet" href="{{asset('assets')}}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets')}}/dist/css/adminlte.min.css">
    <!-- toastr -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/toastr/toastr.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <!-- <link rel="stylesheet" href="{{asset('assets')}}/plugins/daterangepicker/daterangepicker.css"> -->
    <!-- summernote -->
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('images')}}/favicon.png" alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="{{asset('assets')}}/#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{URL('/')}}" class="nav-link" target="_blank">Frontpage</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->


                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="{{asset('assets')}}/#">
                        {{ Auth::user()->email }} <i class="fa fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="{{ route('user.profile') }}" class="dropdown-item dropdown-footer">Edit User</a>

                        <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item dropdown-footer">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>

                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        @include('admin.layout.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">
                                @yield('namePage')
                            </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2022 <a href="{{Url('/')}}"> RPC-Karya </a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b></b>
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{asset('assets')}}/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <!-- <script src="{{asset('assets')}}/plugins/chart.js/Chart.min.js"></script> -->
    <!-- Sparkline -->
    <script src="{{asset('assets')}}/plugins/sparklines/sparkline.js"></script>

    <!-- jQuery Knob Chart -->
    <script src="{{asset('assets')}}/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <!-- <script src="{{asset('assets')}}/plugins/moment/moment.min.js"></script> -->
    <!-- <script src="{{asset('assets')}}/plugins/daterangepicker/daterangepicker.js"></script> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <script src="{{asset('assets')}}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
    <!-- Summernote -->
    <script src="{{asset('assets')}}/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- toastr -->
    <script src="{{asset('assets')}}/plugins/toastr/toastr.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset('assets')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- datatables -->
    <script src="{{asset('assets')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets')}}/dist/js/adminlte.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{asset('assets')}}/dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('assets')}}/dist/js/pages/dashboard.js"></script>

    <script>
        //message with toastr
        @if(session()->has('success'))

        toastr.success("{{ session('success') }}", 'BERHASIL!');

        @elseif(session()->has('error'))

        toastr.error("{{ session('error') }}", 'GAGAL!');

        @endif
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.table-data').DataTable({
                "language": {
                    "sEmptyTable": "Tidak ada data",
                    "sProcessing": "Sedang memproses...",
                    "sLengthMenu": "Tampilkan _MENU_ data",
                    "sZeroRecords": "Tidak ditemukan data yang sesuai",
                    "sInfo": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "sInfoEmpty": "Menampilkan 0 sampai 0 dari 0 data",
                    "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
                    "sInfoPostFix": "",
                    "sSearch": "Cari:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "Pertama",
                        "sPrevious": "<",
                        "sNext": ">",
                        "sLast": "Terakhir"
                    }
                }
            });
            // $('.table-data').DataTable();
        });
    </script>

    <script type="text/javascript" language="javascript">
        $('.summer-data').summernote({
            height: "305px",
            styleWithSpan: false,
            toolbar: [
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                // ['fontname', ['fontname']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['color', ['color']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']],
                // ['insert',['videoAttributes','media','link','hr','']],
            ]
        });
        $('.summer-tanya').summernote();
        $('.summer-full').summernote({
            height: "100vh",
            styleWithSpan: false,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['fontname', ['fontname']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'hr']],
                ['view', ['fullscreen', 'codeview']],
                ['help', ['help']]
            ]
        });
    </script>

</body>

</html>