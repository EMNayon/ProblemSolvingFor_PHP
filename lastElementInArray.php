<?php

function getLastItem($arr){
    // $arr = (array)$arr;
    // $length = count($arr);
    // for($i = 0;$i < $length;$i++){
    //     if($arr[$i]==$arr[$length-1]){
    //         echo $arr[$i];
    //     }
    //     else{
    //         echo "false";
    //     }
    // }

    $arr = (array)$arr;
    $length = count($arr);
    for($i=0;$i<$length;$i++){
        echo $arr[$length-1];
    break;
    }

}

$arr = array(1,2,3,5,6,10,1);
getLastItem($arr);