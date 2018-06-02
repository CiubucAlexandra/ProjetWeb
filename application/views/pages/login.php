<div class="container" style="padding: 30px">
<h3>LOGIN<H3>
  <?php echo validation_errors(); ?>
  <?php echo form_open('user_controller/login'); ?>
  <div class="form-group col-md-6  has-danger">
    <label for="exampleInputEmail1">Adresse d'email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="user">
  </div>
  <div class="form-group col-md-6  has-danger">
    <label for="exampleInputPassword1">Mot passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  <button type="submit" class="btn btn-primary">Envoyer</button>
   <?php if(isset($_COOKIE['utilisateur'])):?>
    <a class="btn btn-info" href="<?php echo base_url(); ?>new_user">Nouveau compt</a>
   <?php endif;?>
</form>
</div>
