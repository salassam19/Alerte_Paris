<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=David+Libre|Hind:400,700" rel="stylesheet">

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

	<title>Alerte Paris</title>
</head>
<body>
	<!--Barre de navegation et logo  -->
	<header class="cd-auto-hide-header">
		<?php include('logo.php') ?>

		<!-- .cd-primary-nav -->
		<?php include('formulaire_login_p1.php') ?>
	</header>
	<section class="cd-hero">
		<div class="cd-hero-content">
			<?php include('carousel.php') ?>
			<!-- your content here -->
		</div>
	</section> <!-- .cd-hero -->

	<nav class="cd-secondary-nav">
		<?php include('nav2.php') ?>
	</nav> <!-- .cd-secondary-nav -->
	<div>
		<div>
			<a href="img/VERONICA1.jpg"><img id="veronica" src="img/VERONICA1.jpg" alt="..." class="img-thumbnail" style="width: 250px;"></a>
			<h4>Veronica OCHOA TEJEDA</h4>
			<p></p>
		</div>
		<div>
			<a href="img/VINCENT1.jpg"><img id="vincent" src="img/VINCENT1.jpg" alt="..." class="img-thumbnail" style="width: 250px;"></a>
			<h4>Vincent DARRE</h4>
			<p>Le super blagueur</p>
		</div>
		<div>
			<a href="img/AURORE1.jpg"><img id="aurore" src="img/AURORE1.jpg" alt="..." class="img-thumbnail" style="width: 250px;"></a>
			<h4>Aurore TRINCI</h4>
			<p>Je rigole trop</p>
		</div>
		<div>
			<a href="img/SALIM.gif"><img id="salim" src="img/SALIM.jpg" alt="..." class="img-thumbnail" style="width: 250px;"></a>
			<h4>Salim ASSAMEUR</h4>
			<p>Le sympathique associable</p>
		</div>
		<div>
			<a href="img/DAVID.jpg"><img id="david" src="img/DAVID.jpg" alt="..." class="img-thumbnail" style="width: 250px;"></a>
			<h4>David AMORIM</h4>
			<p></p>
		</div>
	</div>
	<nav class="">
		<?php include('contact.php') ?>
	</nav>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script>
		if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
	</script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>