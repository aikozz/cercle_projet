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

<body class="home" onload="popup()">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
		</div>
	</div>
	<!-- /.navbar -->

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
					<button class="btn btn-danger" id="cancel" onclick="cancel()" type="button">Annuler</button>

				</div>
			</div>
		</div>
	</div>

	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">

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

	</div> <!-- /container -->

	<!-- FAQ - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">

			<h3 class="text-center thin">Foire aux questions</h3>

			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">

				</div>
			</div> <!-- /row  -->

		</div>
	</div>
	<!-- /FAQ -->

	<footer id="footer" class="top-space">

		<div class="footer1">
			<div class="container">
				<div class="row">

					<div class="col-md-12 widget text-center">
						<h3 class="widget-title">Exostimes</h3>
						<div class="widget-body">
							<p>Entreprise blablabla</p>
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
								Copyright &copy; 2021, Voice Reservation. Design par <a href="http://gettemplate.com/" rel="designer">gettemplate</a>
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
	<script src="assets/js/template.js"></script>
	<script src="action.js"></script>
	<script src="https://kit.fontawesome.com/3693fa4061.js" crossorigin="anonymous">
	</script>
</body>

</html>