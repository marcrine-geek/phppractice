<?php
$age = array("marcrine"=> 23, "richard"=> 24, "joseph"=> 10);

echo "marcrine is ".$age["marcrine"], "years old";

echo "<br>";

foreach ($age as $k=>$v)
{
    echo $k. " is " .$v. " years old.";
    echo "<br>";
}