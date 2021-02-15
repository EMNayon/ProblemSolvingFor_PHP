<?php

function upwardTrend($arr){
    for($i=0;$i<count($arr)-1;$i++){
        if($arr[$i] > $arr[$i+1]){
            echo "false"."\n";
        }
    }
    echo "true";
}

$arr = array(1,2,3,4,"5");
upwardTrend($arr);