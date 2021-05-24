<?php
function isValidEmail($str){
    $regex='/^[\d\w]+@[\d\w]+(\.[\d\w]+)$/';
    if (preg_match($regex, $str)) {
        echo("Email is valid");
    } else {
        echo("Email is invalid");
    }
}
isValidPhoneNumber('ductit1998@gmail.com');
echo "<br>";
isValidPhoneNumber('ductitqweqweqwqeqweqw@asas.com.vn');