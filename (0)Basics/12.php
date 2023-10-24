
<form action="12.php" method="POST">
     Apples: <input type="checkbox" name="fruits[]" value="apples">
     Oranges: <input type="checkbox" name="fruits[]" value="oranges">
     Pears: <input type="checkbox" name="fruits[]" value="pears">
     <input type="submit">
</form>

<?php
$fruits = $_POST["fruits"];
echo $fruits[0];
?>
