<?php



interface Animal{
    public function speak();
}

class Cat implements Animal{
    public function speak(){
         echo "Meow Meow <br>";
    }
}

class Dog implements Animal{
    public function speak(){
         echo "Woof Woof <br>";
    }
}


$animals = [
    new Dog(),
    new Cat()
];

foreach($animals as $animal){
    $animal->speak();
}



?>