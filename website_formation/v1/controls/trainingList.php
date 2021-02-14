<?php

$query = 'SELECT * FROM trainings;';
$data = $bdd->query($query);

$n = 0;

include('pages/trainingList.php');