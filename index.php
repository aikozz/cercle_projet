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

		<h2 class="text-center top-space">Frequently Asked Questions</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Which code editor would you recommend?</h3>
				<p>I'd highly recommend you <a href="http://www.sublimetext.com/">Sublime Text</a> - a free to try text editor which I'm using daily. Awesome tool!</p>
			</div>
			<div class="col-sm-6">
				<h3>Nice header. Where do I find more images like that one?</h3>
				<p>
					Well, there are thousands of stock art galleries, but personally,
					I prefer to use photos from these sites: <a href="http://unsplash.com">Unsplash.com</a>
					and <a href="http://www.flickr.com/creativecommons/by-2.0/tags/">Flickr - Creative Commons</a></p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Can I use it to build a site for my client?</h3>
				<p>
					Yes, you can. You may use this template for any purpose, just don't forget about the <a href="http://creativecommons.org/licenses/by/3.0/">license</a>,
					which says: "You must give appropriate credit", i.e. you must provide the name of the creator and a link to the original template in your work.
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Can you customize this template for me?</h3>
				<p>Yes, I can. Please drop me a line to sergey-at-pozhilov.com and describe your needs in details. Please note, my services are not cheap.</p>
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
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>

</html>