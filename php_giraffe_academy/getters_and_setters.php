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
        if ($rating == "G" ||
            $rating == "PG" ||
            $rating == "PG-13" ||
            $rating == "R" ||
            $rating == "NR") {
            $this->rating = $rating;
        }else{
            $this->rating = "NR";
        }
    }
}

$avengers = new Movie("Avengers", "PG-13");
$avengers->set_rating("Dogs");
echo $avengers->get_rating();

?>

