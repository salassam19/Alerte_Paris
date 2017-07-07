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
    <?php include('logo.php') ?>

    <!-- .cd-primary-nav -->
    <?php include('formulaire_login_p1.php') ?>

    <!-- .cd-secondary-nav -->
    <?php include('nav2.php') ?>
  </header>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
  <script>
    if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
  </script>
  <script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>