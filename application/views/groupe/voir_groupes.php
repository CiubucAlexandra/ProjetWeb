
<div class="container" style="margin-top: 60px">
<table class="table table-bordered table-condensed">
    <thead>
        <tr class="table-success">
            <th>Nom Groupe</th>
            <th>Nombre de places</th>
             <th>Enseignant</th>
              <?php if(isset($_COOKIE['utilisateur'])):?>
             <th>Actions</th>
             <?php endif;?>
         </tr>
    </thead>
    <tbody>
<?php foreach($groupe as $gr):?>
    <?php foreach($enseignant as $ens):?>
        <?php if($gr['idEns']==$ens['idEns']):?>
            <tr class="table-primary">
        	<td><?php echo $gr['nomGroupe']; ?></td>
        	<td><?php echo $gr['noPlaces']; ?></td>
        	<td><?php echo $ens['nomEns'].' '.$ens['prenomEns'] ; ?></td>
            <?php if(isset($_COOKIE['utilisateur'])):?>
            <td><a class="btn btn-success" href="<?php echo base_url(); ?>groupes/get_groupe/<?php echo $gr['idGroupe']; ?>">Edit groupe</a>
               <a class="btn btn-primary" href="<?php echo base_url(); ?>groupes/delete_groupe/<?php echo $gr['idGroupe']; ?>">Delete groupe</a>
            <?php endif;?>
           </td>
            </tr>
    <?php endif;?>
    <?php endforeach; ?> 
	<?php endforeach; ?>      
</tbody>
</table>
<?php if(isset($_COOKIE['utilisateur'])):?>
<a class="btn btn-success" href="<?php echo base_url(); ?>ens/add_groupe">Ajouter groupe et son programme</a>
<?php endif;?>
<a class="btn btn-success" href="<?php echo base_url(); ?>all_ens">Liste enseignants</a>
</div>
