<?php
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/dao/VehiculeDAO.php');

	if(isset($_GET['option'])) {

		$choix = $_GET['option'];

		switch ($choix) {

			case "ListeVoitures":
			$liste_v = new Vehicule_DAO();
			$liste_vehicules = $liste_v->Liste_Vehicules();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/listeVoituresDisponibles.php');
			break;

			case "ListeUtilitaires":
			$liste_v = new Vehicule_DAO();
			$liste_vehicules = $liste_v->Liste_Vehicules();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/listeUtilitairesDisponibles.php');
			break;

			case "ListeMotos":
			$liste_v = new Vehicule_DAO();
			$liste_vehicules = $liste_v->Liste_Vehicules();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/listeMotosDisponibles.php');
			break;

			case "ListeVelos":
			$liste_v = new Vehicule_DAO();
			$liste_vehicules = $liste_v->Liste_Vehicules();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/listeVelosDisponibles.php');
			break;

			default:
			require_once('../views/404.php');
		}
	} else {
		require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/accueil.php');
	}