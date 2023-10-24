<?php


class Movie{
    public $title;
    private $rating;

    function __construct($title, $rating){
         $this->title = $title;
         $this->setRating($rating);
    }

    function getRating(){
         return $this->rating;
    }
    function setRating($rating){
         if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR"){
              $this->rating = $rating;
         } else {
              $this->rating = "NR";
         }
    }
};

$m1=new Movie("avengers","PG-13" );
$m2=new Movie("civil war","");
echo $m1->getRating();
echo "<hr>";
echo $m2->getRating();

?>