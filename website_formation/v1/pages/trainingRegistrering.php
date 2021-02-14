<t1>S'inscrire à une formation</t1>

<form method="POST" action="index.php?page=inscription">


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

	<label class="label">Choisir une formation : </label><br>

	<div class="listBox">

		<select name="training" class="select">

	   		<option value="">-- Veuillez sélectionner une formation --</option>

		<?php

		while ($training = $dataTraining->fetch()){

	    	echo '<option value=' . $training['id'] . '>' . $training['name'] . '</option>';

		}

		?>

		</select>

	</div>

	<br>
	<input type="submit" name="send" value="Envoyer" class="button">

</form>

<?php

if ($_POST['send'] && $_POST['employee'] && $_POST['training']){

	echo '<p style=color:green>La formation a bien été demandée !</p>';
	
}

?>

</div>