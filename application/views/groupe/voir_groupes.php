
<div class="container" style="margin-top: 60px">
<table class="table table-bordered table-condensed">
    <thead>
        <tr class="table-success">
            <th>Nom Groupe</th>
            <th>Nombre de places</th>
             <th>Enseignant</th>
             <th>Actions</th>
         </tr>
    </thead>
    <tbody>
<?php foreach($groupe as $gr):?>
    <tr class="table-primary">
	<td><?php echo $gr['nomGroupe']; ?></td>
	<td><?php echo $gr['noPlaces']; ?></td>
	<td><?php echo $gr['idEns']; ?></td>
    <td><a class="btn btn-success" href="<?php echo base_url(); ?>groupes/get_groupe/<?php echo $gr['idGroupe']; ?>">Edit groupe</a>
       <a class="btn btn-primary" href="<?php echo base_url(); ?>groupes/delete_groupe/<?php echo $gr['idGroupe']; ?>">Delete groupe</a>
   </td>
    </tr>
	<?php endforeach; ?>      
</tbody>
</table>
<a class="btn btn-success" href="<?php echo base_url(); ?>ens_controller/get_ens_add">Ajouter groupe et son programme</a>
<a class="btn btn-success" href="<?php echo base_url(); ?>all_ens">Liste enseignants</a>
</div>
