<h1>Edit</h1>
	

	<form action="<?= URL ?>Birthday/editSave" method="post">
		

		Person: <input type="text" name="person" value="<?= $birthdays['person'] ?>">
		Day: <input type="text" name="day" value="<?= $birthdays['day'] ?>">
		Month: <input type="text" name="month" value="<?= $birthdays['month'] ?>">
		Year: <input type="text" name="year" value="<?= $birthdays['year'] ?>">
		

		<input type="hidden" name="id" value="<?= $birthdays['id'] ?>">
		<button type="submit">Verzenden</button>
	
	</form>
<a href="<?= URL ?>Birthday/index">Terug naar de kalender</a>