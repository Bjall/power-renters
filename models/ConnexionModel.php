<?php

	// Ce fichier gère la connexion à un espace sécurisé (client ou admin)

	$dbConn = null;

	// Requête qui récupère la liste des clients (et leur statut)
	function getClients() {
		try{
		 	// Ouverture de la connexion à la base de données
			$dbConn = new PDO('mysql:host=localhost;port=3306;charset=utf8;dbname=powerrenters', 'root', '');
		}catch (Exception $ex){
			// En cas d'erreur, gestion d'une exception (à voir plus tard)
			die('Erreur : '.$e->getMessage());
		}

		$req = $dbConn->query('SELECT * FROM client');

		return $req;
	}