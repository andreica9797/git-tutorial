<?php


 


function  cifra_stotina($broj) {
   $c = $broj /100 % 10;
   if ($c == 5) {

   echo "jeste pet";

   return $c;
   }
   echo "nije pet";
}

cifra_stotina(4566);


?>

