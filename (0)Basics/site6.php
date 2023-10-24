<!DOCTYPE html>
<html>
<head>
<title>xampp php</title>
</head>

<body>

<?php
$dir = "D:";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

print_r($a); echo "<br>";
print_r($b);
?>

</body>

</html>