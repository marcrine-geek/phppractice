<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form action="submit.php" method="post">
    <label for="name">Full Name</label><br>
    <input type="text" id="fname" name="name"><br>
    <label for="email">email address</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="gender">Gender</label><br>
    <input type="text" id="gender" name="gender"><br>
    <input type="submit" value="register">
</form>
<br>
<br>
<form action="submit.php" method="get">
    <label for="name">Full Name</label><br>
    <input type="text" id="fname" name="name"><br>
    <label for="email">email address</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="gender">Gender</label><br>
    <input type="text" id="gender" name="gender"><br>
    <input type="submit" value="register">
</form>

</body>
</html>
