<?php

/**
* Function : Affiche le calandrier
* Function : Réservation salle /Modifier le calandrier 
* Function : Vérification BDD
* Function : Annuler la réservation (optionnel)
*/
class Reservation extends CI_Model
{
	
	function __construct()
	{
		
	}
	
	public function updateCalendar () {
		$bdd = new PDO("pgsql:host=localhost;dbname=reservation;user=walidb;password=CZj86b4k");

		foreach($bdd->query("SELECT reservation.nom,to_char(debut, 'YYYY-MM-DD') || 'T' || to_char(debut, 'HH24:MI:SS') AS 					debut,to_char(fin, 'YYYY-MM-DD') || 'T' || to_char(fin, 'HH24:MI:SS') AS fin FROM reservation") as $row) {
			$donnee = $row["nom"] . "   ////   " . $row["debut"] . "   ////   " . $row["fin"] . "<br />";
			echo $donnee;
		}
	}
}
