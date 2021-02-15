<?php
// // Order of replacement
// $str     = "Line 1 /// Line 2\rLine 3\r\nLine 4\n";
// //$order   = array("\r\n", "\n", "\r",);
// $replace = '/';

// // Processes \r\n's first so they aren't converted twice.
// $newstr = str_replace($str, $replace, $str);

// echo $newstr;

// function joinPath($x, $y){
//     echo strlen($x)."\n";
//     $arr = str_split($x);
//     $arr1 = array("/");
//     for($i=count($arr); $i <= count($arr); $i++){
//         if($arr[$i] == $arr1[0]){
//             echo $x;
//         }
//         else {
//             echo $x."/";
//         }
//     }
//     echo "\n";
//     $str = $x."/".$y;
//     echo $str."\n";
    
//     $ch = array("/","//","///","////");
//     echo str_replace($ch,"/",$str);
    
    
//     // $order = array("/", "//","///","////");
//     // $replace = "/";
//     // echo str_replace($order, $replace, $x);
// }

// $x = "1h1gRAxu/";
// $y = "/apQtQYgl";
// joinPath($x,$y);

// function joinPath($x,$y){
//     //echo $x[0];
//     $len = strlen($x);
//     if($x[$len-1]=='/'){
//         $x =  $x;
//     }
//     else {
//         $x =  $x."/";
//     }
//     echo "\n";
//     echo $str = $x.$y."\n";
//     $order = array("/", "//","///","///");
//     echo str_replace($order,"/",$str);
// }

// $x = "portion1";
// $y = "portion2";

// joinPath($x,$y);

// function checkPalindrome($str){
//     $str1 = $str;
//     $temp = 0;
//     for($i=strlen($str)-1;$i<=0;$i--){
//         $temp = $str[$i];
//         $str= $str1;
//         $str1 = $temp;
//     }
//     if($str1 == $str){
//         echo "Palindrome";
//     }
//     else {
//         echo "not Palindrome";
//     }
// }

// $str = "momr";
// checkPalindrome($str);



function howManyTimes($num){
    echo "Ed".str_repeat('a',$num)."bit";
}

$num = 5;

howManyTimes($num);