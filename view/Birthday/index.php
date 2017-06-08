<p>Hier komen de verjaardagen niet</p>

<ul>
<?php
$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");

foreach($birthdays as $birthday) {?>


	<h1><ul><?=$month[$birthday['month'] -1]; ?></ul></h1>
	<h2><ul><?=$birthday['day'];?></ul></h2>
	<a href="<?= URL ?>Birthday/edit/<?= $birthday['id'];?>"><ul><?=$birthday['person'];?></ul></a>
	<a href="<?= URL ?>Birthday/delete/<?= $birthday['id'];?>" onclick="return confirm('Weet je zeker dat je deze verjaardag wilt verwijderen?');">x</a>
<?php }?>
</ul>
<a href="<?= URL ?>Birthday/create">Toevoegen</a>