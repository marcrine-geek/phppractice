
<html>
<body>
<form method="post">
    Enter any vowel:
    <input type="vowel" name="vowel">
    <input type="submit" name="submit">
</form>
</body>
</html>

<?php

$vowels=$_POST['vowel'];
switch ($vowels){
    case "a":
        echo "This is the first vowel";
        break;
    case "e":
        echo "This is the second vowel";
        break;
    case "i":
        echo "This is the third vowel";
        break;
    case "o":
        echo "This is the fourth vowel";
        break;
    case "u":
        echo "This is the fifth vowel";
        break;
    default:
        echo "You have an invalid vowel/ Please input any vowel";
}

?>

