<div class="container">
	
	<h1>Toevoegen</h1>
	<p>Vul de naam en de geboortedatum in en klik op "Verzenden" om het op te slaan in de database.</p>
	<form action="<?= URL ?>Birthday/createSave" method="post">
	
		<input type="text" name="person" placeholder="Voor en achternaam">
		<input type="text" name="day" placeholder="Geboortedag">
		<input type="text" name="month" placeholder="Geboortemaand">
		<input type="text" name="year" placeholder="Geboortejaar">		
		</select>

		<input type="submit" value="Verzenden">
	
	</form>

</div>