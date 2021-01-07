<?php
class Movie{
    public $title;
    private $rating;

    function __construct($title, $rating){
        $this->title = $title;
        $this->rating = $rating;
    }
    function get_rating(){
        return $this->rating;
    }
    function set_rating($rating){
        $this->rating = $rating;
    }
}

$avengers = new Movie("Avengers", "PG-13");
$avengers->set_rating("Dog");
echo $avengers->get_rating();

?>

