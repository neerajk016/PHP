
<form action="13.php" method="POST">
    <input type="text" name="student">
     <input type="submit">
</form>

<?php
$grades=array("jim"=>"o","jim1"=>"o1","jim2"=>"02");
echo $grades[$_POST["student"]];
echo "<hr>";
?>


<?php
$x = array("Andy" => "B+","Stanley" => "C",
    "Ryan" => "A",
    3 => 95.2
);
    echo  $x["Andy"]."<br>";
    echo  $x["Ryan"]."<br>";   
    echo  $x[3]."<br>";

?>