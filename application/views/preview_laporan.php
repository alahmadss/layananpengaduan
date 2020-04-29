<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/landingpage/img/favicon.png')?>">
    <title>Pengaduan | Admin Page</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('assets/adminpage/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')?>" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url('assets/plugins/bower_components/toast-master/css/jquery.toast.css')?>" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url('assets/plugins/bower_components/morrisjs/morris.css')?>" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url('assets/adminpage/css/animate.css')?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url('assets/adminpage/css/style.css')?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url('assets/adminpage/css/colors/blue-dark.css')?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Navigation -->
        <?php $this->load->view('navbaradmin') ?>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Masukan Detail Laporan</h4> 
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <?php
                    $count= 0;
                    foreach ($tberita1->result() as $value) {
                ?>
                <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material" action="<?php echo base_url('admin/updatelapor')?>" method="post">
                                <div class="form-group">
                                    <label class="col-md-12">Id Pengaduan</label>
                                    <div class="col-md-12">
                                        <input type="text" value="<?php echo $idadu?>" class="form-control form-control-line" disabled> 
                                        <input type="hidden" value="<?php echo $idadu?>" class="form-control form-control-line" name="idpengaduan">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Tanggal Pengaduan</label>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control form-control-line" name="tanggalpengaduan"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">NIK</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control form-control-line" name="nik"> </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12">Isi Laporan</label>
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control form-control-line" name="isi"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Foto bukti </label>
                                    <div class="col-md-12">
                                        <input type="file" class="form-control form-control-line" name="foto"> </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-success">LAPOR!</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Pixel Admin brought to you by wrappixel.com </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="<?php echo base_url('assets/plugins/bower_components/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/adminpage/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url('assets/adminpage/js/jquery.slimscroll.js')?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url('assets/adminpage/js/waves.js')?>"></script>
    <!--Counter js -->
    <script src="<?php echo base_url('assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/bower_components/counterup/jquery.counterup.min.js')?>"></script>
    <!--Morris JavaScript -->
    <script src="<?php echo base_url('assets/plugins/bower_components/raphael/raphael-min.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/bower_components/morrisjs/morris.js')?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/adminpage/js/custom.min.js')?>"></script>
    <script src="<?php echo base_url('assets/adminpage/js/dashboard1.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/bower_components/toast-master/js/jquery.toast.js')?>"></script>
    </script>
</body>

</html>
