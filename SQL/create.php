<?php

include('./conec.php');

$name= $_POST['name'];
$difficulty= $_POST['difficulty'];
$distance= $_POST['distance'];
$duration=$_POST['duration'];
$height=$_POST['height'];


$req = $pdo->prepare("INSERT INTO hiking (name, difficulty, distance, duration, height_difference)
VALUES(:name, :difficulty, :distance, :duration, :height_difference)");

$req->execute(array(
    'name' => $name,
    'difficulty' => $difficulty,
    'distance' => $distance,
    'duration' => $duration,
    'height_difference' => $height
));

print_r($pdo->errorInfo());

header('location: ../index.php');

 ?>
