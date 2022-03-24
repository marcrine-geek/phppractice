<?php

$myserver="localhost";
$username="root";
$pass="";

//creating a connection using mysqli object oriented way
$connection=new mysqli($myserver, $username, $pass);

//checking connection to db
if ($connection->connect_error){
    die("connection failed".$connection->connect_error);
}

//create db
$sqlcreatedb="CREATE DATABASE Netscape";

if ($connection->query($sqlcreatedb)===TRUE){
    echo "successfully created database Netscape";
}else{
    echo "unsuccessful creation".$connection->error;
}
$connection->close();


?>