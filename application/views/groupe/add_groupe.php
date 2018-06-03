<div class="container" style="padding: 30px">
<h3>Pour la creation d'un nouveau groupe vous devrez completer les champs suivantes:</h3>
  <?php echo validation_errors(); ?>
  <?php echo form_open('groupes/add_groupe'); ?>
  <div class="form-group col-md-6">
      <label for="nomGroupe">Nom groupe</label>
      <input type="text" class="form-control"  placeholder="Nom groupe" name="nom">
    </div>
  <div class="form-group col-md-6">
      <label for="tarif">Le nombre de places</label>
      <input type="number" class="form-control"  placeholder="Nombre de places" name="noPlaces">
  </div>
 

 <div class="form-group col-md-6 has-danger">
      <label for="idEns">Le nom d'enseignant</label>
      <?php 
        echo '<select name="idEns">';
        foreach($enseignant as $row) {
          echo '<option value= "' . $row['idEns'] . '"> ' . $row['nomEns'] . ' </option> ';

        }
      echo "</select>";
    ;?>
  </div>
  

<h3> Pour ajouter le programme du groupe:</h3>
<div class="form-group col-md-6">
      <label for="nomSalle">Nom salle</label>
      <input type="text" class="form-control"  placeholder="Nom salle" name="nomSalle">
    </div>
  <div class="form-group col-md-6">
      <label for="calendrier">Oraire</label>
      <input type="text" class="form-control"  placeholder="calendrier" name="calendrier">
  </div>
 <div class="form-group col-md-6">
      <label for="date">Date de deroulement du cours</label>
      <input type="date" class="form-control"  placeholder="date" name="date">
  </div>
    
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>