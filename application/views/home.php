<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Rania Store</title>
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css"?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()."assets/css/font-awesome.min.css"?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()."assets/css/prettyPhoto.css"?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()."assets/css/price-range.css"?>" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()."assets/css/animate.css"?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()."assets/css/main.css"?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url()."assets/css/responsive.css"?>" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="<?php echo base_url()."assets/images/home/favicon.ico"?>">
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
							<li><a href=""><i class="fa fa-phone"></i> +62 83 848922245</a></li>
							<li><a href=""><i class="fa fa-envelope"></i> raniastore78@gmail.com</a></li>
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
								<li><a href="<?php echo site_url()."/welcome/login/"?>"><i class="fa fa-lock"></i>Login / Register</a></li>
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
								<li><a href="" class="active">Home</a></li>
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
	
	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
						</ol>
						
						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Rania</span> Store</h1>
									<h2>Trendy Hijab Online Shop</h2>
									<p>Rania Store merupakan sebuah toko online Hijab yang menyediakan berbagai produk Hijab yang trendy dan fashionable. </p>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url()."assets/images/home/cewek1edit.png"?>" class="girl img-responsive" alt="" />
								</div>
							</div>
							
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Rania</span> Store</h1>
									<h2>100% Made in Indonesia</h2>
									<p>Produk-produk yang kami tawarkan 100% merupakan hasil karya nusantara. </p>
								</div>
								<div class="col-sm-6">
									<img src="<?php echo base_url()."assets/images/home/cewek1edit.png"?>" class="girl img-responsive" alt="" />
								</div>
							</div>
						</div>
						
						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2></a>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<?php foreach ($data as $x) { ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="">
											<span class="badge pull-right"><i class="fa"></i></span>
											<?= $x['nama_kategori'] ?>
										</a>
									</h4>
								</div>
							</div>
						<?php } ?>
						</div>
					</div><!--/category-products-->		
					<div class="left-sidebar">
						<h2>Brands</h2></a>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						<?php foreach ($merk as $x) { ?>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="">
											<span class="badge pull-right"><i class="fa"></i></span>
											<?= $x['nama_merk'] ?>
										</a>
									</h4>
								</div>
							</div>
						<?php } ?>
						</div>
					</div><!--/category-products-->	
				</div>

				<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Best Sellers</h2>
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
								<?php foreach ($produkBest as $x) { ?>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url()."uploads/".$x['gambar']?>" alt="" />
													<h2><?= $x['nama_produk'] ?></h2>
													<p><?= $x['harga_produk'] ?></p>
													<a href="<?php echo site_url().'/welcome/viewDetailIDBest/'.$x['id_produk'] ?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>View Detail</a>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
								</div>
							</div>
								
<!-- 
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a> -->			
						</div>
					</div><!--/recommended_items-->	
				</div>
			</div>
		</div>
	</section>
	
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
					<p class="pull-left">Copyright &copy; 2017 Rania Store </p>
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