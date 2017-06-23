<?php

include('./conec.php');

$req = $pdo->prepare('DELETE FROM hiking WHERE id= ?');
$req->execute(array($_POST['id']));


?>
