<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="site2.php" method="get" method="post">
    <input type="text" name="o">
    <input type="number" name="x">
    <input type="number" name="y">
    <input type="submit">
</form>

 answer:
 <?php 
 echo $_GET['x']+$_GET["y"];
 echo $_POST["o"];
 ?>
    
</body>
</html>