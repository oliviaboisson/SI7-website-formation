
<t1>Formations validées</t1>


<form method='POST' action='index.php?page=valid'>

	<label class="label">Choisir un employé : </label><br>

	<div class="listBox">

		<select name="employee" class="select">

	   		<option value="">-- Veuillez sélectionner un employé --</option>

		<?php

		while ($user = $dataUser->fetch()){

	    	echo '<option value=' . $user['id'] . '>' . $user['lastname'] . ' ' . $user['firstname'] . '</option>';

		}

		?>

		</select>

	</div>

	<br><input type="submit" name="displayButton" value="Afficher" class="button"><br>

</form>
 
<?php

if ($_POST['displayButton'] && $_POST['employee']){

echo "<div class=validBox>";

echo "<t2>Formations effectuées par l'employé</t2>";

echo "<ul>";

	while ($training = $data->fetch()){

		echo '<li class=training>' . $training['name'] . '</li>';

	}
}

echo "</ul>";

echo "</div>";

?>

</div>