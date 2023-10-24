<?php

$friends=array("kevin","karen","oscar","jim");
$friends[4]="mike";
echo count($friends);

echo "<hr>";

$lucky_numbers = [4, 8, "fifteen", 16, 23, 42.0];
//       indexes  0  1       2      3   4   5

$lucky_numbers[0] = 90;
echo $lucky_numbers[0]."<br>";
echo $lucky_numbers[1]."<br>";
echo count($lucky_numbers)."<br>";



?>