<?php

function capMe($arr) {
    $arr = (array)$arr;
    $length = count($arr);
    for($i=0; $i <$length; $i++){
        $str=($arr[$i]);
        echo $str." ";
        $length1 = strlen($arr[$i]);

        echo $length1."\n";
        
        for($j = 0;$j < $length1;$j++){
            if(65<=$str[$j] && $str[$j]<=90){
                echo ord($str[$j])+32;
            }
            
            }
            echo "\n";
        }
}



$arr = array("MAVIS", "senaida", "letty");
capMe($arr);