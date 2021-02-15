<?php

function findDigitAmount($num){
    $count=0;
    $num = strval($num);
    for($i=0;$i<strlen($num);$i++){
        $count++;
    }
    echo $count;

}

$num = 1234;
findDigitAmount($num);