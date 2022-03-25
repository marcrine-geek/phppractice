<?php
//returning value function
function sum($num)
{
    echo $num + $num;
    echo "<br>";
}
sum(5);

//function with default value argument
function vegetables($veg = "cabbage")
{
    echo $veg;
    echo "<br>";
}
vegetables();

//call by reference function
function name(&$firstname)
{
    $firstname.= "Marcrine";
}
$lastname = "Musimbi ";
name($lastname);
echo $lastname;
echo "<br>";

//function by arguments
function human($name)
{
    echo $name;
    echo "<br>";
}
human("Klaus");

//variable length argument function
function addition(...$numbers)
{
    $sum=0;
    foreach ($numbers as $num)
    {
        $sum += $num;
    }
    return $sum;
}
echo addition(5, 5, 5, 10);
echo "<br>";

//function by arguments using forms
function add($x, $y)
{
    echo $x + $y;
}

if (isset($_POST['add']))
{
    add($_POST['first'], $_POST['second']);
}

?>

<form action="" method="post">
    <label for="first">First Number</label>
    <input type="number" name="first" placeholder="enter any number">
    <label for="second">Second Number</label>
    <input type="number" name="second" placeholder="enter any number">
    <input type="submit" name="add" value="addition">
</form>

























