<?php

$query1 = 'SELECT id, lastname, firstname FROM users;';

$dataUser = $bdd->query($query1);

if ($_POST['displayButton'] && $_POST['employee']){

	$query2 = 'SELECT name FROM trainings, validated_trainings WHERE trainings.id = validated_trainings.id_training AND id_user = ' . $_POST['employee'];
	$data = $bdd->query($query2);

}

include('pages/validatedTraining.php');