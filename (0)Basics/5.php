<?php
$greeting = "Hello";
//indexes:   01234

echo  strlen($greeting)."<br>";
echo  $greeting[0]."<br>";
echo  $greeting[-1]."<br>";
echo  str_replace("l", "Z", $greeting)."<br>";
echo  strchr($greeting, "ll")."<br>";  


?>