<?php

//option1

$myserver="localhost";
$username="root";
$pass="";

//creating a connection using mysqli object oriented way
$connection=new mysqli($myserver, $username, $pass);

//checking connection to db
if ($connection->connect_error){
    die("connection failed".$connection->connect_error);
}else{
    echo "connection successful";
}

//option2

//$connection=new mysqli("localhost", "root", "", "");


?>
