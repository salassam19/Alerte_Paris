<!DOCTYPE html>
<html lang="fr" class="no-js">
<head>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=David+Libre|Hind:400,700" rel="stylesheet">

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

	<script type="text/javascript" src="https://code.jquery.com/
	jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"> </script>
  	
		 <title>Alerte Paris</title>
</head>

<body>

<!--Barre de navegation et logo  -->
<header class="cd-auto-hide-header">
<?php include('logo.php') ?>
<div class="logo"><a href="#0"><img src="img/logoA.png" alt="Logo"></a></div>

	<nav class="cd-primary-nav">
	<?php include('formulaire_login_p1.php') ?>

		<a href="#cd-navigation" class="nav-trigger">
			<span>
				<em aria-hidden="true"></em>
				Menu
			</span>
	
	 <!--.cd-primary-nav -->
<!-- Login and Sign In -->
	<nav id="cd-navigation">
		<a href="login.php"><button type="submit" class="btn btn-default btn-lg" name="Validez">Login</button></a>
		<a href="index_main_form_fr.php"><button type="submit" class="btn btn-default btn-lg" name="Validez">Sign-In</button></a>
	</nav>
</nav>


</header>

<section class="cd-hero">
	<div class="cd-hero-content">
		<!-- your content here -->
	</div>
</section> <!-- .cd-hero -->

<nav class="cd-secondary-nav">
	<ul>
		<li><a href="nous.php">Qui nous sommes </a></li>
		<li><a href="Info_Important.php">Info important</a></li>
		<li><a href="Carte.php">Cartes</a></li>
		<li><a href="Archive.php">Archives</a></li>
		<li><a href="Image.php">Photos</a></li>
		<li><a href="Blog.php">Blog</a></li>
		<li><a href="contactV.php">Contact</a></li>
		<li><a class="twitter-timeline" href="https://twitter.com/AlerteParis"><img src="img/tw.png"></a></li>
		<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

	</ul>
</nav> <!-- .cd-secondary-nav -->

<main class="cd-main-content sub-nav-hero">
	<div>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, quos, voluptate, sunt, in suscipit quibusdam quis dignissimos eligendi repellendus ipsam exercitationem adipisci nostrum fugit accusamus quae cum nisi accusantium eaque.
		</p>

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit

		<p>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, quos, voluptate, sunt, in suscipit quibusdam quis dignissimos eligendi repellendus ipsam exercitationem adipisci nostrum fugit accusamus quae cum nisi accusantium eaque.
		</p>
	
	</div>

</main> 

<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1zAHgpTqKBW_OgeY8pPh6_f41ge0" width="640" height="480"></iframe>


	<footer></footer>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>

<script src="js/main.js"></script>



</body>
</html>