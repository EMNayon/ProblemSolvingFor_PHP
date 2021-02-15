<?php

function hurdleJump($arr, $num){
    $arr = (array) $arr;

    for($i=0;$i<count($arr);$i++){
        if($arr[$i]<= $num){
            echo "true"." ";
            continue;
            
        }
        else {
            echo "false"." ";
            
        }
        
    }
    
}

$arr = array(1,2,1);
$num = 1;
hurdleJump($arr,$num);