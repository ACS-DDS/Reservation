<?php

/**
* Function : Affiche le calandrier dans le model
* Function : Réservation salle /Modifier le calandrier / Vérification BDD
* Function : Annuler la réservation (optionnel)
*/
class Reservation extends CI_Model
{ 
	try 
	{
  	$db = new PDO("pgsql:host=localhost;dbname=chat_wc", "walidb", "CZj86b4k");
 	echo 'Connexion OK';
	}
	catch(PDOException $e) {
	$db = null;
	echo 'ERREUR DB: ' . $e->getMessage();
	}
 
	if($db) {
	  ...
	  ...
	}
}