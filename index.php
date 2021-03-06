<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>index</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="dependencies/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="dependencies/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="dependencies/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="dependencies/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dependencies/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="dependencies/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="dependencies/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="dependencies/plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition layout-fixed">
    <div class="wrapper">
<br><br><br>
<br>
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Calculator</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form role="form" action="calculat.php" method="post">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="first_integer">First integer</label>
                                            <input type="number" step="0.01" class="form-control" id="first_integer" name="first_integer" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="operation">Operation</label>
                                            <select class="form-control" id="operation" name="operation">
                                                <option value="plus">+</option>
                                                <option value="minus">-</option>
                                                <option value="mult">*</option>
                                                <option value="div">\</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="second_integer">Second integer</label>
                                            <input type="number" step="0.01" class="form-control" id="second_integer" name="second_integer" placeholder="">
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" name="calculat" class="btn btn-primary">Calculat</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    <!-- /.content -->
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="dependencies/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="dependencies/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dependencies/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dependencies/dist/js/demo.js"></script>

</body>

</html>
