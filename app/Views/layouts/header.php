<!DOCTYPE html>
<html lang="id">

<head>
	<title>Koleksi Digital Perpustakaan Kepresidenan Bogor</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/logo-setneg.png') ?>">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
	<link href="<?= base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?= base_url('booksaw/css/normalize.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('booksaw/icomoon/icomoon.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('booksaw/css/vendor.css') ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('booksaw/style.css') ?>">
<link rel="preload" as="image" href="_ISB1823_Z5.jpg">
<link rel="preload" as="image" href="_ISB1833_Z5.jpg">
<link rel="preload" as="image" href="_ISB1843_Z5.jpg">
<link rel="preload" as="image" href="_ISB1886_Z5.jpg">
<link rel="preload" as="image" href="_ISB1906_Z5.jpg">
<link rel="preload" as="image" href="_ISB2633_Z5.jpg">
<link rel="preload" as="image" href="_ISB2639_Z5.jpg">
<link rel="preload" as="image" href="_ISB2651_Z5.jpg">
<link rel="preload" as="image" href="_ISB2727_Z5.jpg">
<link rel="preload" as="image" href="_ISB9543-Z5-.jpg">
<link rel="preload" as="image" href="_ISB9566-Z5-.jpg">
<link rel="preload" as="image" href="_MDS1730_Z5.jpg">
<link rel="preload" as="image" href="_MDS1733_Z5.jpg">
<link rel="preload" as="image" href="_MDS1787_Z5.jpg">
<link rel="preload" as="image" href="_MDS1871_Z5.jpg">
<link rel="preload" as="image" href="_MDS1941_Z5.jpg">
<link rel="preload" as="image" href="_MDS1983_Z5.jpg">
<link rel="preload" as="image" href="_MDS2041_Z5.jpg">
<link rel="preload" as="image" href="_MDS2086_Z5.jpg">
<link rel="preload" as="image" href="_MDS2202_Z5.jpg">
<link rel="preload" as="image" href="_MDS2208_Z5.jpg">
<link rel="preload" as="image" href="_MDS2319_Z5.jpg">
	<style>
		

		.product-item figure.product-style {
			aspect-ratio: 3 / 4;        /* kotak proporsional */
			width: 100%;
			overflow: hidden;
			border-radius: 8px;
			background: #eee;
		}

		.product-item figure.product-style img {
			width: 100%;
			height: 100%;
			object-fit: contain;
		}

		.main-logo img {
			height: 60px !important;   /* <-- perbesar logo di sini */
			max-height: 70px;          /* batasi supaya gak bikin header makin tinggi */
			width: auto;               /* jaga aspek rasio tetap normal */
			object-fit: contain;
		}

#billboard {
			position: relative;
			height: 100vh;       
			min-height: 450px;
		}

			#bgCarousel,
			#bgCarousel .carousel-inner,
			#bgCarousel .carousel-item {
			height: 100%;
		}

		.carousel-bg {
			width: 100%;
			height: 100%;
			background-size: cover;
			background-position: center;
			background-repeat: no-repeat;
		}

		.carousel-overlay-content {
			position: absolute;
			top: 0; left: 0; 
			width: 100%; height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			z-index: 2;
		}

		.carousel-bg::after {
			content: "";
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.6);
			border-radius: inherit;
			pointer-events: none; 
		}
	</style>
</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

	<div id="header-wrap">
		<header id="header">
			<div class="container-fluid">
				<div class="row">

					<div class="col-md-2">
						<div class="main-logo">
							<a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/logo-setneg.png') ?>" alt="logo" style="height: 45px;"></a>
							<a href="<?= base_url('/') ?>"><img src="<?= base_url('assets/logo-perpusnas.png') ?>" alt="logo" style="height: 45px;"></a>
						</div>

					</div>

					<div class="col-md-10">

						<nav id="navbar">
							<div class="main-menu stellarnav">
								<ul class="menu-list">
									<li class="menu-item"><a href="#billboard" class="nav-link" style="font-weight:600;">Beranda</a></li>
									<li class="menu-item"><a href="#popular-books" class="nav-link" style="font-weight:600;">Koleksi</a></li>
								</ul>
								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>

							</div>
						</nav>

					</div>

				</div>
			</div>
		</header>

	</div>