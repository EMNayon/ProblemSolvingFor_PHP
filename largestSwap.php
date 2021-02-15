<?php

function largestSwap($int) {
    $temp = 0;
    $temp1 = 0;
    $str = strval($int);
    for($i = 0; $i < 2; $i++){
        $temp = $str[0];
        $temp1 = $str[1];
        //swaping 
        $temp = $temp+$temp1;
        $temp1 = $temp - $temp1;
        $temp = $temp - $temp1;
        
    }
    $result = $temp.$temp1;

    if($result > $int){
        echo "false";
    }
    else {
        echo "True";
    }
}

$int = 43;
largestSwap($int);