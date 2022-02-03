<?php

$color= "black";

echo "my phone is $color";

$msg = "PHP is fast";
echo "People say that $msg";

$fname="Marcrine";
$lname="Musimbi";

echo "My name is:".$fname,$lname;

$string="name";
$x=2;
$y=3.45;
$z=$x+$y;
echo $z;

//local variables
function local_variable()
{
    $myname="Hayley";
    echo "my name is $myname";
}
local_variable();

//global variables
$class="Netscape";
function global_var()
{
    global $class;
    echo "Am a student in".$class;
}
global_var();

//global variables
$num1=10;
$num2=20;
function variables()
{
    global $num1;
    global $num2;
    $nums = $num1 + $num2;
    echo "the total is: ".$nums;
}
variables();

//static variables
function static_var()
{
    static $num2=4;
    $num3=6; //non static
    $num2++;
    $num3++;

    echo $num2;
    echo $num3;
}
static_var();

static_var();

//$$variables
$x="xyz";
$$x=400;
echo $x;
echo $$x;
echo $xyz;


//PHP Constants
define("message","New world of technology");
echo message;

//constant keyword
const Message="hey there php lovers";
echo Message;
"<br>";

//magic constants
//__LINE__
echo "example of __LINE__ ";
"<br>";
echo "You are at line".__LINE__."<br>";

//PHP array
$names=array("Nick","Elijah", "Rebecca");
echo "$names[0] </br>";
"<br>";
echo "$names[1] </br>";
"<br>";
echo "$names[2] </br>";
"<br>";

//PHP objects
class bike{
    function model(){
        $model_name="newbike";
        echo "bike model: ".$model_name;
    }
}
$obj = new bike();
$obj -> model();
echo "<br>";

//if statement
$number1=50;
if($number1>10){
    echo "The number is great";
}
echo "<br>";

//if else statement
$number2=10;
if($number2<5){
    echo "The number is small";
}else{
    echo "The number is large";
}
echo "<br>";

//if else if statement
$grade=68;
if($grade==100){
    echo "disctinction";
}elseif ($grade<=70){
    echo "above average";
}elseif ($grade>=50){
    echo "pass";
}else{
    echo "fail";
}

echo "<br>";

//for loop
for ($n=5;$n<=15;$n++){
    echo "$n";
    echo "<br>";
}

//foreach loop
$days=array("monday","Tuesday","Wednesday", "Thursday", "Friday");
foreach ($days as $day){
    echo "Today is: ".$day;
    echo "<br>";
}

//even or odd numbers
$num3=29;
if ($num3%2==0){
    echo "The number is even";
    echo "<br>";
}else{
    echo "The number is odd";
    echo "<br>";
}

//checking if number is even or odd using forms

if($_POST){
    $number = $_POST['number'];
    if (($number%2)==0){
        echo "$number is even";
        echo "<br>";
    }else{
        echo "$number is odd";
        echo "<br>";
    }
}

//checking if a number is a prime number
if ($_POST){
    $number = $_POST['number'];
    for ($i=2; $i<=$number-1; $i++){
        if ($number % $i == 0){
            $value=True;
        }
    }
    if (isset($value) && $value){
        echo "The number " .$number. " is not a prime number";
    }else{
        echo "The number " .$number. " is a prime number";
    }
}
echo "<br>";

//Finding the factorial of a number
if ($_POST){
    $fact = 1;
    $number = $_POST['number'];
    echo "Factorial of $number is: ";
    for ($i=1; $i<=$number; $i++){
        $fact=$fact*$i;
    }
    echo $fact;
}

?>

<html>
<body>
<form method="post">
    Enter a number:
    <input type="number" name="number">
    <input type="submit" value="Submit">
    <br>
</form>
<form method="post">
    Enter a number:
    <input type="number" name="number">
    <input type="submit" name="submit" value="submit">
</form>
<form method="post">
    Enter a number:
    <input type="number" name="number">
    <input type="submit" name="submit" value="submit">
</form>
</body>
</html>
































