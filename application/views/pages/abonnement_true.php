<div class="container" style="padding: 30px">
<h3>Pour la creation d'un nouveau compte vous devrez completer les champs suivantes:</h3>
  <?php echo validation_errors(); ?>
  <?php echo form_open('abonnement_controller/edit_abonnement'); ?>
   <input type="hidden" class="form-control"  name="numeroAb" value="<?php echo $abonnement->numeroAb; ?>">
    <div class="form-group col-md-6 has-danger">
      <label for="type">Type abonnement</label>
      <input type="text" class="form-control"  name="type" value="<?php echo $abonnement->typeAb; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="tarif">Tarif</label>
      <input type="number" class="form-control"  placeholder="Tarif" name="tarif" value="<?php echo $abonnement->tarifAb; ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="reduction">Reduction</label>
      <input type="number" class="form-control"  placeholder="Reduction" name="reduction" value="<?php echo $abonnement->reduction; ?>">
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
  <button type="text" class="btn btn-primary">Modifier</button>
  <a class="btn btn-primary" href="<?php echo base_url(); ?>abonnement_controller/delete/<?php echo $abonnement->numeroAb; ?>">Delete</a>

</form>
</div>