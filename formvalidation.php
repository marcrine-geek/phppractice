
<?php

$fname="";
$lname="";
$email="";
$residence="";
$career="";
$gender="";
$comments="";
$fnameErr="";
$lnameErr="";
$emailErr="";
$genderErr="";
$residenceErr="";
$careerErr="";



function test_input($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    //first name
    if (empty($_POST["fname"])){
        $fnameErr="First name is required";
    }else{
        $fname=test_input($_POST["fname"]);
        //check if name has correct format
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    //last name
    if (empty($_POST["lname"])){
        $lnameErr="Last name is required";
    }else{
        $lname=test_input($_POST["lname"]);
        //check if name has correct format
        if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    //email address
    if (empty($_POST["email"])){
        $emailErr="Email address is required";
    }else{
        $email=test_input($_POST["email"]);
        //check if email address has the correct format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    //gender
    if (empty($_POST["gender"])){
        $genderErr="Gender is required";
    }else{
        $gender=test_input($_POST["gender"]);
    }

    //career role
    if (empty($_POST["career"])){
        $careerErr="career is required";
    }else{
        $career=test_input($_POST["career"]);
    }

    //residence
    if (empty($_POST["residence"])){
        $residenceErr="residence is required";
    }else{
        $residence=test_input($_POST["residence"]);
    }

    //question
    if ($_POST["comments"]){
        $comments=test_input($_POST["comments"]);
    }

}

echo "<h2>Confirm your details</h2>";
echo "<br>";
echo "<br>";
echo "<strong>Name: </strong>$fname $lname";
echo "<br>";
echo "<br>";
echo "<strong>Email: </strong>$email";
echo "<br>";
echo "<br>";
echo "<strong>Gender: </strong>$gender";
echo "<br>";
echo "<br>";
echo "<strong>Residence: </strong>$residence";
echo "<br>";
echo "<br>";
echo "<strong>Career role: </strong>$career";
echo "<br>";
echo "<br>";
echo "<strong>Question: </strong>$comments";
echo "<br>";
echo "<br>";
echo "<br>";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form validation</title>
    <style>
        form{
            border: 2px solid black;
            border-radius: 10px;
            width: 30%;
            text-align: center;
            font-size: 15px;
        }
    </style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    First Name: <br>
    <input type="text" id="fname" name="fname">
    <span class="error">* <?php echo $fnameErr;?></span><br>
    Last Name: <br>
    <input type="text" id="lname" name="lname">
    <span class="error">* <?php echo $lnameErr;?></span><br>
    Email: <br>
    <input type="email" id="email" name="email">
    <span class="error">* <?php echo $emailErr;?></span><br>
    Residence: <br>
    <input type="text" id="residence" name="residence"><br>
    Career Role: <br>
    <input type="text" id="career" name="career"><br>
    Gender: <br>
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Male">Male
    <input type="radio" name="gender" value="Other">Other
    <span class="error">* <?php echo $genderErr;?></span><br><br>
    <br>
    How can we help? <br>
    <textarea name="comments" id="comments" cols="30" rows="10"></textarea><br> <br>
    <input type="submit" value="submit">
</form>
</body>
</html>


