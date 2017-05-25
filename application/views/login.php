<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | Rania Store</title>
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()."assets/css/font-awesome.min.css"?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()."assets/css/prettyPhoto.css"?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()."assets/css/price-range.css"?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()."assets/css/animate.css"?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()."assets/css/main.css"?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()."assets/css/responsive.css"?>" rel="stylesheet" type="text/css">
    <!--
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    -->    
    <link rel="shortcut icon" href="<?php echo base_url()."assets/images/ico/favicon.ico"?>">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()."assets/images/ico/apple-touch-icon-144-precomposed.png"?>">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()."assets/images/ico/apple-touch-icon-114-precomposed.png"?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()."assets/images/ico/apple-touch-icon-72-precomposed.png"?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()."assets/images/ico/apple-touch-icon-57-precomposed.png"?>">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
				<div class="col-sm-6">
					<div class="contactinfo">
						<ul class="nav nav-pills">
							<li><a href="#"><i class="fa fa-phone"></i> +62 83 848922245</a></li>
							<li><a href="#"><i class="fa fa-envelope"></i> raniastore78@gmail.com</a></li>
						</ul>
					</div>
				</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<!-- <li>
									<a href=""><i class="fa fa-google-plus"></i></a>
								</li> -->
								<li>
									<a href="https://www.instagram.com/raniastore78/" target="_blank"><i class="fa fa-instagram" ></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?php echo site_url()."/welcome/index/"?>"><img src="<?php echo base_url()."assets/images/home/logo1.png"?>" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="" class="active"><i class="fa fa-lock"></i>Login / Register</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="<?php echo site_url()."/welcome/index/"?>">Home</a></li>
								<li><a href="<?php echo site_url()."/welcome/shop/"?>">Products</a></li>
								<!-- <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="<?php echo site_url()."/welcome/shop/"?>">Products</a></li>
										<li><a href="<?php echo site_url()."/welcome/product_details/"?>">Product Details</a></li>
                                    </ul>
                                </li> -->
								<li><a href="<?php echo site_url()."/welcome/contact_us/"?>">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form method="POST" action="<?php echo site_url()."/welcome/loginUser"?>"
						>
							<!--Username-->
							<input type="text" name="username" placeholder="Username" title="Masukkan Username">
							<!--Password-->
							<input type="password" name="password" placeholder="Password" title="Masukkan Password">
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
				<!--sign up form-->
					<div class="signup-form">
						<h2>New User Sign Up!</h2>
						<?php echo form_open_multipart(site_url('welcome/createAkun')); ?>
						<form method="POST" name="signup" enctype="multipart/form-data">
							<!--Username-->
							<input type="text" name="username" placeholder="Username" title="Masukkan Username">
							<!--Email-->
							<input type="email" name="email" placeholder="Email" title="Masukkan Alamat Email">
							<!--Password-->
							<input type="password" name="password" placeholder="Password" title="Masukkan Password">
							<!--Phone No-->
							<input type="text" name="phone" placeholder="Phone Number" title="Masukkan Nomor Telepon">
							<!--Gambar-->
                            <input type="file" name="gambar" size="20" placeholder="Profile Picture" title="Masukkan Profile Picture">
                            <input type="hidden" name="is_submit" value="1" />
							<button type="submit" name="submit" value="Submit" class="btn btn-default">Sign Up</button>
						</form>
					</div>
				<!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->	
	
	<footer id="footer"><!--Footer-->
		<div class="footer-widget">
			<div class="container">
				<!-- <div class="row"> -->
					<div class="col-sm-3">
						<div class="single-widget">
							<h2><span>Rania </span>Store</h2>
							<p>Trendy Hijab Online Shop</p>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<ul class="nav nav-pills nav-stacked">
								<li>
									<h2><a data-toggle="collapse" href="#ContactUs">
										<span class="left"><i class="">Contact Us</i></span>
									</a></h2>
									<div id="ContactUs" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<address>
												<p>Mobile : +62 838 489 222 45</p>
												<p>Email : raniastore78@gmail.com</p>
						    				</address>
										</ul>
									</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<ul class="nav nav-pills nav-stacked">
								<li>
									<h2><a data-toggle="collapse" href="#CompInfo">
										<span class="left"><i class="">Company Information</i></span>
									</a></h2>
									<div id="CompInfo" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<address>
						    					<p>We treat our costumer like our family</p>
						    				</address>
										</ul>
									</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="single-widget">
							<ul class="nav nav-pills nav-stacked">
								<li>
									<h2><a data-toggle="collapse" href="#StoreLoc">
										<span class="left"><i class="">Store Location</i></span>
									</a></h2>
									<div id="StoreLoc" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<address>
						    					<p>Rania Store</p>
												<p>Jl. Raya Gubeng No.114, Surabaya</p>
												<p>Jawa Timur, Indonesia</p>
						    				</address>
										</ul>
									</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2017 Rania Store </p>
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
  
	<script src="<?php echo base_url()."assets/js/jquery.js"?>"></script>
	<script src="<?php echo base_url()."assets/js/bootstrap.min.js"?>"></script>
	<script src="<?php echo base_url()."assets/js/jquery.scrollUp.min.js"?>"></script>
	<script src="<?php echo base_url()."assets/js/price-range.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.prettyPhoto.js"?>"></script>
    <script src="<?php echo base_url()."assets/js/main.js"?>"></script>
</body>
</html>