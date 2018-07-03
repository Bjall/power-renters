<?php
	require_once('../models/dao/locationDAO.php');
	require_once('../models/dao/VehiculeDAO.php');

	$_GET['option'] = isset ($_GET['option']) ? $_GET['option'] : NULL;

	$choix = $_GET['option'];

	switch ($choix) {

		case "chercherVehiculeDispo":
		$listeVehiculeDispo = location_DAO:: Liste_Vehicules_Dispo($_GET['vehicule'],$_GET['date']);
		//var_dump($listeVehiculeDispo);
		require_once('../views/front/listeVehiculesDisponibleLoc.php');
		break;

		case "choisirVehicule":
		$detailVehicule = Vehicule_DAO:: cherche_Vehicule_ID($_GET['id']);
		var_dump($detailVehicule);
		require_once('../views/front/ficheVehiculeDetails.php');
		break;
		
		default:
		require_once('../views/404.php');
	}