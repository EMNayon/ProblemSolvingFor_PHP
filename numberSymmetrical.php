<?php

function isSymmetrical($num){
    $num1 = $num;
   
    $reverce = 0;
    while($num != 0) {
        $reverce = $reverce * 10 + $num % 10;
        $num = (int) ($num / 10);
    }
    if($num1 == $reverce){
        echo "Symmatrical number";
    }
    else {
        echo "Not Symmatrical number";
    }

}

$num = 7227;
isSymmetrical($num);