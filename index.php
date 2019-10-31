<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION["counter"])){
    $_SESSION["counter"] = 1 ;
  }else{
    $_SESSION["counter"]++;
  }
  include("config.php");
?>
<html lang="fr" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <title><?= TITRE_DU_SITE ?></title>
  </head>
  <body>
    <div class="container">
      <div class="row">
          <h1><?= "Hello world" ?></h1>
      </div>
    </div>
    <?php include("jeu.php"); ?>
    <div class="container">
      <div class="row">
          <a href="login.php">Se connecter</a>
          <a href="calculatrice.php">Calculatrice</a>
      </div>
      <div class="row">
        <p>j'ai visiter <?= $_SESSION["counter"] ?> fois</p>
      </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script type="text/javascript" src="script.js"></script>
  </body>
</html>
