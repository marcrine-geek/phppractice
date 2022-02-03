<?php

$num=20;
$num1=20;

//if statement
if ($num==$num1){
    echo "number $num is equal to $num1";
    echo "<br>";
    echo 45+20;
}
echo "<br>";

//if...else statement
if ($num>=40 and $num1>=4){
    echo "correct comparison";
}else{
    echo "Incorrect comparison";
}
echo "<br>";

//if...elseif...else

$grade=$_POST['number'];

if ($grade>=0 && $grade<=39){
    echo "You have failed";
    echo "<br>";
}elseif ($grade>=40 && $grade<=60){
    echo "You are above average";
    echo "<br>";
}elseif ($grade>=61 && $grade<=79){
    echo "You have a credit";
    echo "<br>";
}elseif ($grade>=80 && $grade<=100){
    echo "You have a distinction";
    echo "<br>";
}else{
    echo "Invalid grade";
    echo "<br>";
}


?>


<html>
<body>
<form method="post">
    Enter your grade:
    <input type="number" name="number">
    <input type="submit" name="submit">
</form>
</body>
</html>













