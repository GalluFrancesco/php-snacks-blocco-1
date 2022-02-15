<?php
  $randomArray = [];
  
  while(count($randomArray)<15) {
    $randomNum = rand(1, 16);  
    if(!in_array($randomNum, $randomArray)) {
      $randomArray[] = $randomNum;
    } 
  };

  var_dump( $randomArray);
 ?>