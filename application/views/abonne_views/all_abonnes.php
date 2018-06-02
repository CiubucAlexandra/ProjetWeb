
<div class="container" style="margin-top: 60px">
<table class="table table-bordered table-condensed">
    <thead>
        <tr class="table-success">
            <th>Nom </th>
            <th>Prenom</th>
            <th>Date naissance</th>
            <?php if(isset($_COOKIE['utilisateur'])):?>
            <th>Actions</th>
        <?php endif;?>
         </tr>
    </thead>
    <tbody>
<?php foreach($abonne as $ab):?>
    <tr class="table-primary">
	<td><?php echo $ab['nomAbo']; ?></td>
	<td><?php echo $ab['prenomAbo']; ?></td>
	<td><?php echo $ab['dateNaissanceAbo']; ?></td>
    <?php if(isset($_COOKIE['utilisateur'])):?>
    <td>
        <a class="btn btn-primary" href="<?php echo base_url(); ?>abonne_controller/delete/<?php echo $ab['idAbo']; ?>">Delete</a>
       <a class="btn btn-success" href="<?php echo base_url(); ?>abonne_controller/get/<?php echo $ab['idAbo']; ?>">Edit</a>
       <a class="btn btn-success" href="<?php echo base_url(); ?>abonnement_controller/check/<?php echo $ab['idAbo']; ?>">Ajouter ou modifier abonnement</a>
    </td>
<?php endif;?>
    </tr>
	<?php endforeach; ?>
</tbody>
</table>
</div>
