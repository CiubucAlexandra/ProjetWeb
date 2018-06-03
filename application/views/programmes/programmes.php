
<div class="container" style="margin-top: 60px">
<table class="table table-bordered table-condensed">
    <thead>
        <tr class="table-success">
            <th>SALLE</th>
            <th>Oraire Groupe</th>
            <th>Date du deroulement du cours</th>
            <?php if(isset($_COOKIE['utilisateur'])):?>
            <th>Actions</th>
            <?php endif;?>
            <th>Groupe</th>
         </tr>
    </thead>
    <tbody>

<?php foreach($programme as $prog):?>
    <?php foreach($suivis as $suivi):?>
        <?php foreach($groupes as $groupe):?>
            <?php if($groupe['idGroupe']==$suivi['idGroupe']&&$prog['idProgramme']==$suivi['idProgramme']):?>
                <tr class="table-primary">
            	<td><?php echo $prog['nomSalle']; ?></td>
            	<td><?php echo $prog['calendrier']; ?></td>
            	<td><?php echo $prog['dateP']; ?></td>
                <?php if(isset($_COOKIE['utilisateur'])):?>
                <td><a class="btn btn-success" href="<?php echo base_url(); ?>programmes/get_programme/<?php echo $prog['idProgramme']; ?>">Edit programme</a></td>
                <?php endif;?>
                <td><?php echo $groupe['nomGroupe']; ?></td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
	<?php endforeach; ?>
<?php endforeach; ?>
</tbody>
</table>
</div>
