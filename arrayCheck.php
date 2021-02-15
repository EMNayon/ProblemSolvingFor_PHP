<?php

function check($arr, $num){
    $arr = (array)($arr);
    $length = count($arr);
    for($i = 0;$i < $length;$i++){
        if($arr[$i]==$num){
            echo "True";
            break;
        }
    }
    
    

}

$arr = array(1,2,35);
$num = 5;
check($arr, $num);