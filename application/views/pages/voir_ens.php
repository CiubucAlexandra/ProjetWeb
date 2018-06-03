
<div class="container" style="margin-top: 60px">
<table class="table table-bordered table-condensed">
    <thead>
        <tr class="table-success">
            <th>Nom Enseignant</th>
            <th>Prenom Enseignant</th>
             <th>Numero telephone</th>
             <?php if(isset($_COOKIE['utilisateur'])):?>
             <th>Ville</th>
             <th>Rue</th>
             <th>Code postale</th>
             <th>Actions</th>
             <?php endif;?>
         </tr>
    </thead>
    <tbody>
<?php foreach($enseignant as $e):?>
    <tr class="table-primary">
	<td><?php echo $e['nomEns']; ?></td>
	<td><?php echo $e['prenomEns']; ?></td>
	<td><?php echo $e['numTelEns']; ?></td>
    <?php if(isset($_COOKIE['utilisateur'])):?>
    <td><?php echo $e['villeEns']; ?></td>
    <td><?php echo $e['rueEns']; ?></td>
    <td><?php echo $e['codePostaleEns']; ?></td>
    <td><a class="btn btn-success" href="<?php echo base_url(); ?>ens_controller/get_ens/<?php echo $e['idEns']; ?>">Edit </a>
       <a class="btn btn-primary" href="<?php echo base_url(); ?>ens_controller/delete_ens/<?php echo $e['idEns']; ?>">Delete</a>
   </td>
   <?php endif;?>
    </tr>
	<?php endforeach; ?>      
</tbody>
</table>
<?php if(isset($_COOKIE['utilisateur'])):?>
<a class="btn btn-success" href="<?php echo base_url(); ?>ens_controller/add_ens">Ajouter ensegniant</a>
<?php endif;?>
</div>
