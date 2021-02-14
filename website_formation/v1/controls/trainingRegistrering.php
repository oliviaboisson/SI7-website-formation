<?php

$query1 = 'SELECT id, lastname, firstname FROM users;';
$dataUser = $bdd->query($query1);

$query2 = 'SELECT id, name FROM trainings;';
$dataTraining = $bdd->query($query2);


if ($_POST['send'] && $_POST['employee'] && $_POST['training']){

	$query3 = 'INSERT INTO validated_trainings VALUES (NULL, ' . $_POST['employee'] . ', ' . $_POST['training'] . ');';
	$data = $bdd->prepare($query3);
	$data = $bdd->exec($query3);

}

include('pages/trainingRegistrering.php');