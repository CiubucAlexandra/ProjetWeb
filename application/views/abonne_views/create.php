<div class="container" style="padding: 30px">
<h2><?=$title ?></h2>
	<?php echo validation_errors('abonne_model'); ?>
	<?php echo form_open('abonne_controller/create'); ?>
		<div class="form-group col-md-6  has-danger">
			<label for="formGroupExampleInput">Nom abonne</label>
			<input type="text" class="form-control"  placeholder="Add Nom" name="nom">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Prenom abonne</label>
			<input type="text" class="form-control"  placeholder="Add Prenom" name="prenom">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Date naissance</label>
			<input type="date" class="form-control"  placeholder="Add Date" name="date">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Occupation</label>
			<input type="text" class="form-control"  placeholder="Add Occupation" name="occupation">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Ville</label>
			<input type="text" class="form-control"  placeholder="Add Ville" name="ville">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Rue</label>
			<input type="text" class="form-control"  placeholder="Add Rue" name="rue">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Code postale</label>
			<input type="text" class="form-control"  placeholder="Add Code Postale" name="code">
		</div>
		<div class="form-group col-md-6">
			<label for="formGroupExampleInput">Numero telephone</label>
			<input type="number" class="form-control"  placeholder="Add Numero" name="numero">
		</div>
		<div>
		<div class="form-group col-md-6">
		<button class="btn btn-primary" type="submit">Submit</button>
		<a class="btn btn-primary" href="<?php echo base_url(); ?>tableabonne" role="button">Liste abonnes</a>
		</div>
		</div>
		</div>
	</form>
	</div>