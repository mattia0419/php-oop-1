<?php
require __DIR__ . './models/movies.php';
require __DIR__ . '/data/movies_db.php';
require __DIR__ . './models/genre.php';

$movies = [];

foreach($movies_data as $movie_data) {
    $genres = [];
    foreach($movie_data['genres'] as $genre_data){
        $genres[] = new Genre($genre_data);
    }

    
    $movies[] = new Movie($movie_data['title'], $movie_data['author'], $movie_data['language'], $movie_data['date'], $genres);
    
}

var_dump($movies);
echo '<hr>';

 foreach($movies as $movie) {
     echo $movie -> getDetails();
     echo '<hr>';
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <h1><?php echo $new_film->title; ?></h1>
    <span><?php echo $new_film->author; ?></span>
    <span><?php echo $new_film->language; ?></span>
    <span><?php echo $new_film->date; ?></span>
    <span><?php echo $new_film->getGenresText(); ?></span> -->
</body>
</html>