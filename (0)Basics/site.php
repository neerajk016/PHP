<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    


<?php 


echo ".../|";
echo "../.|";
echo "./..|";
echo "/___|";

print "<hr/>";



echo "<h1>Hello World</h1>";
print "<hr/>";                           // returns 1
echo  "<p>This is a php tutorial</p>";


echo "There once was a man named George <br>";
echo "He was 70 years old <br>";
echo "He really liked the name George <br>";
echo "But didn't like being 70 <br>";

print "<hr/>";
 
$characterName = "George";
$characterAge = 70;
echo "There once was a man named $characterName <br>";
echo "He was $characterAge years old <br>";
echo "He really liked the name $characterName <br>";
echo "But didn't like being $characterAge <br>";

print "<hr/>";
$characterName = "George";
$characterAge = 70;

echo "There once was a man named $characterName <br>";
echo "He was $characterAge years old <br>";

$characterAge = 80;

echo "He really liked the name $characterName <br>";
echo "But didn't like being $characterAge <br>";

print "<hr/>";
$name = "Mike";    // Strings
$age = 30;         // Integer
$gpa = 3.5;        // Decimal
$isTall = true;    // Boolean -> true/false

$name = "John";

echo  "Your name is $name <br>";

print "<hr/>";

$greeting = "Hello";
//indexes:   01234

echo  strlen($greeting)."<br>";
echo  $greeting[0]."<br>";
echo  $greeting[-1]."<br>";
echo  str_replace("l", "Z", $greeting)."<br>";
echo  strchr($greeting, "ll")."<br>";  



print "<hr/>";

echo (2 * 3)."<br>";            // Basic Arithmetic: +, -, /, *
echo (2**3)."<br>";             // Basic Arithmetic: +, -, /, *
echo (10 % 3)."<br>";           // Modulus Op. : returns remainder of 10/3
echo (1 + 2 * 3)."<br>";        // order of operations
echo (10 / 3.0)."<br><br>";     // int's and doubles


$num = 10;
$num += 100;                    // +=, -=, /=, *=
echo $num."<br>";

$num++;
echo $num."<br><br>";

// useful math methods
echo max(2, 3)."<br>";
echo sqrt(144)."<br>";
echo round(2.7)."<br>";

print "<hr/>";

print "<hr/>";
print "<hr/>";
print "<hr/>";

?>
    
</body>
</html>