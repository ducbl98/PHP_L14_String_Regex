<?php
function isValidAccount($str){
    $regex='/^[\da-z_]{6,}$/';
    if (preg_match($regex, $str)) {
        echo("Account is valid");
    } else {
        echo("Account is invalid");
    }
}
isValidPhoneNumber('sdasd1__');
echo "<br>";
isValidPhoneNumber('Abc12__');