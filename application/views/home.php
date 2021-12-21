<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AmbCulinary</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicons
    ================================================== -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/template/img/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets/template/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?= base_url() ?>assets/template/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?= base_url() ?>assets/template/img/apple-touch-icon-114x114.png">

	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/template/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/template/fonts/font-awesome/css/font-awesome.css">

	<!-- Stylesheet
    ================================================== -->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/template/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/template/css/nivo-lightbox/nivo-lightbox.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/template/css/nivo-lightbox/default.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<!-- Navigation
    ==========================================-->
	<nav id="menu" class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand page-scroll" href="#page-top">AmbCulinary</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#about" class="page-scroll">About</a></li>
					<li><a href="#map-wrapper" class="page-scroll">Map</a></li>
					<!-- <li><a href="#restaurant-menu" class="page-scroll">Menu</a></li> -->
					<li><a href="#warung" class="page-scroll">Warung</a></li>
					<!-- <li><a href="#team" class="page-scroll">Chefs</a></li> -->
					<!-- <li><a href="#call-reservation" class="page-scroll">Contact</a></li> -->
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
	</nav>
	<!-- Header -->
	<header id="header">
		<div class="intro">
			<div class="overlay">
				<div class="container">
					<div class="row">
						<div class="intro-text">
							<h1>AmbCulinary</h1>
							<p>Kuliner Daerah Ambunten</p>
							<a href="#about" class="btn btn-custom btn-lg page-scroll">Yuk Cari Tahu</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- About Section -->
	<div id="about">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6 ">
					<div class="about-img"><img src="<?= base_url() ?>assets/template/img/about.jpg" class="img-responsive" alt=""></div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="about-text">
						<h2>Tentang AmbCulinary</h2>
						<hr>
						<p>AmbCulinary adalah website yang menampilkan berbagai informasi mengenai Kuliner yang ada di Kecamatan Ambunten, Kabupaten Sumenep</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="map-wrapper">
		<div class="section-title text-center center">
			<h2>Map Kuliner Ambunten</h2>
			<hr>
		</div>
		<div class="container">
			<iframe src="<?=base_url()?>/map" style="width: 100%;height: 560px;"></iframe>
		</div>
	</div>
	<div id="warung">
		<div class="section-title text-center center" style="background: #444 url(<?=base_url()?>assets/template/img/menu-bg.jpg) center center no-repeat fixed;background-size: cover;">
			<div class="overlay">
				<h2 style="color:white;">Daftar Warung</h2>
				<hr>
				<p>Nama - nama warung yang bisa kamu kunjungi untuk kulineran di daerah ambunten</p>
			</div>
		</div>
		<div class="container">
			<div class="row" id="list-warung">
			</div>
		</div>
	</div>
	<!-- Restaurant Menu Section -->
	<!-- <div id="restaurant-menu">
		<div class="section-title text-center center">
			<div class="overlay">
				<h2>Menu</h2>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="menu-section">
						<h2 class="menu-section-title">Breakfast & Starters</h2>
						<hr>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $35 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="menu-section">
						<h2 class="menu-section-title">Main Course</h2>
						<hr>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $45 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6">
					<div class="menu-section">
						<h2 class="menu-section-title">Dinner</h2>
						<hr>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $45 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $350 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-6">
					<div class="menu-section">
						<h2 class="menu-section-title">Coffee & Drinks</h2>
						<hr>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $35 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
						<div class="menu-item">
							<div class="menu-item-name"> Delicious Dish </div>
							<div class="menu-item-price"> $30 </div>
							<div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- Portfolio Section -->

	<!-- Team Section -->
	<!-- <div id="team" class="text-center">
		<div class="overlay">
			<div class="container">
				<div class="col-md-10 col-md-offset-1 section-title">
					<h2>Meet Our Chefs</h2>
					<hr>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
				</div>
				<div id="row">
					<div class="col-md-4 team">
						<div class="thumbnail">
							<div class="team-img"><img src="<?= base_url() ?>assets/template/img/team/01.jpg" alt="..."></div>
							<div class="caption">
								<h3>Mike Doe</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 team">
						<div class="thumbnail">
							<div class="team-img"><img src="<?= base_url() ?>assets/template/img/team/02.jpg" alt="..."></div>
							<div class="caption">
								<h3>Chris Doe</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 team">
						<div class="thumbnail">
							<div class="team-img"><img src="<?= base_url() ?>assets/template/img/team/03.jpg" alt="..."></div>
							<div class="caption">
								<h3>Ethan Doe</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- Call Reservation Section -->
	<!-- <div id="call-reservation" class="text-center">
		<div class="container">
			<h2>Want to make a reservation? Call <strong>1-887-654-3210</strong></h2>
		</div>
	</div> -->
	<!-- Contact Section -->
	<!-- <div id="contact" class="text-center">
		<div class="container">
			<div class="section-title text-center">
				<h2>Contact Form</h2>
				<hr>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" id="name" class="form-control" placeholder="Name" required="required">
								<p class="help-block text-danger"></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="email" id="email" class="form-control" placeholder="Email" required="required">
								<p class="help-block text-danger"></p>
							</div>
						</div>
					</div>
					<div class="form-group">
						<textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
						<p class="help-block text-danger"></p>
					</div>
					<div id="success"></div>
					<button type="submit" class="btn btn-custom btn-lg">Send Message</button>
				</form>
			</div>
		</div>
	</div> -->
	<div id="footer" style="background-color: transparent;">
		<div class="container-fluid text-center copyrights">
			<div class="col-md-8 col-md-offset-2">
				<div class="social">
					<ul>
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
				<p>&copy; <?=date('Y')?> AmbCulinary. All rights reserved. Designed by <a href="#" rel="nofollow">Qorthony</a></p>
			</div>
		</div>
	</div>
	<script>
		const rootEl = document.getElementById('list-warung')
		

		fetch("<?= base_url() ?>assets/kuliner_amb.geojson")
		.then(res=>res.json())
		.then(res=>{
			console.log(res)
			renderListWarung(res.features)
		})

		function renderListWarung(data) {
			let html="";
			data.forEach((item, key)=>{
				let props = item.properties
				html+=`
					<div class="col-sm-6 col-md-4 col-lg-4">
						<img class="img-responsive" style="height:200px" src="${props.gambar}" alt="">
						<h5>${props.NAMA}</h5>
						<p>${props.jenis_jualan}</p>
						<p>Rp. ${props.harga}</p>
					</div>
				`
			})

			rootEl.innerHTML = html;
		}
	</script>
	<script type="text/javascript" src="<?=base_url()?>assets/template/js/jquery.1.11.1.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/template/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/template/js/SmoothScroll.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/template/js/nivo-lightbox.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/template/js/jquery.isotope.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/template/js/jqBootstrapValidation.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/template/js/contact_me.js"></script>
	<script type="text/javascript" src="<?=base_url()?>assets/template/js/main.js"></script>
</body>

</html>
