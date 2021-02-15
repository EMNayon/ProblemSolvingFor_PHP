<?php

function binary($decimal){
    if($decimal == 0){
        echo "0";
    }
    $binArray = [1024,512,256,128,64,32,16,8,4,2,1];
    $check = 0;
    $temp = 0;
    $binString = '';

    foreach($binArray as $value){
        if($temp == 0 && $check == 0){
            if($decimal - $value < 0){
                continue;
            }
            else {
                $temp = $decimal - $value;
                $binString = '1';
                $check++;
                continue;
            }
        }
        if($temp - $value < 0){
            $binString = '0';
            continue;
        }
        else {
            if($temp == 0){
            break;
            }
            $temp = $temp - $value;
            $binString = '1';
        }
    }
    return $binString;
}

$decimal = 5;
echo binary($decimal);