<?php

try 
	{
  	$db = new PDO("pgsql:host=localhost;dbname=reservation", "walidb", "CZj86b4k");
 	echo 'Connexion OK'."<br/>";
	}
	catch(PDOException $e) {
	$db = null;
	echo 'ERREUR DB: ' . $e->getMessage();
	}

	$qry = $db->prepare("SELECT * from reservation;");
	$qry->execute();
 
	$noms = $qry->fetchAll();
	foreach ($noms as $nom) {
		foreach ($nom as $user) {
			echo($user) ."<br>";
		}
	}


?>