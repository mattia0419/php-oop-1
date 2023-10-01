<?php
include __DIR__ . './models/movies.php';

$new_film = new Movie('Harry Potter', 'J.K. Rowling', 'Inglese', '2000');

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
</body>
</html>