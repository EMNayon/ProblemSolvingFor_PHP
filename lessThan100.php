<?php

function lessThan($a, $b){
    $c = $a + $b;
    if($c<100){
        echo "True.";
    }
    else {
        echo "false";
    }
}

$a = "22";
$b = "88";
lessThan($a, $b);