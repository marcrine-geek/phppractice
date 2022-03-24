<?php

//php constants
define("MESSAGE","Hello World");

echo MESSAGE;
echo "<br>";

const HELLO = "Hello PHP";
echo HELLO;
echo "<br>";
$name = "Musimbi Marcrine";

function globalvar()
{
    global $name;
    echo "My name is $name";
    echo "<br>";
}
globalvar();

function test()
{
    global $name;

    echo "The best senior software engineer is $name";
    echo "<br>";
}
test();

//using $GLOBALS

$num1 = 20;

$num2 = 40;

function sum()
{
    $sum = $GLOBALS['num1'] + $GLOBALS['num2'];

    echo "sum of two numbers is $sum";
}
echo "<br>";
sum();


























