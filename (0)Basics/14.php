<?php


function sayHi(){
    echo "Hello";
}
sayHi();
echo "<br>";

function sayHi1($name){
    echo "Hello $name";
}
sayHi1("Mike");
echo "<br>";

function sayHi2($name, $age){
    echo "Hello $name you are $age";
}
sayHi2("Mike", 24);

?>