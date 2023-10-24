<?php


class Student{
    public $name;
    public $gpa;

    function __construct($name, $gpa){
         $this->name = $name;
         $this->gpa = $gpa;
    }

    function hasHonors(){
         if($this->gpa >= 3.5){
             echo "pass";
              return true;
         }
         echo "fail";
         return false;
    }
};

$s1=new Student("k","1.0");
$s2=new Student("p","4.0");

echo $s1->hasHonors();
echo "<hr>";
echo $s2->hasHonors();


?>