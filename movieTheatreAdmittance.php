<?php

function acceptIntoMovie($age,$isSupervised){
    if(14 >= $age && $isSupervised == true) {
        echo "true";
    }
    elseif(14 >= $age && $isSupervised == false){
        echo "false";
    }
    elseif(14 < $age && $isSupervised == true){
        echo "true";
    }
    elseif(14 < $age && $isSupervised == false){
        echo "false";
    }
    else{
        echo "true";
    }

}

$age = 16;
$bool = false;

acceptIntoMovie($age,$bool);