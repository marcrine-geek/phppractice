<?php

$myserver="localhost";
$username="root";
$pass="";
$db="Netscape";

//creating a connection using mysqli object oriented way
$connection=new mysqli($myserver, $username, $pass, $db);

//checking connection to db
if ($connection->connect_error){
    die("connection failed".$connection->connect_error);
}

//create table

