<h1>Ajouter une randonnée</h1>


<form id="my_form" action="./SQL/create.php" method="post">

    <label for="name">Name</label><br>
    <input type="text" name="name" value=""><br>

    <label for="difficulty">Difficulté</label><br>
    <select name="difficulty">
      <option value="tres facile">Très facile</option>
      <option value="facile">Facile</option>
      <option value="moyen">Moyen</option>
      <option value="difficile">Difficile</option>
      <option value="tres difficile">Très difficile</option>
    </select><br>

    <label for="distance">Distance</label><br>
    <input type="text" name="distance" value=""><br>

    <label for="duration">Durée</label><br>
    <input type="duration" name="duration" value=""><br>

    <label for="height">Dénivelé</label><br>
    <input type="text" name="height" value=""><br>

  <button type="submit" name="button">Valider</button>
</form>
