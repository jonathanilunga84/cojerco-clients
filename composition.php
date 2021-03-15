<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Jonathan Ilunga (jonathanilunga84@gmail.com)">
	
	<title>compostion</title>

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
		/* pour le text de l'entete */
		#head{padding-top-:; min-height: 80px ; }
		.cot{padding-bottom:0px; margin-bottom:0px; background: yellow-; }
		#titre1{font-size: 20px;  background: red-; margin-bottom: 0px; line-height:; font-weight:bold;  font-family:"Open sans", Helvetica, Arial;}
		
		#tdspan{ font-size:18px; text-align:center; background-color:red;}
	</style>
 
<body>
	<!-- Fixed navbar -->
		<?php include('header.html'); ?> 
	

	<!-- /.navbar -->

	<header id="head" class=""><div class="container cot"><h1 id="titre1" >COMPOSITION <h1></div></header>

	<!-- container -->
	<div class="container">
		
		<ol class="breadcrumb">
			<li><a href="index.php">Accueil</a></li>
			<li ><a href="historique.php">Historique</a></li>
			<li><a href="missions.php">Missions</a></li>					
			<li><a href="fonctionnement.php">Fonctionnement</a></li>
			<li  class="active">Composition</li>
		</ol>
		

		<div class="row">
			
		
			<!-- Article main content -->
			<article class="col-md-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Compostion de COJERCO</h1>
				</header>
				<p>Le Collectif des Jeunes Réalistes du Congo, en sigle COJERCO, est une structure(ASBL) qui
					s’occupe essentiellement des questions inhérentes à la Jeunesse et au développement de notre
					Cher et beau pays, la République Démocratique du Congo.
				</p>
				<p>D’après sa structure, le COJERCO comprend les Membres ci-après :</p>
				<!--table class="table table-bordered table-striped table-condensed">
					<thead>
						<tr>
							<th>Fonction</th>
							<th>Nom</th>
							<th>Prenom</th>	
						</tr>							
					</thead>
					<tfoot>
						<tr>
							<th>Fonction</th>
							<th>Nom</th>
							<th>Prenom</th>								
						</tr>	
					</tfoot>
					<tbody>
						<tr>
							<td>Président National</td>								
							<td>MOSENGO</td>
							<td>Steve</td>												
						</tr>
						<tr>
							<td>Vice-Président National chargé de l’administration</td>	
							<td>KALONGA</td>
							<td>WILLIAM</td>											
						</tr>
						<tr>
							<td>Vice-Présidente Nationale de Genre, Femme et Enfant</td>
							<td>Cynthia</td>	
							<td>NAWEJ</td>						
						</tr>
						<tr>
							<td>Secrétaire Exécutif National</td>
							<td>Trésor</td>
							<td>MUMBA</td>							
						</tr>
						<tr>
							<td>Secrétaire Exécutif National Adjoint</td>
							<td>MURHULA KABANGO </td>
							<td>WILHEM</td>												
						</tr>
						<tr>
							<td>Coordonnateur National chargé de la mobilisation, sports et loisirs</td>
							<td>LUBA WA MUKALAY</td>	
							<td>Emery</td>						
						</tr>
						<tr>
							<td>Coordonnateur National Adjoint chargé de la mobilisation, sports et loisirs</td>
							<td>KASHIBA </td>
							<td>Murphy</td>												
						</tr>
						<tr>
							<td>Coordonnateur National chargé d’études, projets et missions</td>
							<td>KABAMBI ILUNGA </td>
							<td>Fidèle</td>	
																		
						</tr>	
						<tr id="tdspan">
							<td id="" colspan="3"><a href="assets/document/listeMembreFonction.pdf">Lire la suite</a></td>													
						</tr>			
						
					</tbody>
				</table-->
			</article>
			<!-- /Article -->

			<!-- Sidebar -->
			<asside class="col-md-4">
				<?php include('footer-post-left.html'); ?>
			</asside>
			<!-- /Sidebar -->

		</div>
	</div>	<!-- /container -->
	
	<!-- footer -->
		<?php include('footer.html'); ?>
	<!-- /footer -->

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery-3.5.1.js"></script>
	<script src="assets/js/bootstrap4.min.js"></script>

	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>