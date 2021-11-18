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

<<<<<<< Updated upstream
<body class="home">
=======
<body class="home" onload="init()">
>>>>>>> Stashed changes
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
<<<<<<< Updated upstream
				<p class="lead"><?php //getLastKeyword(); 
								?></p>
=======
				<div class='alert alert-success visually-hidden' id="alert" role='alert'>
					Action effectué avec succès !
				</div>
			
				<!-- Button trigger modal -->
				<button type="button" id="open" class="btn btn-primary btn-lg m-2" data-bs-toggle="modal" data-bs-target="#ModalForm">
					Ouvrir le pop-up
				</button>
>>>>>>> Stashed changes
			</div>
		</div>
	</header>
	<!-- /Header -->
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">

			<h3 class="text-center thin">Statistiques</h3>

			<div class="row d-flex justify-content-center">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption">
						<h4><i class="fa fa-cogs fa-5"></i>Nombre de mots clé détecté</h4>
					</div>
					<div>
						<canvas id="keywords"></canvas>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption">
						<h4><i class="fas fa-phone-volume"></i>Nombres de conversation en cours</h4>
					</div>
					<div class="h-body text-center">
						1
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption">
						<h4><i class="fas fa-robot"></i>Nombres d'actions exécutées</h4>
					</div>
					<div class="h-body text-center">
						1
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption">
						<h4><i class="fab fa-raspberry-pi"></i>Suivi du Raspberry</h4>
					</div>
					<div>
						<canvas id="monitoring"></canvas>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption">
						<h4><i class="fa fa-star fa-5"></i>Mot clé les plus populaires</h4>
					</div>
					<div>
						<canvas id="doughnuts_popular"></canvas>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption">
						<h4><i class="fas fa-hotel"></i>Réservations les plus populaires</h4>
					</div>
					<div>
						<canvas id="doughnuts_resa"></canvas>
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
				<h3>Documentation d'installation</h3>
				<p>La documentation décrivant étape par étape, de façon concise l'installation dans le but de faciliter la prise en main
					de l'utilisateur.
					Une version complète est à retrouvée ci-dessous.
					<p class="text-center"><a class="btn btn-success btn-large"><i class="fa fa-download" aria-hidden="true"></i> Télécharger</a></p>
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Documentation d'utilisation</h3>
				<p>La documentation d'utilisation décrite afin que l'utilisateur ait une vision d'ensemble de l'utilisation possible de l'outil.
					Une version complète est à retrouvée ci-dessous.
					<p class="text-center"><a class="btn btn-success btn-large"><i class="fa fa-download" aria-hidden="true"></i> Télécharger</a></p>
					
				</p>
			</div>
		</div> <!-- /row -->

<<<<<<< Updated upstream
		<div class="jumbotron top-space">
			<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
			<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
		</div>
=======
>>>>>>> Stashed changes
	</div> <!-- /container -->

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">

					<div class="col-md-12 widget text-center">
						<h3 class="widget-title">Exostimes</h3>
						<div class="widget-body">
							<p>Tour opérateur expert du voyage dans les îles.</p>
						</div>
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
								Cercle de projet G4 - 2021 - Equipe 3 Paris.
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
<<<<<<< Updated upstream
=======
	<script src="action.js"></script>
	<script src="https://kit.fontawesome.com/3693fa4061.js" crossorigin="anonymous">
	</script>

	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script>
		<?php include 'stats/setup.js'; ?>
		<?php include 'stats/config.js'; ?>

		const keywords = new Chart(
			document.getElementById('keywords'),
			config_keywords
		);

		const doughnuts_popular = new Chart(
			document.getElementById('doughnuts_popular'),
			config_popular
		);

		const doughnuts_resa = new Chart(
			document.getElementById('doughnuts_resa'),
			config_resa
		);

		const monitoring = new Chart(
			document.getElementById('monitoring'),
			mconfig
		);
	</script>

>>>>>>> Stashed changes
</body>

</html>