<?php

  include("tools.php");
  $login = strip_tags (isset($_POST["log"]) ? $_POST["log"] : null);
  $pass = strip_tags (isset($_POST["pass"]) ? $_POST["pass"] : null);

 $user = isUser($login) ? $login : "not-user" ;
  if($user=="admin@gmail.com" && $pass="hello"){
    $user="admin";
  }
  switch ($user) {
    case 'admin':
        echo "Bonjour Admin, ceci est votre tableau de bord";
      break;
    case 'not-user':
        header("Location: login.php");
      break;
    default:
        echo "Bonjour $user, ceci est votre tableau de bord";
      break;
  }
  afficherParticipants();


?>
