<p>Hier komen de verjaardagen niet</p>

<ul>
<?php
$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");

foreach($birthdays as $birthday) {?>


	<h1><ul><?=$birthday['person'];?></ul></h1>
	<h2><ul><?=$birthday['day'];?></ul></h2>
	<ul><?=$month[$birthday['month'] -1]; ?></ul>
	<a href="<?= URL ?>Birthday/edit">Edit</a>
	<a href="<?= URL ?>Birthday/delete">Delete</a>

<?php }?>
</ul>
<a href="<?= URL ?>Birthday/create">Toevoegen</a>