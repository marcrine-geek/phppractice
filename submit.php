<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>submit</title>
</head>
<body>
<!--method post-->
Hello, my name is <?php echo $_POST['name'];?><br>
my email address is: <?php echo $_POST['email'];?><br>
and my gender is: <?php echo $_POST['gender'];?><br>
<br>
<br>
<!--method get-->
Hello, am <?php echo $_GET['name'];?><br>
my email address is: <?php echo $_GET['email'];?><br>
and my gender is: <?php echo $_GET['gender'];?><br>

</body>
</html>
