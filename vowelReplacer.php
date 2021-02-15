<?php

function replaceVowels($str, $ch){
    $vowel = '/[aeiou]/i';
    return preg_replace($vowel,$ch,$str);

}

function replaceVowels1($str, $ch){
    $vowels = str_split('aeiou');
    return str_replace($vowels,$ch,$str);

}

function replaceVowels2($str, $ch){
    $vowel = '/[aeiou]/i';
    return preg_replace($vowel,$ch,$str);

}

$str = "All is foor in love and war";
$ch = '*';
echo replaceVowels($str, $ch)."\n";
echo replaceVowels1($str,$ch);



