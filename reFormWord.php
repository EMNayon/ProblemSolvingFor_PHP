<?php

function get_word($str1, $str2){
    echo ucwords($str1).$str2;

}

$str1 = "seas";
$str2 = "onal";
get_word($str1,$str2);