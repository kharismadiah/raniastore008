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
                    <a class="logo" href="<?php echo site_url()."/welcome/readAkun"?>">
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
                        <a href="<?php echo site_url()."/welcome/dataReseller/"?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Data Reseller</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."/welcome/dataProduk/"?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Data Produk</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."/welcome/basic_table/"?>" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Basic Table</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."/welcome/icons/"?>" class="waves-effect"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Icons</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."/welcome/blank_page/"?>"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Blank Page</a>
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
                        <h4 class="page-title">Basic Table</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url()."/welcome/dataReseller/"?>">Data Reseller</a></li>
                            <li class="active">Basic Table</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Basic Table</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Deshmukh</td>
                                            <td>Prohaska</td>
                                            <td>@Genelia</td>
                                            <td>admin</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Deshmukh</td>
                                            <td>Gaylord</td>
                                            <td>@Ritesh</td>
                                            <td>member</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sanghani</td>
                                            <td>Gusikowski</td>
                                            <td>@Govinda</td>
                                            <td>developer</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Roshan</td>
                                            <td>Rogahn</td>
                                            <td>@Hritik</td>
                                            <td>supporter</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Joshi</td>
                                            <td>Hickle</td>
                                            <td>@Maruti</td>
                                            <td>member</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Nigam</td>
                                            <td>Eichmann</td>
                                            <td>@Sonu</td>
                                            <td>supporter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
