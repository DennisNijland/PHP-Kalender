<h1>Edit</h1>
	

	<form action="<?= URL ?>Birthday/editSave" method="post">
	
		Person: <input type="text" name="person">
		Day: <input type="text" name="day">
		Month: <input type="text" name="month">
		Year: <input type="text" name="year">
		

		<input type="hidden" name="id">
		<input type="submit" value="Verzenden">
	
	</form>
