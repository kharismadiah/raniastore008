<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url()."admin/plugins/images/favicon.png"?>">
    <title>Admin | Rania Store</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()."admin/bootstrap/dist/css/bootstrap.min.css"?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url()."admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css"?>" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url()."admin/plugins/bower_components/toast-master/css/jquery.toast.css"?>" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url()."admin/plugins/bower_components/morrisjs/morris.css"?>" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url()."admin/plugins/bower_components/chartist-js/dist/chartist.min.css"?>" rel="stylesheet">
    <link href="<?php echo base_url()."admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css"?>" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url()."admin/css/animate.css"?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url()."admin/css/style.css"?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url()."admin/css/colors/default.css"?>" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
    <!-- Preloader -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- Topbar header - style you can find in pages.scss -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="<?php echo site_url()."/Admin/readAkun"?>">
                        <b>
                            <img src="<?php echo base_url()."admin/plugins/images/admin-logo.png"?>" alt="home" class="dark-logo" />
                        </b>
                        <span class="hidden-xs">
                            <img src="<?php echo base_url()."admin/plugins/images/rsa1.png"?>" alt="home" class="light-logo" />
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                    <li>
                        <a class="profile-pic" href=""> <img src="<?php echo base_url()."admin/plugins/images/users/admin.png"?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">Admin</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?php echo site_url().'/Admin/readAkun' ?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Data Reseller</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."/Admin/dataProduk/"?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Data Produk General</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."/Admin/produkBest/"?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Data Produk Best Sellers</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."/Admin/reviewProduk/"?>" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Review Produk</a>
                    </li>
                    <div class="center p-20">
                        <a href="<?php echo site_url()."/welcome/login/"?>" class="btn btn-danger btn-block waves-effect waves-light">Logout</a>
                    </div>
                </ul>
            </div>
        </div>
        <!-- End Left Sidebar -->

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data Produk Best Sellers</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <!-- <a href="" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Update</a> -->
                        <ol class="breadcrumb">
                            <li class="page-scroll"><a href="<?php echo site_url()."/Admin/tombolTambahProdukBest/"?>">Tambah Produk</a></li>
                            <li class="page-scroll"><a href="<?php echo site_url()."/Admin/produkBest/"?>">Edit Produk</a></li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- .row -->
                    <div class="col-md-12 col-xs-12">
                        <div class="white-box">
                            <?php echo form_open_multipart(site_url('Admin/createProdukBest')); ?>
                                <div class="form-group">
                                    <label class="col-md-12" for="id_produk">ID PRODUK</label>
                                    <div class="col-md-12">
                                        <input type="text" name="id_produk" placeholder="Masukkan id produk" class="form-control form-control-line">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nama_produk" class="col-md-12">NAMA PRODUK</label>
                                    <div class="col-md-12">
                                        <input type="text" name="nama_produk" placeholder="Masukkan Nama Produk" class="form-control form-control-line" > </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="merk_produk">MERK</label>
                                    <div class="col-md-12">
                                        <input type="text" name="merk_produk" placeholder="Masukkan Merk Produk" class="form-control form-control-line" > </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="kategori_produk">KATEGORI</label>
                                    <div class="col-md-12">
                                        <input type="text" name="kategori_produk" placeholder="Masukkan Kategori Produk" class="form-control form-control-line"> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="harga_produk">HARGA</label>
                                    <div class="col-md-12">
                                        <input type="text" name="harga_produk" placeholder="Masukkan Harga Produk" class="form-control form-control-line" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12" for="gambar">GAMBAR</label>
                                    <div class="col-md-12">
                                        <input type="file" name="gambar" size="20" placeholder="Masukkan Harga Produk" class="form-control form-control-line" >
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="hidden" name="is_submit" value="1" />
                                    <button type="submit" name="submit" value="Submit" class="btn btn-default">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <?php echo form_close(); ?> -->
                    <!-- </form>  -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Rania Store</footer>
        </div>
        <!-- End Page Content -->
    </div>
    <!-- End Wrapper -->

    <!-- All Jquery -->
    <script src="<?php echo base_url()."admin/plugins/bower_components/jquery/dist/jquery.min.js"?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()."admin/bootstrap/dist/js/bootstrap.min.js"?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url()."admin/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url()."admin/js/jquery.slimscroll.js"?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url()."admin/js/waves.js"?>"></script>
    <!--Counter js -->
    <script src="<?php echo base_url()."admin/plugins/bower_components/waypoints/lib/jquery.waypoints.js"?>"></script>
    <script src="<?php echo base_url()."admin/plugins/bower_components/counterup/jquery.counterup.min.js"?>"></script>
    <!-- chartist chart -->
    <script src="<?php echo base_url()."admin/plugins/bower_components/chartist-js/dist/chartist.min.js"?>"></script>
    <script src="<?php echo base_url()."admin/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"?>"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url()."admin/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()."admin/js/custom.min.js"?>"></script>
    <script src="<?php echo base_url()."admin/js/dashboard1.js"?>"></script>
    <script src="<?php echo base_url()."admin/plugins/bower_components/toast-master/js/jquery.toast.js"?>"></script>
</body>

</html>
