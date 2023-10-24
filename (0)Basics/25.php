<?php


class Book{
    var $title;
    public $author;

    function __construct($title, $author,$pages){
         $this->title = $title;
         $this->author = $author;
         $this->pages=$pages;
    }
};

$book1 = new Book("Harry Potter", "JK Rowling","1375389573409857");
$book2 = new Book("Harry Potter", "JK Rowling","1375389573409857");

$book1->title = "Half-Blood Prince";
$book2->pages="0";
echo $book1->title."<br>";
echo $book1->author."<br>";
echo $book1->pages."<br>";

echo "<hr>";


echo $book2->title."<br>";
echo $book2->author."<br>";
echo $book2->pages."<br>";

?>