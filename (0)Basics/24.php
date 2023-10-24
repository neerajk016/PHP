<?php


class Book{
    var $title;
    public $author;
    var $pages;
};


$book1 = new Book;
$book1->title = "Harry Potter";
$book1->author = "JK Rowling";



echo $book1->title."<br>";


$book2 = new Book;
$book2->title = "Harry Potter";
$book2->author = "JK Rowling";
$book2->pages="4000";



echo $book2->author."<br>";
echo $book2->pages;

?>