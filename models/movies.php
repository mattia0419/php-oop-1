<?php
class Movie {
    public $title;
    public $author;
    public $language;
    public $date;
    public $genres;

    function __construct($title, $author, $language, $date, array $genres){
        $this -> title = $title;
        $this -> author = $author;
        $this -> language = $language;
        $this -> date = $date;
        $this -> genres = $genres;
    }

    public function get_genres_text() {
        $genres_text = '';
        foreach($this->genres as $genre){
            $genres_text .= $genre->name . ' - ';
        }
        return $genres_text;
    }

    public function getDetails(){
        $genres_text = $this->get_genres_text();
        return "titolo: $this->title, Autore: $this->author, Lingua: $this->language, Data: $this->date, Generi: $genres_text";
    }
}