<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=David+Libre|Hind:400,700" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" type="text/css" href="css/style_contact.css">

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

	<main class="cd-main-content sub-nav-hero">
		<div>
			<?php include('corps_indx.php') ?>
		</div>
	</main>
 	<nav class="">
		<?php include('contact.php') ?>
	</nav>

	<footer>
	
	</footer>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script>
		if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
	</script>

	<script src="js/main.js"></script>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"> </script>

</body>
</html>