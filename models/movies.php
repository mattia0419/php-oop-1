<?php
class Movies {
    public $title;
    public $author;
    public $language;
    public $date;

    function __construct($_title, $_author, $_language, $_date){
        $this -> $title = $_title;
        $this -> $author = $_author;
        $this -> $language = $_language;
        $this -> $date = $_date;
    }
}