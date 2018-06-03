<div class="container" style="padding: 30px">
<h3>Pour modoffier  un programme: </h3>
  <?php echo validation_errors(); ?>
  <?php echo form_open('programmes/update_programme'); ?>
<div class="form-group col-md-6">
  <input type="hidden" class="form-control"   name="id" value="<?php echo $programme->idProgramme; ?>">
      <label for="nomSalle">Nom salle</label>
      <input type="text" class="form-control"  placeholder="Nom salle" name="nomSalle" value="<?php echo $programme->nomSalle; ?>">
    </div>
  <div class="form-group col-md-6">
      <label for="calendrier">Oraire</label>
      <input type="text" class="form-control"  placeholder="calendrier" name="calendrier" value="<?php echo $programme->calendrier; ?>">
  </div>
 <div class="form-group col-md-6">
      <label for="date">Date de deroulement du cours</label>
      <input type="date" class="form-control"  placeholder="date" name="date" value="<?php echo $programme->dateP; ?>">
  </div>
    
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</div>