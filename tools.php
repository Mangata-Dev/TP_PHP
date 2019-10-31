<?php
function createFile($fileName, $data){
   $f = isUser($fileName);
   if(!$f){
     $f = fopen("./participants/$fileName.txt", "x+");
     fputs($f, $data);
     fclose($f);
   }else{
     updateFile($fileName,$data);
   }
}
function updateFile($fileName, $data){
  $fileName = "$fileName.txt";
   file_put_contents("./participants/$fileName", $data);
}
function isUser($login){
    return fopen("./participants/$login.txt",'r');
}
function afficherParticipants(){
  $participants = scandir("./participants");
  $participants =array_values(array_diff($participants, array('..', '.')));
  print_r($participants);

  echo "<ul>";
  foreach ($participants as $participant) {
    echo "<li>$participant<li>" ;
  }
  echo "<ul>";
}
 ?>
