<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

	<title>Voice Reservation</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">

	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<script src="https://kit.fontawesome.com/3693fa4061.js" crossorigin="anonymous"></script>

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom">
		<div class="containerHeader">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="../cercle_projet/assets/images/logo.png"></a>
			</div>
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<p class="lead"><?php //getLastKeyword(); 
								?></p>
			</div>
		</div>
	</header>
	<!-- /Header -->
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="containerStat">

			<h3 class="text-center thin">Statistiques</h3>

			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption">
						<h4><i class="fa fa-cogs fa-5"></i>Nombre de mots clé totaux</h4>
					</div>
					<div class="h-body text-center">
						<p><?php //getCountKeyword(); 
							?></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption">
						<h4><i class="fa fa-star fa-5"></i>Mot clé le plus populaire</h4>
					</div>
					<div class="h-body text-center">
						<p><?php //getPopularKeyword(); 
							?></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption">
						<h4><i class="fas fa-hotel"></i>Dernière réservation</h4>
					</div>
					<div class="h-body text-center">
						<p><?php //getLastResa(); 
							?></p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption">
						<h4><i class="fab fa-raspberry-pi"></i>Suivi du Raspberry</h4>
					</div>
					<div class="h-body text-center">
						<p></p>
					</div>
				</div>
			</div> <!-- /row  -->

		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">
		<h2 class="text-center top-space">Les différentes documentations</h2>
		<br>
		<div class="row">
			<div class="col-sm-6">
				<h3><u>Documentation d'installation</u></h3>
				<p>La documentation décrivant étape par étape, de façon concise l'installation dans le but de faciliter la prise en main
					de l'utilisateur.
					Une version complète est à retrouvée ci-dessous.
				<p class="text-center top-space"><a class="btn btn-success btn-large"><i class="fa fa-download" aria-hidden="true"></i> Télécharger</a></p>
				</p>
			</div>
			<div class="col-sm-6">
				<h3><u>Documentation d'utilisation</u></h3>
				<p>La documentation d'utilisation décrite afin que l'utilisateur ait une vision d'ensemble de l'utilisation possible de l'outil.
					Une version complète est à retrouvée ci-dessous.
				<p class="text-center top-space"><a class="btn btn-success btn-large"><i class="fa fa-download" aria-hidden="true"></i> Télécharger</a></p>

				</p>
			</div>
		</div> <!-- /row -->
	</div> <!-- /container -->

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 widget text-center">
						<h3 class="widget-title">Équipe de développement</h3>
						<!-- <div class="widget-body"> !-->
						<section class="container">
							<div class="mx-5">
								<section class="inside">
									<h4>Nathan</h4>
								</section>
								<img src="../cercle_projet/assets/images/nathan.jpg" width="100" height="100">
							</div>
							<div class="imgs mx-2">
								<section class="inside">
									<h4>Justin</h4>
								</section>
								<img src="../cercle_projet/assets/images/justin.jpg" width="100" height="100">
							</div>
							<div class="imgs">
								<section class="inside">
									<h4>Quentin</h4>
								</section>
								<img src="../cercle_projet/assets/images/quentin.jpg" width="100" height="100">
							</div>
							<div class="imgs">
								<section class="inside">
									<h4>Adam</h4>
								</section>
								<img src="../cercle_projet/assets/images/adam.jpg" width="100" height="100">
							</div>
							<div class="imgs">
								<section class="inside">
									<h4>Sana</h4>
								</section>
								<img src="../cercle_projet/assets/images/sana.jpg" width="100" height="100">
							</div>
							<div class="imgs">
								<section class="inside">
									<h4>Ahmed</h4>
								</section>
								<img src="../cercle_projet/assets/images/ahmed.jpg" width="100" height="100">
							</div>
						</section>
					</div>
				</div>
				<!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-12 widget">
						<div class="widget-body">
							<p class="text-center">
								Copyright &copy; 2021, Voice Reservation. Projet G4 pour la société Exotismes</a>
							</p>
						</div>
					</div>

				</div>
				<!-- /row of widgets -->
			</div>
		</div>

	</footer>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>

	<!-- <script type="text/javascript">
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange
	</script> !-->

</body>

</html>