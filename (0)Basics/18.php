
<form action="18.php" method="POST">
    <input type="text" name="grade">
    <input type="submit">

</form>




<?php

$myGrade = $_POST["grade"];
switch($myGrade){
    case "A":
          echo "You Pass";
          break;
    case "F":
          echo "You fail";
          break;
    default:
          echo "Invalid grade";
}


?>