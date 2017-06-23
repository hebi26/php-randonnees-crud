
<?php

include('../SQL/conec.php');


$req = $pdo->prepare('SELECT * FROM hiking WHERE id=?');
$req->execute(array($_GET['id']));
$data=$req->fetch();

$difficulties = array('tres facile','facile', 'moyen', 'difficile', 'tres difficile');
?>

 <h1>Modifier la randonnée</h1>

 <form id="my_form" action="./SQL/update.php" method="post">

     <label for="name">Name</label><br>
     <input type="text" name="name" value="<?php echo ($data->name); ?>"><br>
     <input type="hidden" name="idrando" value="<?php echo ($data->id); ?>">
     <label for="difficulty">Difficulté</label><br>
     <select name="difficulty">

  <?php
    foreach ($difficulties as $difficulty_name) {
  ?>
  <option value="<?=$difficulty_name?>" <?php if ($difficulty_name === $data->difficulty) {echo 'selected';} ?>><?=$difficulty_name?></option>

  <?php
    }
  ?>

     </select><br>

     <label for="distance">Distance</label><br>
     <input type="text" name="distance" value="<?php echo ($data->distance); ?>"><br>

     <label for="duration">Durée</label><br>
     <input type="duration" name="duration" value="<?php echo ($data->duration); ?>"><br>

     <label for="height">Dénivelé</label><br>
     <input type="text" name="height" value="<?php echo ($data->height_difference); ?>"><br>

   <button type="submit" name="button">Valider</button>
 </form>

<?php

 ?>
