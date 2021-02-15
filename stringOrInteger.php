<?php

function intOrString($var){
   $temp = intval($var);
   
   if($temp == $var){
       echo "str";
   }
   else {
       echo "int";
   }
   
}

$str = 5;
intOrString($str);