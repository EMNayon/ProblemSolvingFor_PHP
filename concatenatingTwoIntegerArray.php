<?php

function concat($arr1, $arr2){
    $arr1 = (array)($arr1);
    $arr2 = (array)($arr2);
    
    print_r(array_merge($arr1,$arr2));
}

$arr1 = array(1,2,4);
$arr2 = array(5,6,7);
concat($arr1,$arr2);