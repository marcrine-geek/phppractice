<?php

$fruits=$_POST['fruity'];

switch ($fruits){
    case "bananas":
        echo "I bought bananas";
        break;
    case "mangoes":
        echo "I prefer taking mangoes";
        break;
    case "oranges":
        echo "Oranges are good for kids";
        break;
    case "Apples":
        echo "An apple a day keeps the doctor away";
        break;
    default:
        echo "Fruits are generally good";
        break;

}


?>


<html>
<body>
<form method="post">
    Enter any fruit type:
    <br>
    <input type="fruity" name="fruity">
    <input type="submit" name="submit">
</form>

</body>
</html>
