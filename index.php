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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home" onload="init()">

	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.jpg" alt="Voice Reservation"></a>
			</div>
		</div>
	</div>
	<!-- /.navbar -->

	<!-- Modal -->
	<div class="modal fade" id="ModalForm" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title">Reconnaissance Vocale</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>

				<div class="modal-body text-center">

					<h6>Mot détecté : </h6>
					<br />
					<?php //getLastKeyword(); 
					?>

					<button class="btn btn-success" id="success" type="button">Valider</button>
					<button class="btn btn-danger" id="cancel" type="button">Annuler</button>

				</div>
			</div>
		</div>
	</div>

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<div class='alert alert-success visually-hidden' id="alert" role='alert'>
					Action effectué avec succès !
				</div>

				<!-- Button trigger modal -->
				<button type="button" id="open" class="btn btn-primary btn-lg m-2" data-bs-toggle="modal" data-bs-target="#ModalForm">
					Ouvrir le pop-up
				</button>

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
						<h4><i class="fas fa-phone-volume"></i>Nombres de conversations en cours</h4>
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
						<h4><i class="fa fa-star fa-5"></i>Mots clé les plus populaires</h4>
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
				<p>La documentation décrivant étape par étape, de façon concise l'installation dans le but de faciliter la prise en main de l'utilisateur. Une version complète est à retrouver ci-dessous.
				<p class="text-center"><a href="#" class="btn btn-success btn-large"><i class="fa fa-download" aria-hidden="true"></i> Télécharger</a></p>
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Documentation d'utilisation</h3>
				<p>La documentation d'utilisation décrite afin que l'utilisateur ait une vision d'ensemble de l'utilisation possible de l'outil. Une version complète est à retrouver ci-dessous.
				<p class="text-center"><a href="docs/DU-VR-FR.docx" class="btn btn-success btn-large"><i class="fa fa-download" aria-hidden="true"></i> Télécharger</a></p>

				</p>
			</div>
		</div> <!-- /row -->

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
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="assets/js/action.js"></script>
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

</body>

</html>