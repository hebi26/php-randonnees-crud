<?php
// include('header.php');
include('./conec.php');

$req = $pdo->query('SELECT * FROM hiking');
while ($data = $req->fetch()){

    ?>
      <p><b>Nom de la rando : </b><?php echo ($data->name); ?></p>
      <p><b>Difficulté : </b><?php echo ($data->difficulty); ?></p>
      <p><b>Distance : </b><?php echo ($data->distance); ?> Km</p>
      <p><b>Durée : </b><?php echo ($data->duration); ?></p>
      <p><b>Dénivelé : </b><?php echo ($data->height_difference); ?> m</p>
      <a class="update" id=<?php echo ($data->id)?>>Modifier</a>
      <a class="delete" id=<?php echo ($data->id)?>>Supprimer</a><hr>

<?php
}
print_r($pdo->errorInfo());

 ?>
