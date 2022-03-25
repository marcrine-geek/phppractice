<?php
$name=$_POST["name"];
$password=$_POST["password"];

echo "Your name is $name and your password is $password";
?>

<form action="" method="post">
    <label for="name">name</label>
    <input type="text" name="name">
    <label for="password">password</label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="submit">
</form>
