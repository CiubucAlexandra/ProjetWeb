
<div class="container" style="margin-top: 60px">
<table class="table table-bordered table-condensed">
    <thead>
        <tr class="table-success">
            <th>SALLE</th>
            <th>Oraire Groupe</th>
            <th>Date du deroulement du cours</th>
         </tr>
    </thead>
    <tbody>
<?php foreach($programme as $prog):?>
    <tr class="table-primary">
	<td><?php echo $prog['nomSalle']; ?></td>
	<td><?php echo $prog['calendrier']; ?></td>
	<td><?php echo $prog['dateP']; ?></td>
    </tr>
	<?php endforeach; ?>
</tbody>
</table>
</div>
