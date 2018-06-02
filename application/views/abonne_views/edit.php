<div class="container" style="padding: 30px">
<h2><?=$title ?></h2>
	<?php echo validation_errors(); ?>
	<?php echo form_open('abonne_controller/edit_abonne'); ?>
		<input type="hidden" class="form-control" name="id" value="<?php echo $abonne->idAbo; ?>">
		<div class="form-group col-md-6  has-danger">
			<label for="formGroupExampleInput">Nom abonne</label>
			<input type="text" class="form-control"   name="nom" value="<?php echo $abonne->nomAbo; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Prenom abonne</label>
			<input type="text" class="form-control"  name="prenom" value="<?php echo $abonne->prenomAbo; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Date naissance</label>
			<input type="date" class="form-control"   name="date" value="<?php echo $abonne->	dateNaissanceAbo; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Occupation</label>
			<input type="text" class="form-control"  name="occupation" value="<?php echo $abonne ->occupationAbo; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Ville</label>
			<input type="text" class="form-control"   name="ville" value="<?php echo $abonne->villeAbo; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Rue</label>
			<input type="text" class="form-control"   name="rue" value="<?php echo $abonne->rueAbo; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Code postale</label>
			<input type="text" class="form-control"   name="code" value="<?php echo $abonne->codePostaleAbo; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Numero telephone</label>
			<input type="number" class="form-control"   name="numero" value="<?php echo $abonne->numTelAbo; ?>">
		</div>
		<div>
		<div class="form-group col-md-6">
		<button class="btn btn-primary" type="submit">Submit</button>
		<a class="btn btn-primary" href="<?php echo base_url(); ?>edit_abonne" role="button">Liste abonnes</a>
		</div>
		</div>
		</div>
	</form>
	</div>