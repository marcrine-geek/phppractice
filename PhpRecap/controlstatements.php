<?php

$num = 20;
//if statement
if ($num < 100)
{
    echo "$num is less than 100";
    echo "<br>";
}

//if else statement

if ($num > 50)
{
    echo "$num is greater than 50";
    echo "<br>";
}
else
{
    echo "$num is less than 50";
    echo "<br>";
}

//if else if statement
if ($num >= 100)
{
    echo "$num is less than 100";
    echo "<br>";
}
elseif ($num >= 50)
{
    echo "$num is less than 50";
    echo "<br>";
}
else{
    echo "$num is less than all";
    echo "<br>";
}

//nested if

//switch statement

$num1 = 30;

switch ($num1)
{
    case 10:
        echo "number is equal to 10";
        break;
    case 20:
        echo "number is equal to 20";
        break;
    case 30:
        echo "number is equal to 30";
        break;
    default:
        echo "invalid number";
        break;
}
echo "<br>";

//for loop

for ($i = 0; $i <= 10; $i++)
{
    echo $i;
    echo "<br>";
}

//for each loop
$people = array("marc", "mitchell", "michael");
foreach ($people as $someone)
{
    echo $someone;
    echo "<br>";
}

//while loop
$x = 5;
while ($x <= 10)
{
    echo $x;
    echo "<br>";
    $x++;
}
//do while loop

$y = 10;
do{
    echo $y;
    echo "<br>";
    $y++;
}while($y <= 20);


































































