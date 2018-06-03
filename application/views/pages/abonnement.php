<div class="container" style="padding: 30px">
<h3>Pour la creation d'un nouveau abonnement vous devrez completer les champs suivantes:</h3>
  <?php echo validation_errors(); ?>
  <?php echo form_open('abonnement_controller/create'); ?>
  <div class="form-group col-md-6  has-danger">
    <input type="hidden" class="form-control"  placeholder="Type abonnement" name="idAbo" value="<?php echo $idAbon;?>">
    <div class="form-group col-md-6 has-danger">
      <label for="type">Type abonnement</label>
      <input type="text" class="form-control"  placeholder="Type abonnement" name="type">
    </div>
    <div class="form-group col-md-6">
      <label for="tarif">Tarif</label>
      <input type="number" class="form-control"  placeholder="Tarif" name="tarif">
    </div>
    <div class="form-group col-md-6">
      <label for="reduction">Reduction</label>
      <input type="number" class="form-control"  placeholder="Reduction" name="reduction">
    </div>
    <div class="form-group col-md-6 has-danger">
      <label for="idEns">Groupe</label>
      <?php 
        echo '<select name="idGroupe">';
        foreach($groupe as $row) {
          echo '<option value= "' . $row['idGroupe'] . '"> ' . $row['nomGroupe'] . ' </option> ';

        }
      echo "</select>";
    ;?>
  </div>
  <button type="text" class="btn btn-primary">Envoyer</button>
</form>
</div>