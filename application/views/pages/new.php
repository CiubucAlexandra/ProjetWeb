<div class="container" style="padding: 30px">
<h3>Pour la creation d'un nouveau compte vous devrez completer les champs suivantes:</h3>
  <?php echo validation_errors(); ?>
  <?php echo form_open('user_controller/new_user'); ?>
  <div class="form-group col-md-6  has-danger">
      <label for="formGroupExampleInput">Nom abonne</label>
      <input type="text" class="form-control"  placeholder="Add Nom" name="nom">
    </div>
    <div class="form-group col-md-6">
      <label for="formGroupExampleInput">Prenom abonne</label>
      <input type="text" class="form-control"  placeholder="Add Prenom" name="prenom">
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
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group col-md-6">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

