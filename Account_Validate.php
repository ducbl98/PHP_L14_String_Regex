<?php
function isValidAccount($str){
    $regex='/^[\da-z_]{6,}$/';
    if (preg_match($regex, $str)) {
        echo("Account is valid");
    } else {
        echo("Account is invalid");
    }
}
isValidClassName('sdasd1__');
echo "<br>";
isValidClassName('Abc12__');