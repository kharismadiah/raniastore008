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
								<li><a href="<?php echo site_url()."/welcome/index/"?>">Home</a></li>
								<li><a href="<?php echo site_url()."/welcome/shop/"?>">Products</a></li>
								<!-- <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="" class="active">Products</a></li>
										<!-- <li><a href="<?php echo site_url()."/welcome/product_details/"?>">Product Details</a></li>
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
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-6">
							<div class="view-product">
								<img src="<?php echo base_url()."/uploads/".$gambar; ?>" alt="" />
								<!-- <h3>ZOOM</h3> -->
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
<!-- 								  <?php foreach ($produk as $x) { ?>
								    <div class="carousel-inner">
										<div class="item active">
										<img src="<?php echo base_url()."uploads/".$x['gambar']?>" alt=""></a>
										</div>										
									</div>
									<?php } ?> -->

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>
						</div>

						
						<div class="col-sm-6">
							<div class="product-information"><!--/product-information-->
								<!-- <img src="<?php echo base_url()."assets/images/product-details/new.jpg"?>" class="newarrival" alt="" /> -->
								<h2> <?php echo $nama_produk; ?> </h2>
								<!-- <h2><?= $x['nama_produk'] ?></h2> -->
								<img src="<?php echo base_url()."assets/images/product-details/rating.png"?>" alt="" />
								<br>
								<span>
									<span> <?php echo $harga_produk; ?> </span>
									<!-- <label>Quantity:</label>
									<input type="text" value="3" /> -->
<!-- 									<button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button> -->
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Category :</b> <?php echo $kategori_produk; ?></p>
								<p><b>Brand :</b> <?php echo $merk_produk; ?> </p>
							</div><!--/product-information-->
						</div>
						
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#reviews" data-toggle="tab">Review</a></li>
							</ul>							
							<div class="tab-pane fade active in" id="reviews" >
								<?php echo form_open(site_url('welcome/createReview')); ?>
								<form method="POST" name="review">
								<div class="col-sm-12">
<!-- 									<ul>
										<li name="time_review"><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
										<li name="date_review"><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
									</ul> -->									
									<span>
										<input type="text" name="nama_review" placeholder="Your Name"/>
										<input type="email" name="email_review" placeholder="Email Address"/>
									</span>
									<textarea name="pesan_review" placeholder="Review"></textarea>
									<button type="submit" name="submit" value="Submit" class="btn btn-default pull-right">Submit</button>
								</div>
								</form>
							</div>	
						</div>
					</div><!--/category-tab-->					
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