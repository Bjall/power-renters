<?php
	require_once('../models/dao/VehiculeDAO.php');

	$_GET['option'] = isset ($_GET['option']) ? $_GET['option'] : NULL;

	$choix = $_GET['option'];

	switch ($choix) {

		case "accueil":
		require_once('../views/back/adminAccueil.php');
		break;

		case "rechercheVehMar":
		require_once('../views/back/adminRechercheVehiculeMarque.php');
		break;

	    // Rechercher un véhicule par id
		case "ChercherVehiculeId":
		$paulineestjalouse = Vehicule_DAO::cherche_Vehicule_ID($_GET['numerovehicule']);
		require_once('../views/back/adminRechercheVehicule.php');
		break;

		case "ChercherVehiculeMarque":
		$paulineestjalouse = Vehicule_DAO::cherche_Vehicule_marque($_GET['marquevehicule']);
		require_once('../views/back/adminRechercheVehicule.php');
		break;

		case "ListeVehicule":
		$listeveh = new Vehicule_DAO();
		$lapoesiepourbene = $listeveh->Liste_Vehicules();
		require_once('../views/back/adminListeVehicules.php');
		break;

		case "Toutcon":
		$tampondenathalie = Vehicule_DAO::listeCouleur();
		$lalistedestypes = Vehicule_DAO::listeTypeVehicule();
		$lalistedesportes = Vehicule_DAO::listeNbPorte();
		$lalistedesboites = Vehicule_DAO::listeTypeDeBoite();	
		$lalistedescarburant= Vehicule_DAO::listeTypeCarburant();
		$lalistedespermis = Vehicule_DAO::listeTypePermis();
		$lalistedesmodeles = Vehicule_DAO::ListeModele();
		require_once('../views/back/adminAjouterVehicule.php');
		break;

		case "Presquetoutcon":
		$lalistedesmarques = Vehicule_DAO:: ListeMarque();
		require_once('../views/back/adminAjoutModele.php');
		break;

		case 'AjouterModele';
		$marque = htmlspecialchars($_GET['marque']);
		$modele = htmlspecialchars($_GET['modele']);
		$lemodele = new VehModele ('', $modele, $marque);
		Vehicule_DAO::ajoutModele($lemodele);
		$listeveh = new Vehicule_DAO();
		$lapoesiepourbene = $listeveh->Liste_Vehicules();
		require_once('../views/back/adminListeVehicules.php');
		break;

		case "Ajouterunvehicule";
		$modele = htmlspecialchars($_GET['modele']);
		$typevehicule = htmlspecialchars($_GET['typevehicule']);
		$couleur = htmlspecialchars($_GET['couleur']);
		$porte = htmlspecialchars($_GET['porte']);
		$boite = htmlspecialchars($_GET['boite']);
		$carburant = htmlspecialchars($_GET['carburant']);
		$typepermis = htmlspecialchars($_GET['typepermis']);

		$vehdateachat = htmlspecialchars($_GET['vehdateachat']);
		$vehphoto = htmlspecialchars($_GET['vehphoto']);
		$place = htmlspecialchars($_GET['place']);
		$assurance = htmlspecialchars($_GET['assurance']);
		$mec = htmlspecialchars($_GET['mec']);			
		$kmage = htmlspecialchars($_GET['kmage']);
		$chfsc = htmlspecialchars($_GET['chfsc']);
		$chreel = htmlspecialchars($_GET['chreel']);
		$cylindre = htmlspecialchars($_GET['cylindre']);

		$lemodele= new Vehmodele($modele);
		$letype= new VehType($typevehicule);
		$lacouleur= new VehCouleur($couleur);
		$lesportes= new VehPorte($porte);
		$laboite= new VehBoite($boite);
		$lecarburant= new VehTypeCarburant($carburant);
		$letypedepermis= new TypePermis($typepermis);
		
		$vehicule = new Vehicule('', $vehdateachat, $vehphoto, $place, $assurance, $vehdateachat, $kmage, $chfsc, $chreel, $cylindre, $letype, $laboite, $lecarburant, $lacouleur, $lemodele, $lesportes, $letypedepermis,'');
		Vehicule_DAO::ajouterVehicule($vehicule);

		/*$reussiteAjout=client_DAO::ajouterClientComplet($client);*/
		/*$listeClient  =client_DAO:: Liste_Client();*/
		$listeveh = new Vehicule_DAO();
		$lapoesiepourbene = $listeveh->Liste_Vehicules();
		require_once('../views/back/adminListeVehicules.php');
		break;

		default:
		require_once('../views/404.php');
	}