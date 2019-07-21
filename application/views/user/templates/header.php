<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Apotek Pharm24 | Official Website</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="<?= base_url('assets/user/images/favicon.ico');?>">
	<link rel="apple-touch-icon" href="<?= base_url('assets/user/images/icon.png');?>">

	<link rel="stylesheet" href="<?= base_url('assets/user/css/bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/user/css/plugins.css');?>">
	<link rel="stylesheet" href="<?= base_url('assets/user/style.css');?>">

   <link rel="stylesheet" href="<?= base_url('assets/user/css/custom.css');?>">

	<script src="<?= base_url('assets/user/js/vendor/modernizr-3.5.0.min.js');?>"></script>
</head>
<body>

	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="<?= base_url('');?>">
								<img src="<?= base_url('assets/user/images/logo/logo.png');?>" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="<?= base_url('');?>">Home</a></li>
								<li class="drop"><a href="produk.html">Promo</a></li>
								<li class="drop"><a href="#">Produk</a>
									<div class="megamenu mega02">
										<ul class="item item02">
											<li class="title">Obat-obatan</li>
											<?php	foreach ($all_kategori as $show): ?>
												<li><a href="produk.html"><?= $show->nama_kategori;?></a></li>
											<?php endforeach; ?>
										</ul>
										<ul class="item item02">
											<li class="title">Alat Kesehatan</li>
											<?php	foreach ($all_alat as $show): ?>
												<li><a href="produk.html"><?= $show->nama_kategori;?></a></li>
											<?php endforeach; ?>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="#">FaQ</a>
									<div class="megamenu mega02">
										<ul class="item item02">
											<li class="title">Cara Memesan</li>
											<li><a href="<?= base_url('index.php/userhome/faqCaraPesanObat');?>">Cara Memesan Obat</a></li>
											<li><a href="faq.html">Menukarkan Resep</a></li>
										</ul>
										<ul class="item item02">
											<li class="title">Lain-lain</li>
											<li><a href="faq.html">Ada pertanyaan lain?</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="tentang.html">Tentang Kami</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
							<li class="shop_search"><a class="search__active" href="#"></a></li>
							<li class="wishlist"><a href="#"></a></li>
							<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun">3</span></a>
								<!-- Start Shopping Cart -->
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>3 items</span>
											<span>Cart Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>$66.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="cart.html">Go to Checkout</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.html"><img src="<?= base_url('assets/user/images/product/batuk.png');?>" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
														<span class="prize">$30.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 01</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="<?= base_url('assets/user/images/product/batuk.png');?>" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Impulse Duffle</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img src="<?= base_url('assets/user/images/product/batuk.png');?>" alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Compete Track Tote</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a></li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- End Shopping Cart -->
							</li>
							<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
								<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Notifikasi</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<a href="" class="currency-trigger">Pesanan Produk</a>
													<a href="" class="currency-trigger">Pesanan Resep</a>
												</div>
											</div>
										</div>
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Akunku</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Profilku</a></span>
														<span><a href="<?= base_url('index.php/Pelanggan/daftar');?>">Daftar Akun</a></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Start Mobile Menu -->
				<div class="row d-none">
					<div class="col-lg-12 d-none">
						<nav class="mobilemenu__nav">
							<ul class="meninmenu">
								<li><a href="index.html">Home</a></li>
								<li><a href="produk.html">Promo</a></li>
								<li><a href="#">Produk Obat-obatan</a>
										<ul>
											<li><a href="produk.html">Ibu dan Anak</a></li>
											<li><a href="produk.html">Suplemen</a></li>
											<li><a href="produk.html">Perawatan Tubuh</a></li>
											<li><a href="produk.html">Herbal</a></li>
											<li><a href="produk.html">Kesehatan Pria</a></li>
											<li><a href="produk.html">Kesehatan Wanita</a></li>
										</ul>
							</li>
							<li>
										<ul>
											<li><a href="produk.html">Untuk Rumah</a></li>
											<li><a href="produk.html">Untuk Dokter</a></li>
										</ul>
								</li>
								<li><a href="#">FaQ</a>
										<ul>
											<li><a href="faq.html">Memesan Obat</a></li>
											<li><a href="faq.html">Menukarkan Resep</a></li>
										</ul>
									</li>
									<li>
										<ul>
											<li><a href="faq.html">Ada pertanyaan lain?</a></li>
										</ul>
								</li>
								<li><a href="tentang">Tentang Kami</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- End Mobile Menu -->
	            <div class="mobile-menu d-block d-lg-none">
	            </div>
	            <!-- Mobile Menu -->
			</div>
		</header>
