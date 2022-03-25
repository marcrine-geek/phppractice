<?php
setcookie("name", "marcine",time() - 3600);
?>

<html>
<body>
<?php
if (!isset($_COOKIE["name"]))
{
    echo "cookie not found";
}else{
    echo "cookie is ".$_COOKIE["name"];
}
echo "<br>";
?>
</body>
</html>
