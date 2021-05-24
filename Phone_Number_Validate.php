<?php
function isValidPhoneNumber($str)
{
    $regex = '/^(\([\d]{2}\)-)(\(0[\d]{9}\))/';
    if (preg_match($regex, $str)) {
        echo("Phone Number is valid");
    } else {
        echo("Phone Number is invalid");
    }
}

isValidPhoneNumber('(84)-(0978489648)');
echo "<br>";
isValidPhoneNumber('P0323A');