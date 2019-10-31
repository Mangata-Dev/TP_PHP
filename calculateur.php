<?php
$val1 = strip_tags (isset($_POST["val1"]) ? $_POST["val1"] : 1 );
$val2 = strip_tags (isset($_POST["val2"]) ? $_POST["val2"] : 1 );
$operator = isset($_POST["operator"]) ? $_POST["operator"] : "+" ;

switch ($operator) {
  case '+':
    $response = json_encode($arr = array( "results"=> $val1 + $val2)) ;
    echo $response;
  case '-':
    return $val1 - $val2 ;
  case '/':
    return $val1 / $val2 ;

  case '*':
    return $val1 * $val2 ;
  default:
    break;
}

?>
