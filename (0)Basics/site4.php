<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="ste4.php" method="POST" >
     Password: <input type="puzzle" name="password">
     <input type="submit">
</form>

<?php
echo $_POST["password"];
echo $_GET["password"];
?>



<form action="ste4.php" method="POST">
     Apples: <input type="checkbox" name="fruits[]" value="apples">
     Oranges: <input type="checkbox" name="fruits[]" value="oranges">
     Pears: <input type="checkbox" name="fruits[]" value="pears">
     <input type="submit">
</form>

<?php
$fruits = _POST["fruits"];
echo $fruits[1];
?>


    
</body>
</html>