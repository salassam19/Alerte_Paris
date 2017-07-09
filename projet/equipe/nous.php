<?php
?>
<!DOCTYPE html>
<html lang='fr'>
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="favi.ico" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- CSS BOOTSTRAP -->
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
	<link rel="stylesheet" href="CSS/reset.css"> <!-- CSS reset -->
	<Link  rel = "icône de  raccourci " href = "IMG/favicon.ico"  type = "image / x-icon" >
	<title>Alerte Paris !</title>
</head>
<body>
	<header class="cd-auto-hide-header">
		<!-- .logo -->
		<?php include('logo.php') ?>

		<!-- .cd-primary-nav -->
		<?php include('formulaire_login_p1.php') ?>

		<!-- .cd-secondary-nav -->
		<?php include('nav2.php') ?>
	</header>
	<div>
		<div>
			<img id="veronica" src="..." alt="..." class="img-circle">
			<h4>Veronica OCHOA TEJEDA</h4>
			<p>Je suis </p>
		</div>
		<div>
			<img id="vincent" src="..." alt="..." class="img-circle">
			<h4>Vincent DARRE</h4>
			<p>Je suis rogolo :P</p>
		</div>
		<div>
			<<img id="aurore" src="..." alt="..." class="img-circle">
			<h4>Aurore TRINCI</h4>
			<p>Je rigole trop</p>
		</div>
		<div>
			<img id="salim" src="..." alt="..." class="img-circle">
			<h4>Salim ASSAMEUR</h4>
			<p>Je suis super lourd dans tous les sens du term</p>
		</div>
		<div>
			<img id="david" src="..." alt="..." class="img-circle">
			<h4>David AMORIM</h4>
			<p>Je suis toujours dans mon code</p>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script>
		if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
	</script>
	<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>