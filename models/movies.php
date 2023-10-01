<?php
include __DIR__ . './genres.php';
class Movie {
    public $title;
    public $author;
    public $language;
    public $date;
    public $genres;

    function __construct($_title, $_author, $_language, $_date, Genre $genres){
        $this -> title = $_title;
        $this -> author = $_author;
        $this -> language = $_language;
        $this -> date = $_date;
        $this -> genres = $genres;
    }

    public function getTitle(){
        return $this -> title;
    }
}