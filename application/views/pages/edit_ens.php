<div class="container" style="padding: 30px">

	<?php echo validation_errors('abonne_model'); ?>
	<?php echo form_open('ens_controller/update'); ?>
		<div class="form-group col-md-6  has-danger">
			<label for="nom">Nom enseignant</label>
			<input type="text" class="form-control"  placeholder="Add Nom" name="nom" value="<?php echo $enseignant->nomEns; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="prenom">Prenom enseignant</label>
			<input type="text" class="form-control"  placeholder="Add Prenom" name="prenom" value="<?php echo $enseignant->prenomEns; ?>">
		</div>
		
		<div class="form-group col-md-6">
			<label for="ville">Ville</label>
			<input type="text" class="form-control"  placeholder="Add Ville" name="ville" value="<?php echo $enseignant->villeEns; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="rue">Rue</label>
			<input type="text" class="form-control"  placeholder="Add Rue" name="rue" value="<?php echo $enseignant->rueEns; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="code">Code postale</label>
			<input type="text" class="form-control"  placeholder="Add Code Postale" name="code" value="<?php echo $enseignant->codePostaleEns; ?>">
		</div>
		<div class="form-group col-md-6">
			<label for="numero">Numero telephone</label>
			<input type="number" class="form-control"  placeholder="Add Numero" name="numero" value="<?php echo $enseignant->numTelEns; ?>">
		</div>
		<div>
		<div class="form-group col-md-6">
		<input type='hidden' name='id' value='<?php echo $enseignant->idEns; ?>'>
		<button class="btn btn-primary" type="submit">Modifier</button>
		</div>
		</div>
		</div>
	</form>
	</div>