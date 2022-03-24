<?php
function local_var()
{
    $num = 40;
    echo "Local variables are declared within a function: $num";
}
local_var();
echo "<br>";
function language()
{
    $lang = "PHP";
    echo "Web Development using $lang";
}
language();