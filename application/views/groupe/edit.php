<div class="container" style="padding: 30px">
<h3>Pour modifier les groupes vous devre</h3>
  <?php echo validation_errors(); ?>
  <?php echo form_open('groupes/edit_groupe'); ?>
  <div class="form-group col-md-6">
      <label for="nomGroupe">Nom groupe</label>
      <input type="text" class="form-control"  placeholder="Nom groupe" name="nom" value="<?php echo $groupe->nomGroupe; ?>">
    </div>
  <div class="form-group col-md-6">
      <label for="tarif">Le nombre de places</label>
      <input type="number" class="form-control"  placeholder="Nombre de places" name="noPlaces" value="<?php echo $groupe->noPlaces; ?>">
  </div>
 

 <div class="form-group col-md-6 has-danger">
      <label for="idEns">Le nom du groupe</label>
      <?php 
        echo '<select name="idEns">';
        foreach($enseignant as $row) {
          echo '<option value= "' . $row['idEns'] . '"> ' . $row['nomEns'] . ' </option> ';

        }
      echo "</select>";
    ;?>
  </div>
  <input type='hidden' name='id' value='<?php echo $id;?>'>
    
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>