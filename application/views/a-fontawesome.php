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
                        <a href="<?php echo site_url()."/Admin/dataReseller/"?>" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Data Reseller</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url()."/Admin/dataProduk/"?>" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Data Produk</a>
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
                        <h4 class="page-title">Fontawesome Page</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url()."/welcome/dataReseller/"?>">Data Reseller</a></li>
                            <li class="active">Fontawesome Icons</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <section>
                                <h3 class="box-title">20 New Icons in 4.5</h3>
                                <div class="icon-list-demo clearfix">
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bluetooth"></i>fa fa-bluetooth</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bluetooth-b"></i>fa fa-bluetooth-b</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-codiepie"></i>fa fa-codiepie</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-credit-card-alt"></i>fa fa-credit-card-alt</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-edge"></i>fa fa-edge</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-fort-awesome"></i>fa fa-fort-awesome</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-hashtag"></i>fa fa-hashtag</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-mixcloud"></i>fa fa-mixcloud</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-modx"></i>fa fa-modx</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pause-circle"></i>fa fa-pause-circle</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-pause-circle-o"></i>fa fa-pause-circle-o</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-percent"></i>fa fa-percent</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-product-hunt"></i>fa fa-product-hunt</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-reddit-alien"></i>fa fa-reddit-alien</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-scribd"></i>fa fa-scribd</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-shopping-bag"></i>fa fa-shopping-bag</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-shopping-basket"></i>fa fa-shopping-basket</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-stop-circle"></i>fa fa-stop-circle</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-stop-circle-o"></i>fa fa-stop-circle-o</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-usb"></i>fa fa-usb</div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <section id="spinner">
                                <h4><b>Spinner Icons</b></h4>
                                <div class="alert alert-success"> These icons work great with the <code>fa-spin</code> class. Check out the <a href="" class="alert-link">spinning icons example</a>. </div>
                                <div class="row icon-list-demo">
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spin fa-circle-o-notch"></i> fa-circle-o-notch</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spin fa-cog"></i> fa-cog</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spin fa-gear"></i> fa-gear <span class="text-muted">(alias)</span> </div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spin fa-refresh"></i> fa-refresh</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-spin fa-spinner"></i> fa-spinner</div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <section id="brand">
                                <h3 class="box-title">Brand Icons</h3>
                                <div class="alert alert-success">
                                    <ul class="margin-bottom-none padding-left-lg">
                                        <li>All brand icons are trademarks of their respective owners.</li>
                                        <li>The use of these trademarks does not indicate endorsement of the trademark holder by Font Awesome, nor vice versa.</li>
                                    </ul>
                                </div>
                                <div class="row icon-list-demo">
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-adn"></i> fa-adn</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-android"></i> fa-android</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-apple"></i> fa-apple</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-behance"></i> fa-behance</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-behance-square"></i> fa-behance-square</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bitbucket"></i> fa-bitbucket</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bitbucket-square"></i> fa-bitbucket-square</div>
                                    <div class="col-sm-6 col-md-4 col-lg-3"><i class="fa fa-bitcoin"></i> fa-bitcoin <span class="text-muted">(alias)</span> </div>
                                </div>
                            </section>
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
