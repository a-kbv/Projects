<?php
class Book{
    var $title;
    var $author;
    var $pages;

    function __construct($aTitle, $aAuthor, $aPages){
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aAuthor;

    }


}
$book1 = new Book("Lord Of The Rings", "Tolkien", 700);

echo "Title: $book1->title <br>";
echo "Author: $book1->author <br>";
echo "Pages: $book1->pages <br>";




?>