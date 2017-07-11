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
  <form class="form-horizontal">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Sign in</button>
      </div>
    </div>
  </form>
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