<?php

function findSmallestNum($arr){
        $arr1 = (array)($arr);
        $length = count($arr1);
        echo $length." ";
        sort($arr1);
        echo $arr1[0];
        for($i = 0;$i<$length;$i++){

        }
}

$arr = array(34,15,88,2);
findSmallestNum($arr);