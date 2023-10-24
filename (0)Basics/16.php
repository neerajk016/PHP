<?php
$isStudent = false;
$isSmart = false;

if($isStudent && $isSmart){
    echo "You are a student";
} elseif($isStudent && !$isSmart){
    echo "You are not a smart student";
} else {
    echo "You are not a student and not smart";
}
echo "<br>";

// >, <, >=, <=, !=, ==
if(1 > 3){
    echo "number comparison was true";
}
echo "<br>";

if("dog" == "cat"){
  echo "string comparison was true";
}


?>