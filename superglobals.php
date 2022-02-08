<?php

$x=20;
$y=40;

//$GLOBALS
function addition(){
    $GLOBALS['z']=$GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $GLOBALS['z'];
echo "<br>";
echo $z;

//$_SERVER
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['PATH_INFO'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";

//Request method
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_REQUEST["name"];
    if (empty($name)){
        echo "name is empty";
    }else{
        echo "my name is $name";
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    Name: <input type="text" id="name" name="name">
    <input type="submit" value="submit">
</form>

</body>
</html>