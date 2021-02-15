<?php

function profitableGable($prob,$prize, $pay){
    $net_outcome = $prob * $prize;
    if($net_outcome>$pay){
        echo "True";
    }
    else {
        echo "False";
    }

}

$prob = .2;
$prize = 50;
$pay = 9;
profitableGable($prob,$prize,$pay);