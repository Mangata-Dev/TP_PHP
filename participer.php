<?php
  include("tools.php");
  $name = strip_tags (isset($_POST["nom"]) ? $_POST["nom"] : "Doe");
  $surname = strip_tags (isset($_POST["prenom"]) ? $_POST["prenom"] : "John");
  $email = strip_tags (isset($_POST["email"]) ? $_POST["email"] : "D.J@gmail.com");
  echo "Nom : $name <br>" ;
  echo "Prenom : $surname <br>" ;
  echo "Mail : $email" ;

  $donneesParticipant= $email.";".$name.";".$surname;
  createFile($email ,$donneesParticipant);
?>
