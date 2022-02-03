<?php

//string
//numbers (float, double, integers)
//boolean

$name="emobilis mobile technology";
$num=54.67;
$num2=30;
$person=true;

var_dump($name);
echo "<br>";
var_dump($num);
echo "<br>";
var_dump($num2);
echo "<br>";

//strings
echo str_repeat("Today we are learning data types.", 5);
echo "<br>";
echo str_rot13("Netscape class");
echo "<br>";
echo "<br>";
echo "<br>";

echo str_shuffle("PHP is a powerful language");
echo "<br>";
print_r(str_getcsv("PHP at emobilis", ",", "\\"));
echo "<br>";
echo str_word_count("Python is good programming language.");
echo "<br>";
print_r(str_split("lorem ipsum"));
echo "<br>";