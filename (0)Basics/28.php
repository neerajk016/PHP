<?php


class Chef{
    function makeChicken(){
         echo "The chef makes chicken";
    }
    function makeSalad(){
         echo "The chef makes salad";
    }
    function makeSpecialDish(){
         echo "The chef makes bbq ribs";
    }
};

class ItalianChef extends Chef{
    function makePasta(){
         echo "The chef makes pasta";
    }
    function makeSpecialDish(){
         echo "The chef makes chicken parm";
    }
};


$chef = new Chef();
$chef->makeChicken();
echo "<br>";
$italianChef = new ItalianChef();
$italianChef->makeChicken();
echo "<hr>";


$f1=new ItalianChef();
$f1->makeSalad();



?>