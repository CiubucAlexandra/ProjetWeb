<h2><?=$title ?></h2>
<?php foreach($abonne as $abo):?>
	<h3><?php echo $abo['nomAbo']; ?></h3>
	<h3><?php echo $abo['prenomAbo']; ?></h3>
	<?php endforeach; ?>