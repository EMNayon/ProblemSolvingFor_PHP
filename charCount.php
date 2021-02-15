<?php

function charCount($str,$str1){
    $count = 0;
    for($i=0; $i < strlen($str1);$i++){
        if($str1[$i]== $str){
            $count++;
        }
        
    }
    echo $count;
}

$str = "e";
$str1 = "Chamber of secrets";

charCount($str,$str1);