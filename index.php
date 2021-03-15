<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Le Collectif des Jeunes Réalistes du Congo, en sigle COJERCO, est une structure(ASBL) qui s’occupe essentiellement des questions inhérentes à la Jeunesse et au développement de notre Cher et beau pays, la République Démocratique du Congo. ">
	<meta name="author"      content="Jonathan Ilunga (jonathanilunga84@gmail.com)">
	
	<title>COJERCO</title> 

	<link rel="shortcut icon" href="assets/images/logo1.ico">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	
	<!--link rel="stylesheet" href="assets/css/carousel.css"-->

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<!-- link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" -->
	<!--link rel="stylesheet" href="assets/css/font-awesome.min.css"-->

	<link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >

	<link rel="stylesheet" href="assets/css/main.css">

	
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]> 
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<style>
	.cont{
		background: red-;
		padding: 0px;
	}
	.carrousel{
		/*margin-top: 0px;*/
		background-color: yellow-;		
		padding-top: px;
		margin: 0px;
	}
	.carrousel-right{
		background: green-;
		background: silver;
	}
	#carrousel{		
		padding: 0px;
	}
	.bg-primary{
		background: #03224c;
	} 
	.bg-secondary{
		background: #1C2331;
	} 
	.bg-dark{
		background: #7f7f7f;		
	} 
	#footer-post-left2{ display: none; }
	@media (max-width: 991px){
   		#footer-post-left{display: none;}
	}
	@media (max-width: 992px){
   		#footer-post-left2{display: block;}
	}

</style>

<body class="home">
	<!-- Fixed navbar <div></div> -->
		<?php include('header.html'); ?>
	<!-- /.navbar -->

	<!-- Header --> 
	<header id="head">
		<div class="container">			
			<div class="row">
			
				<div class="col-md-8- col-sm-10-">
				<h1 class="lead">PRÉSENTATION</h1> 
				<p class="tagline-"><a href=""></a></p>
				<p class="tagline">Le Collectif des Jeunes Réalistes du Congo, en sigle COJERCO, est une structure(ASBL) qui
					s’occupe essentiellement des questions inhérentes à la Jeunesse et au développement de notre
					Cher et beau pays, la République Démocratique du Congo.
				</p>
				<p class="tagline">
					Pour y arriver, le COJERCO fait sien le combat de prise de conscience chez les jeunes de plus en plus victimes expiatoires du
					déséquilibre social entre la classe politique majoritairement noble et une Jeunesse naïvement à
					la solde du politique.
					Son siège social est situé à Lubumbashi, dans la province du Haut-Katanga. Sa devise est :
					Jeunesse-Réalisme-Développement. Son logo est composé de quatre lignes un peu courbes
					aux couleurs du drapeau de la RDC, à l’intérieur desquelles se trouvent deux bras se serrant les
					mains, synonymes de la cohésion, l’unité.
				</p>
				</div>
				
			</div>
		</div>
	</header>
	<!-- /Header -->

	
	<!-- Carousel -->
	<div class="container-fluid cont">
		<div class="row carrousel">
			<div id="footer-post-left" class="col-md-4">
				<?php include('footer-post-left.html'); ?>
			</div>

			<div class="col-md-8 col-xs-12"  id="carrousel">
				
					<!--img src="assets/images/slideIndex/IMG-1.jpg"/>
					<img src="assets/images/slideIndex/IMG-2.jpg"/>
					<img src="assets/images/slideIndex/IMG-3.jpg"/ -->	

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  					<!-- Indicators -->
					 <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>

					  <!-- Wrapper for slides -->
					<div class="carousel-inner">
					    <div class="item active">
					      <img src="assets/images/slideIndex/IMG-1.jpg" alt="IMG1" />
					      <div class="carousel-caption">
					       <h3></h3>
					      </div>
					    </div>

					    <div class="item">
						  <img src="assets/images/slideIndex/IMG-2.jpg" alt="IMG2" />
						  <div class="carousel-caption">
						    <h3></h3>
						   
						  </div>
						</div>

						<div class="item">
						  <img src="assets/images/slideIndex/IMG-3.jpg" alt="IMG3"/>
						  <div class="carousel-caption">
						    <h3></h3>
						  </div>
						</div>
					</div>

					<!-- Controls -->
				  	<!--a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
				   		<span class="glyphicon glyphicon-chevron-left"></span>
				  	</a>
				  	<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
				    	<span class="glyphicon glyphicon-chevron-right"></span>
				  	</a-->
				</div>		
			</div>
			<div id="footer-post-left2" class="col-md-4">
				<?php include('footer-post-left.html'); ?>
			</div>				
		</div>
	</div>
	<!-- /Carousel -->

	<!-- footer --> 
		<?php include('footer.html'); ?>
	<!-- /footer -->

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->	

	<script src="assets/js/jquery-3.5.1.js"></script>
	<script src="assets/js/bootstrap3.0.3.min.js"></script>

	<!--script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script-->

	
	<script type="text/javascript" src="assets/js/carousel.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	
</body>
</html>