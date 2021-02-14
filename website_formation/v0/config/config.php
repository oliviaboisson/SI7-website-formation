<?php

try{
	$bdd = new PDO('mysql:host=localhost;dbname=trainingDatabase;charset=utf8', 'usersio', 'pwsio');
}

catch (Exception $e){
	die('Erreur : ' . $e->getMessage());
}

