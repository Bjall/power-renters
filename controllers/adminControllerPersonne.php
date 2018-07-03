<?php

	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/dao/clientDAO.php');

	$_GET['option'] = isset ($_GET['option']) ? $_GET['option'] : NULL;

	$choix = $_GET['option'];

	switch ($choix) {

	//-------------------------- Gestion des personnes ------------------------

		// Quand on veut une page vierge d'ajout client
		case "pageAjoutClient":
		$civilite = new Civilite('');
		$cpville = new CPVille('', '');
		$adresse = new Adresse('', '', '', $cpville);
		$statutPersonne = new StatutPersonne('', '', '');
		$detenir = new Detenir('', '');
		$afficheUnClient[] = new client('', $civilite, '', '', '', '', '', $statutPersonne, '', $adresse, $detenir);
		require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminAjouterClient.php');
		break;

		// Quand on veut une page vierge d'ajout personnel
		case "pageAjoutPersonnel":
		$civilite = new Civilite('');
		$cpville = new CPVille('', '');
		$adresse = new Adresse('', '', '', $cpville);
		$statutPersonne = new StatutPersonne('', '', '');
		$detenir = new Detenir('', '');
		$afficheUnMembre[] = new client('', $civilite, '', '', '', '', '', $statutPersonne, '', $adresse, $detenir);
		require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminAjouterPersonnel.php');
		break;

		// Recherche par numéro client
		case "chercherClient":   
		$faireplaisiranathalie = client_DAO::cherche_Client($_GET['numeroclient']);
		require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminRechercheClient.php');
		break;

		case "ListePermis":   
		$listePermis = client_DAO::listePermis($_GET['id']);
		require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListePermis.php');
		break;

		// Recherche par nom du client
		case "chercherNom":
		$faireplaisiranathalie = client_DAO::cherche_Client_Nom($_GET['nomclient']);
		require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminRechercheClient.php');
		break;

		// Afficher la liste de tous les clients
		case "listeClient":
		$listeClient = client_DAO:: Liste_Client();
		require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListeClients.php');
		break;

		// Modification client
		case "modificationClient":   
		$id = htmlspecialchars($_GET['id']);
		$civ = htmlspecialchars($_GET['cbCivilite']);
		$nom = htmlspecialchars($_GET['nom']);
		$prenom = htmlspecialchars($_GET['prenom']);
		$ddn = htmlspecialchars($_GET['birthdate']);
		$mail = htmlspecialchars($_GET['email']);
		$passwd = htmlspecialchars($_GET['password']);
		$passwdcheck = htmlspecialchars($_GET['password-check']);
		$stat = htmlspecialchars($_GET['cbStat']);
		$adressel1 = htmlspecialchars($_GET['adressel1']);
		$adressel2 = htmlspecialchars($_GET['adressel2']);
		$adressel3 = htmlspecialchars($_GET['adressel3']);
		$codepostal = htmlspecialchars($_GET['codepostal']);
		$numPermis = htmlspecialchars($_GET['numPermis']);
		$cpville = new CPVille($codepostal, '');
		$adresse = new Adresse($adressel1, $adressel2, $adressel3, $cpville);
		$statutPersonne = new StatutPersonne($stat, '', '');
		$client = new Client($id, $civ, $nom, $prenom, $ddn, $mail, $passwd, $statutPersonne, $numPermis, $adresse, '');
		$reussiteModifCliPers = client_DAO::updateClientTest($client);
		if ($stat == 1 || $stat == 2 || $stat == 5) {
			$listeClient = client_DAO:: Liste_Client();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListeClients.php');
		} else {
			$listePersonnel = client_DAO::Liste_Personnel();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListePersonnel.php');
		}
		break;

		case "modificationStatutPersonne":   
		$id = htmlspecialchars($_GET['id']);
		$stat = htmlspecialchars($_GET['stat']);
		$client = new Client($id, '', '', '', '', '', '', '', '', '', '');	
		if ($stat == 1 || $stat == 2 || $stat == 5) {
			$reussitemodif = client_DAO::updateClientStatut($client);
			$listeClient = client_DAO:: Liste_Client();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListeClients.php');
		} else {		
			$reussitemodif = client_DAO::updatePersonnelStatut($client);
			$listePersonnel = client_DAO::Liste_Personnel();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListePersonnel.php');
		}
		break;

		// Ajout personne
		case "ajouterPersonne":
		$id = htmlspecialchars($_GET['id']);
		$civ = htmlspecialchars($_GET['cbCivilite']);
		$nom = htmlspecialchars($_GET['nom']);
		$prenom = htmlspecialchars($_GET['prenom']);
		$ddn = htmlspecialchars($_GET['birthdate']);
		$mail = htmlspecialchars($_GET['email']);
		$passwd = htmlspecialchars($_GET['password']);
		$passwdcheck = htmlspecialchars($_GET['password-check']);
		$stat = htmlspecialchars($_GET['cbStat']);			
		$adressel1 = htmlspecialchars($_GET['adressel1']);
		$adressel2 = htmlspecialchars($_GET['adressel2']);
		$adressel3 = htmlspecialchars($_GET['adressel3']);
		$codepostal = htmlspecialchars($_GET['codepostal']);			
		$ville = htmlspecialchars($_GET['ville']);
		$cpville = new CPVille($codepostal, $ville);
		$adresse = new Adresse($adressel1, $adressel2, $adressel3, $cpville);
		$statutPersonne = new StatutPersonne($stat, '', '');		
		$client = new Client($id, $civ, $nom, $prenom, $ddn, $mail, $passwd, $statutPersonne, '', $adresse, '');
		$reussiteAjout = client_DAO::ajouterClientComplet($client);
		if ($stat == 1 || $stat == 2){		
			$listeClient = client_DAO::Liste_Client();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListeClients.php');
		} else {		
			$listePersonnel = client_DAO::Liste_Personnel();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListePersonnel.php');
		}
		break;

		// Envoi vers la page ajout permis
		case "pajeAjoutPermis":
		$afficheUnClient = client_DAO::cherche_Client($_GET['id']);
		require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminAjouterClientPermis.php');
		break;

		case "ajouterPermis":
		$stat = $_GET['stat'];
		$id = htmlspecialchars($_GET['id']);
		$datepermis = htmlspecialchars($_GET['permisdate']);
		$typePermis = htmlspecialchars($_GET['typePermis']);
		$numPermis = htmlspecialchars($_GET['numPermis']);
		$detenir = new Detenir($datepermis, $typePermis);
		$client = new Client($id, '', '', '', '', '', '', '', $numPermis, '', $detenir);
		$reussiteAjoutPermis = client_DAO::ajoutPermis($client);
		if ($stat == 1 || $stat == 2 || $stat == 5) {
			$listeClient = client_DAO::Liste_Client();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListeClients.php');
		} else {
			$listePersonnel = client_DAO::Liste_Personnel();
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListePersonnel.php');
		}
		break;

		case "lireModificationPermis":
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminAjouterClientPermis.php');

		// Affiche un client dans la page ajouter un client
		case "lirePersonneModification":
		$stat = htmlspecialchars($_GET['stat']);
		if ($stat == 1 || $stat == 2 || $stat == 5){
			$afficheUnClient = client_DAO::cherche_Client($_GET['id']);
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminModificationClient.php');
		} else {
			$afficheUnMembre = client_DAO::cherche_Client($_GET['id']);
			require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminModificationPersonnel.php');
		}
		break;

		// Afficher la liste de tous le personnel
		case "listePersonnel":
		$listePersonnel = client_DAO::Liste_Personnel();
		require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/back/adminListePersonnel.php');
		break;

		default:
		require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/404.php');

	}