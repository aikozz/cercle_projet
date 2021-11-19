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
				<p class="lead"><?php //getLastKeyword(); 
								?></p>
			</div>
		</div>
	</header>
	<!-- /Header -->
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

		<div class="jumbotron top-space">
			<h4>Dicta, nostrum nemo soluta sapiente sit dolor quae voluptas quidem doloribus recusandae facere magni ullam suscipit sunt atque rerum eaque iusto facilis esse nam veniam incidunt officia perspiciatis at voluptatibus. Libero, aliquid illum possimus numquam fuga.</h4>
			<p class="text-right"><a class="btn btn-primary btn-large">Learn more »</a></p>
		</div>
	</div> <!-- /container -->

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
							<p class="simplenav">
								<a href="#">Home</a> | 
								<a href="sidebar-right.html">Sidebar</a> |

								<b><a href="signup.html">Sign up</a></b>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								projet <a href="https://www.institut-g4.fr" rel="designer">institut G4
 </a>pour la societe exotisme
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
</body>

</html>