<?php

//while loop
$num=5;

while ($num<=20){
    echo "$num is less that 20 <br>";
    $num++;
}
echo "<br>";
echo "<br>";

//do... while loop
$num1=4;

do{
    echo "The number is--> $num1 <br>";
    $num1++;
}while ($num1<=16);

echo "<br>";
echo "<br>";

//for loop
//init counter, test counter, increment/decrement counter
for ($num2=10; $num2<=50; $num2+=5){
    echo "The integer is: $num2 <br>";
}
echo "<br>";
echo "<br>";

//foreach loop
$languages=array("python", "PHP", "R", "golang", "java");

foreach ($languages as $language){
    echo "$language <br>";
}

?>