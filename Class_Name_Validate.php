<?php
function isValidClassName($str){
    $regex= '/^[CAP][\d]{4}[GHIKLM]$/';
    if (preg_match($regex, $str)) {
        echo("Class Name is valid");
    } else {
        echo("Class Name is invalid");
    }
}
isValidClassName('C0318G');
echo "<br>";
isValidClassName('P0323A');