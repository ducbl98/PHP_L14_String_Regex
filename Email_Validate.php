<?php
function isValidEmail($str){
    $regex='/^[\d\w]+@[\d\w]+(\.[\d\w]+)$/';
    if (preg_match($regex, $str)) {
        echo("Email is valid");
    } else {
        echo("Email is invalid");
    }
}
isValidClassName('ductit1998@gmail.com');
echo "<br>";
isValidClassName('ductitqweqweqwqeqweqw@asas.com.vn');