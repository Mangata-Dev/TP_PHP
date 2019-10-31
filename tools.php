<?php
function createFile($fileName, $data){
   $f = fopen("./participants/$fileName.txt",'r');
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
  $dir = dir("./participants");
  echo "<ul>";
     while($nom = $dir->read()){
         echo "<li>$nom <br/><li>";
     }
  echo "<ul>";
}
 ?>
