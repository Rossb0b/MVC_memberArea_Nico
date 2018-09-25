<?php
session_start();

?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="shortcut icon" href="img/favicon.ico">
  <!-- Place favicon.ico in the root directory -->

  <!-- Bootstrap 4.0 stylesheet -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">


  <!-- Personnal stylesheet -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!-- Add your site or application content here -->
<?php 
if (!empty($_SESSION['pseudo']))
{
  ?>
  <p class="text-center">Bonjour <?= $_SESSION['pseudo']; ?> vous êtes connecté à notre site.</p>

  <a href="logout.php">
    <input type="button" value="Se déconnecter" style="position:absolute; top:0; right:0;">
  </a>
<?php
}
else 
{
  ?>
  <div class="container col-6 mx-auto" style="text-align:right;">

    <form method="post" action="index.php">
      <p>
        <div class="col-12">
          <label for="identifiant">Veuillez indiquer votre identifiant.</label>
          <input type="text" name="identifiant">
        </div>
        
        <div class="col-12">
          <label for="password-check">Veuillez indiquer votre mot de passe.</label>
          <input type="password" name="password-check">  
        </div>

        <label for="auto_connection">Connection automatique</label>
        <input type="checkbox" name="auto_connection">
      
        <input type="submit" value="Se connecter"/>
      </p>
    </form>

    <p>Pas encore membre ? <a href="register.php">Inscrivez-vous !</a></p>

  </div>  
  <?php        
}
?>





  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>

</html>
