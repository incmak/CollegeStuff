<?php

$singlequote = 'Hello world in single quotes';
$doublequote = "Hello World in double quotes";
echo $singlequote."<br>".$doublequote;
$lowercase = "this text is lower case by default";
$uppercase = "THIS TEXT IS UPPERCASE BY DEFAULT";
echo"<br>". strtoupper($lowercase)." This is after uppercasing";
echo "<br>".strtolower($uppercase);

//Replace text in a string
$replacetxt = str_replace("world","worlds",$singlequote);
echo "<br>". $replacetxt;

//Length of a string
echo "<br> The length of the string is:". strlen($singlequote);

//Reverse a string
echo "<br>". strrev($singlequote);

//Index of a string
echo "<br>". strpos($singlequote, "single");

//Convert String into array
$strtoarr = explode(" ",$singlequote);
print_r($strtoarr);

//count words in a string
echo "<br>". str_word_count($singlequote);

//Substring of  a String
echo "<br>". substr($singlequote,4);
?>