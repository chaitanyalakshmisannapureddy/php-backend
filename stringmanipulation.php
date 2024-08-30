<?php
$length="chaitanya";
echo "length of string is:".strlen($length). "</br>";

$word_count="chaitanya lakshmi" ;
echo "the words count is:".str_word_count($word_count). "</br>";

//find the position of the word
$string="chaitanya lakshmi";
$pos=strpos($string, "lakshmi");
echo $pos."</br>";

//string modify function
$upper_case="chaitanya lakshmi";
echo "strupper()-".strtoupper($upper_case)."</br>";

$lower_case="chaitanya lakshmi";
echo "strtolower()-".strtolower($lower_case)."</br>";

//string replace
$string="chaitanya lakshmi";
$new_string=str_replace("lakshmi","reddy",$string);
echo $new_string."</br>";

//removes any whitespace 
$trim="chaitanya     lakshmi";
echo trim($trim)."</br>";

//concatenation
$string1="chaitanya";
$string2="lakshmi";
$result=$string1." " .$string2;
echo $result."</br>";
echo "$string1  $string2"."</br>";