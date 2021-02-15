<?php

function comp($strA, $strB){
    $length = strlen($strA);
    $length1 = strlen($strB);

    if($length==$length1) {
        echo "True";
    }
    else {
        echo "False";
    }
}

$strA = "AB";
$strB = "CDe";
comp($strA, $strB);