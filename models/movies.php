<?php
class Production {
    public $title;
    public $author;
    public $language;
    public $genres;

    function __construct($title, $author, $language, array $genres){
        $this -> title = $title;
        $this -> author = $author;
        $this -> language = $language;
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
        return "Autore: $this->author, Lingua: $this->language, Generi: $genres_text";
    }
}
class Movies extends Production{
    public $published_year;
    public $running_time;

    function __construct($title, $author, $language, array $genres, $published_year, $running_time){
        parent:: __construct($title, $author, $language, $genres);
        $this->published_year = $published_year;
        $this->running_time = $running_time;
    }
}
class TvSerie extends Production{
    public $aired_from_year;
    public $aired_to_year;
    public $number_of_episodes;
    public $number_of_seasons;

    function __construct($title, $author, $language, array $genres, $aired_from_year, $aired_to_year, $number_of_episodes, $number_of_seasons){
        parent:: __construct($title, $author, $language, $genres);
        $this->aired_from_year = $aired_from_year;
        $this->aired_to_year = $aired_to_year;
        $this->number_of_episodes = $number_of_episodes;
        $this->number_of_seasons = $number_of_seasons;
    }
}