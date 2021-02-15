<?php

function equalSlices($total_slices, $no_recipients, $slices_each){
    $total = $no_recipients * $slices_each;
    if($total < $total_slices){
        return true;
    }
    else {
        return false;
    }
}

$tSlices = 11;
$nRecipient = 5;
$sEach = 2;
equalSlices($tSlices,$nRecipient,$sEach);

pi();

echo pi()/2;