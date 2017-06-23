<?php

include('./conec.php');

$name= $_POST['name'];
$difficulty= $_POST['difficulty'];
$distance= $_POST['distance'];
$duration=$_POST['duration'];
$height=$_POST['height'];




$req = $pdo->prepare(' UPDATE hiking
SET name = :name, difficulty = :difficulty, distance = :distance, duration = :duration, height_difference = :height_difference WHERE id = :id');
$req->bindParam(':name', $name);
$req->bindParam(':difficulty', $difficulty);
$req->bindParam(':distance', $distance);
$req->bindParam(':duration', $duration);
$req->bindParam(':height_difference', $height);
$req->bindParam(':id', $_POST["idrando"]);

$req->execute();

print_r($pdo->errorInfo());
header("location: ../index.php");
?>
