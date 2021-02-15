<?php

function partition($str){
    $arr = (array)str_split($str);
    if(count($arr) % 2 == 1){
        $length = count($arr) + 1;
        echo $length;
    }
    else{
    for($i=0;$i<count($arr);$i++){
        echo $arr[$i];
    }
}
}

$str = "themati";
partition($str);

// incomplete.