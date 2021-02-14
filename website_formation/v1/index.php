<?php

include('config/config.php');

include('controls/templates/header.php');

$path = !empty($_GET['page']) ? $_GET['page'] : NULL;

switch ($path){

	case 'home':
		include('controls/home.php');
		break;

	case 'list':
		include('controls/trainingList.php');
		break;

	case 'valid':
		include('controls/validatedTraining.php');
		break;

	case 'inscription':
		include('controls/trainingRegistrering.php');
		break;
		
	default:
		include('controls/home.php');
		break;
}

include('controls/templates/footer.php');
