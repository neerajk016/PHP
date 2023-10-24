<!-- setcookie ( name , value ,expiration time , path = ""); -->

<?php
echo "Welcome to the world of cookies<br>";

// Cookies | Sessions

// Syntax to set a cookie
echo time();
setcookie("category", "X", time() + 86400, "/"); 
echo "The cookie is set<br>";

?>
