<?php
	if (!isset ($_SESSION)) {
		session_start();
	}

	require_once('../models/dao/accessoireDAO.php');

	$_GET['option'] = isset ($_GET['option']) ? $_GET['option'] : NULL;

	$choix = $_GET['option'];

	switch ($choix) {
		case "accueilAccessoire":
		require_once('../views/back/adminRechercherAccessoire.php');
		break;

		case "accueilAjoutAcc":
		require_once('../views/back/adminAjouterAccessoire.php');
		break;

		// Afficher la liste des accessoires
		case "AfficheAccessoire": 
		$listeAcc = accessoire_DAO::affAccessoire();
		require_once('../views/back/adminListeAccessoires.php');
		break;

		//Rechercher par numéro de l'accessoire
		case "chercherAccessoireNum":
		$listeResultAcc = accessoire_DAO::chercherAccessoireNum($_GET['numeroaccessoire']);
		require_once('../views/back/adminResultatAccessoire.php');
		break;

		//Recherche par nom de l'accessoire
		case "chercherAccessoireLib":
		$listeResultAcc = accessoire_DAO::chercherAccessoireLib($_GET['nomaccessoire']);
		require_once('../views/back/adminResultatAccessoire.php');
		break;

		//Ajouter Accessoire
		case "ajoutAccessoire":
		$libelle = $_GET['libelle'];
		$prix = $_GET['prix'];
		$stock = $_GET['stock'];
		$accessoire = new Accessoire('',$libelle, $prix, $stock);
		$ajoutOK=	accessoire_DAO::ajouterAccessoire($accessoire);
		$listeAcc = accessoire_DAO::affAccessoire();
		require_once('../views/back/adminListeAccessoires.php');
		break;

		//affiche un accessoire dans la page ajouter un accessoire
		case "lireAccessoireModification":
		$_SESSION['id_acc'] = $_GET['id'];
		$afficheUnAcc=accessoire_DAO::chercherAccessoireNum($_GET['id']);
		require_once('../views/back/adminModifierAccessoire.php');
		break;

		//Modifier Accessoire
		case "AccessoireModification":
		$_SESSION['id_acc'] = $_GET['id'];
		$libelle = $_GET['libelle'];
		$prix = $_GET['prix'];
		$stock = $_GET['stock'];
		$statutAcc = $_GET['statutAcc'];
		$statutAccessoire = new StatutAccessoire ($statutAcc, '');
		$accessoire = new Accessoire($_SESSION['id_acc'], $libelle, $prix, $stock, $statutAccessoire);
		$modificationOK = accessoire_DAO::modifierAccessoire($accessoire);
		
		$listeAcc = accessoire_DAO::affAccessoire();
		require_once('../views/back/adminListeAccessoires.php');
		break;

		//Desactiver Accessoire
		case "AccessoireDesactivation":
		$_SESSION['id_acc'] = $_GET['id'];
		$accessoire = new Accessoire($_SESSION['id_acc'], '', '');
		$desactivationOK=accessoire_DAO::desactiverAccessoire($accessoire);
		$listeAcc = accessoire_DAO::affAccessoire();
		require_once('../views/back/adminListeAccessoires.php');
		break;

		default:
		require_once('../views/404.php');
	}