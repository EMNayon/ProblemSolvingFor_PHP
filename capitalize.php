<?php

function makeTitle($str){
    $str = (string)($str);
    $length = strlen($str);
    echo ucwords($str);

    // for($i = 0; $i <$length;$i++){
    //     if(65<= ord($str[$i]) && 90>= ord($str[$i])){
    //         echo $str[$i];
    //     }
    //     elseif($str[$i]==" "){
    //         echo " ";
    //     }
    //     elseif(97<=ord($str[$i] && 122>=ord($str[$i]))){
    //         echo chr(ord($str[$i])-32);
    //     }
    // }

}

$str = "This Is A Title";
makeTitle($str);

