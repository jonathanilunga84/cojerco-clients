<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="">
	<meta name="author"      content="Jonathan Ilunga (jonathanilunga84@gmail.com)">
	
	<title>Fonctionnement</title>

	<link rel="shortcut icon" href="assets/images/logo1.ico"> 
	
	<link rel="stylesheet" media="screen" href="">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template http://fonts.googleapis.com/css?family=Open+Sans:300,400,700 -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<style>
		#head{min-height: 80px ; }
		.cot{padding-bottom:0px; margin-bottom:0px;}
		#titre1{font-size-: 20px;  background: red-; margin-bottom: 0px; line-height:; font-weight:bold;  font-family:"Open sans", Helvetica, Arial;}
		.maincontent p{text-align:justify;font-size: 18px;}
		#info-left{margin-top: 50px;}
		
	</style>
<body>
	<!-- Fixed navbar -->
		<?php include('header.html'); ?>
	<!-- /.navbar -->

	<header id="head" class=""><div class="container cot"><h1 id="titre1" >FONCTIONNÉMENT</h1></div></header>

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li><a href="missions.php">Missions</a></li>					
			<li>Fonctionnement</li>
			<li ><a href="historique.php">Historique</a></li>
			<li class="active"><a href="composition.php">Composition</a></li>
		</ol>

		<div class="row">
			
			<!-- Sidebar -->
			<aside class="col-md-4 sidebar sidebar-left">
				<?php include('footer-post-left.html'); ?>	
			</aside>
			<!-- aside class="col-md-1">
			</aside -->
			<!-- /Sidebar -->

			<!-- Article main content -->
			<article class="col-md-8 maincontent"> 
				<header class="page-header">
					<h3 class="page-title">Fonctionnement de COJERCO</h3>
				</header>
				<p>Le Collectif des Jeunes Réalistes du Congo est piloté par un Président Exécutif National qui le gère au quotidien. Son bureau est composé de vingt-cinq Membres, dont un Président, deux
					vice-présidents, Un Secrétaire Exécutif National, un vice-Secrétaire, dix Coordonnateurs aux
					fonctions énoncées dans la Composition (point 9) et leurs vice-Coordonnateurs Ces Membres constituent la Coordination Exécutive Nationale.
				</p>
				<p>Aux côtés de celle-ci, se trouvent également
					d’autres organes, comme le Collège des Partenaires et les Membres d’honneur. Pour une plus
					large représentation, le COJERCO a procédé à l’installation des comités exécutifs provinciaux
					dans le Tanganyika, les Sud et Nord-Kivu, Kinshasa, Haut-Katanga. D’autres comités exécutifs
					provinciaux seront installés progressivement. Les Coordonnateurs provinciaux rendent compte
					de leur gestion mensuelle à la Coordination Nationale.
				</p>
				<p>De l’administration en
					passant par des questions juridiques, politiques et stratégiques...jusqu’aux sports et loisirs, tous ces secteurs sont animés par des responsables
					dont l’expérience n’est plus à démontrer. Il est, donc, heureux d’accueillir d’autres compétences susceptibles d’apporter un plus à la construction de l’édifice qu’est le COJERCO.
				</p>
				
			</article>
			<!-- /Article -->

		</div>
		
	</div>	<!-- /container -->
	
	<!-- footer -->
		<?php include('footer.html'); ?>
	<!-- /footer -->
		
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery-3.5.1.js"></script>
	<script src="assets/js/bootstrap3.0.3.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>