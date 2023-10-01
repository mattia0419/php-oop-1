<?php
include __DIR__ . './models/movies.php';

$new_film = new Movie('Harry Potter', 'J.K. Rowling', 'Inglese', '2000', new Genre(["Fantascienza", "Azione"]));
var_dump($new_film);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $new_film->getTitle();?></h1>
    <span><?php echo $new_film->author; ?></span>
    <span><?php echo $new_film->language; ?></span>
    <span><?php echo $new_film->date; ?></span>
    <?php foreach($new_film->genres as $genre):?>
        <span><?php echo $new_film->genres ?></span>
    <?php endforeach; ?>    
</body>
</html>