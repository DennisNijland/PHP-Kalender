<p>Hier komen de verjaardagen niet</p>

<ul>
<?php
$month = array("januari","februari","maart","april","mei","juni","juli","augustus","september","oktober","november","december");

foreach($birthdays as $birthday) {?>


	<h1><ul><?=$month[$birthday['month'] -1]; ?></ul></h1>
	<h2><ul><?=$birthday['day'];?></ul></h2>
	<a href="<?= URL ?>Birthday/edit/<?= $birthday['id'];?>"><h4><ul><?=$birthday['person'];?></ul></h4></a>
	<a href="<?= URL ?>Birthday/delete/<?= $birthday['id'];?>"><ul>Delete</ul></a>

<?php }?>
</ul>
<a href="<?= URL ?>Birthday/create">Toevoegen</a>