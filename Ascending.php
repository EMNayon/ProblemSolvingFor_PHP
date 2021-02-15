<?php

function sortNumsAscending($arr){
    $arr = (array) ($arr);
    sort($arr);
    
    return $arr;
}

$arr = array(1,4,2,5,10,3);
echo sortNumsAscending($arr);

//$str =implode(sortNumsAscending($arr));
//echo $str;
