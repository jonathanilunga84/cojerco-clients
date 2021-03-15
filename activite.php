<?php require('upload_controller.php'); $req = postsActivite(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Jonathan Ilunga (jonathanilunga84@gmail.com)">
	
	<title>ACTIVITÉ</title>

	<link rel="shortcut icon" href="assets/images/logo1.ico">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	<style>
		#head{padding-top-:; min-height: 80px ; }
		.cot{padding-bottom:0px; margin-bottom:0px;}
		#titre1{font-size: 20px;  background: red-; margin-bottom: 0px; line-height:; font-weight:bold;  font-family:"Open sans", Helvetica, Arial;}
	</style>
</head>	
<body>
	<!-- Fixed navbar -->
	<!-- Fixed navbar <div></div> -->
		<?php include('header.html'); ?>
	<!-- /.navbar -->
	<!-- /.navbar -->
	<header id="head" class=""><div class="container cot"><h1 id="titre1" >NOS ACTIVITÉS <h1></div></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
				<li><a href="index.php">Accueil</a></li>
				<li class="">Activités</li>
				<li class=""><a href="quiSommeNous.php">QUI SOMMES NOUS</a></li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-md-12 col-xs-12 maincontent">
				<header class="page-header"> 
					<h1 class="page-title"></h1>
				</header>
				<p>
					En tant qu’Organisation Non Gouvernementale, le COJERCO entend développer des activités
					aussi bien dans les secteurs social, économique, sanitaire que politique.
					Dans le secteur social, par exemple, il est question d’intervenir par des assistances, des œuvres
					humanitaires et philanthropiques, l’apprentissage aux métiers et artisanat, soutenir
					l’entrepreneuriat de la Jeunesse congolaise ;
					En ce qui concerne le secteur économique, seront entreprises certaines activités dans le seul but
					de booster le développement, etc. ;
					Au secteur sanitaire, des projets d’assistance pharmaceutiques, de construction de centres de
					santé, etc. ;
					Dans le secteur politique, une contribution, par des sensibilisations et des conférences-débats
					sur des sujets d’actualité, des Jeunes du COJERCO est d’importance capitale
				</p>
				
				<div id="" class="col-md-12">
					<!--h3>Tout nos activé réalisé sont enumérer sur ce Tableau visiter en détaill seul qui vous convient</h3-->
					<h4>Toutes nos activités réalisées sont énumerées dans ce tableau. Prière visiter celle qui vous convient, en cas de besoin!</h4>
					<div class="row">
						<div class="col-xs-12  col-lg-12 col-md-12">
							<table class="table table-bordered table-striped table-condensed">
								<thead>
									<tr>
										<th>Titre activite</th>
										<th>Resumé de l'activité</th>
										<th>Date activite</th>	
									</tr>							
								</thead>
								<tfoot>
									<tr>
										<th>Titre activite</th>
										<th>Resumé de l'activité</th>
										<th>Date activite</th>								
									</tr>	
								</tfoot>
								<?php while($data = $req->fetch()) 
								{
								?>
									
										<tr>
											<td><h4><a href="/cojerco/upload_index.php?action=activite&Id=<?php echo $data['id']; ?>"> <?php echo nl2br(htmlspecialchars($data['titre'])); ?></a></h4></td>
											<td><p><?php echo nl2br(htmlspecialchars($data['resume_activite']));?></p></td>
											<td><p><?php echo nl2br(htmlspecialchars($data['dateposte']));?></p></td>
											
											<!--td><p><?php //echo nl2br(htmlspecialchars($data['id']));?></p></td-->
										</tr>
									
								<?php								
								}$req->closeCursor();						
								?>	
							</table>							
						</div>						
					</div> 
				</div> 
			</article>
			<!-- /Article -->
		</div>
	</div>	<!-- /container -->
	
	<!-- footer -->
		<?php include('footer.html'); ?>
	<!-- /footer -->
		
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modalimge.js"></script>
	<script src="assets/js/jquery-3.5.1.js"></script>
	<script src="assets/js/bootstrap4.min.js"></script>


	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>

	<!-- script src="assets/js/carousel1.js"></script -->
	<script>
		function fenetre_modal(){
			//alert('bjr');
			//document.getElementById('myModal').('show');
			//window.open('index.php','new_window','width=600px,height=600px');
			//var $dialog = document.getElementById('myModal');
		}
		/*$(document).ready(function (){
				//var popId = $($this).attr('rel');
				//$(popId).fadeIn().css({'width':Number(po)})
				alert('jguery');
			});*/
			
	</script>

</body>
</html>