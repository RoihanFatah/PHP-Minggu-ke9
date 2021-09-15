<?php 
setcookie("user", "", time() - 3600);

$cookie_name = "user";
$cookie_value = "roihan";

setcookie($cookie_name, $cookie_value);

echo $_COOKIE[$cookie_name];



?>