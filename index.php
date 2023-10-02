<?php
require __DIR__ . './models/movies.php';
require __DIR__ . '/data/movies_db.php';
require __DIR__ . './models/genre.php';

// $movies = [];

// foreach($movies_data as $movie_data) {
//     $genres = [];
//     foreach($movie_data['genres'] as $genre_data){
//         $genres[] = new Genre($genre_data);
//     }

    
//     $movies[] = new Movie($movie_data['title'], $movie_data['author'], $movie_data['language'], $movie_data['date'], $genres);
    
// }

// var_dump($movies);
// echo '<hr>';

//  foreach($movies as $movie) {
//      echo $movie -> getDetails();
//      echo '<hr>';
//  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <!-- <div class="container">
        <?php foreach($movies as $movie): ?>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $movie->title ?></h5>
                    
                    <p class="card-text"><?php echo $movie->getDetails() ?></p>
                    
                </div>
            </div> 
        <?php endforeach; ?>    
    </div> -->
</body>
</html>