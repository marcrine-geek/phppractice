<?php

function sayhi(){
    echo "hello world";
}
sayhi(); //calling a function
echo "<br>";

//function arguments
function sayhello($name){
    echo "hello $name";
    echo "<br>";
}

sayhello("marcrine");
echo "<br>";
sayhello("Hayley");
echo "<br>";
sayhello("Patriki");
echo "<br>";
sayhello("Nicklaus");
echo "<br>";

//function with two arguments
function devclass($name, $age){
    echo "software engineer ".$name. " is " .$age. " years old.";
    echo "<br>";
}
devclass("Musimbi", 23);
echo "<br>";
devclass("Elijah", 40);
echo "<br>";
devclass("Rebecca", 34);
echo "<br>";

//call by reference
function adder(&$str){
    $str.='Call By Reference';
    echo "<br>";

}
$str1="Hello ";
adder($str1);
echo $str1;
echo "<br>";

//function with default arguments
function person($name="Netscape"){
    echo "Hello $name";
}
person("Kenya");
echo "<br>";

//function with returning value
function values($x){
    return $x*$x;
    echo "<br>";
}
echo values(20);
echo "<br>";

//variable length argument function
function val(...$nums){
    $sum=0;
    foreach ($nums as $num){
        $sum += $num;
    }
    return $sum;
}
echo val(2,3,4,5);
echo "<br>";


//php recursive function
function display($num){
    if ($num<=10){
        echo "$num";
        echo "<br>";
        display($num+1);
    }
}
display(1);
echo "<br>";





?>