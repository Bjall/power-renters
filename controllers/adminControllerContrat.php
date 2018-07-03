<?php
	require_once('../models/dao/contratDAO.php');


	$_GET['option'] = isset ($_GET['option']) ? $_GET['option'] : NULL;

	$choix = $_GET['option'];

	switch ($choix) {

	// Rechercher un contrat par son numéro
		 case "rechercheContratNum":
	    	/*$contratRecherche = new contrat_DAO();*/
			/*$ListeContrats =  $contratRecherche->cherche_Contrat($_GET['contratnumero']);*/
			$ListeContrats = contrat_DAO::cherche_Contrat($_GET['contratnumero']);

			require_once '../views/back/adminResultatcontrat.php';
			break;

		// Afficher la liste de tous les contrats
		case "AfficherContrat" :
		    $maliste = new contrat_DAO();
		    $listeContrats = $maliste->Liste_Contrats();
			require_once('../views/back/adminListeContrats.php');
			break;

 		//Ajout contrat
	    case "ajoutContrat": 
	        $cd = htmlspecialchars($_GET['datec']);
			$cl = htmlspecialchars($_GET['lieux']);
			$cdf = htmlspecialchars($_GET['cdf']);
			$cdd = htmlspecialchars($_GET['cdd']);
			$cds = htmlspecialchars($_GET['cds']);
			$cc = htmlspecialchars($_GET['cc']);
			$cacc = htmlspecialchars($_GET['cacc']);
			$cci = htmlspecialchars($_GET['cci']);
			$ccip = htmlspecialchars($_GET['ccip']);
			$cvm = htmlspecialchars($_GET['cvm']);
			

			$client = new Client('','',$cci,$ccip,'','','','','','','');
			/*$vehmodele = new Vehmodele('', $cvm, '');*/
			$vehicule = new Vehicule($cvm, '','', '', '', '', '', '', '', '', '', '', '', '','', '', '','');
			$contrat = new contratLocation('', $cd, $cl,$cdd , $cdf, $cc,$cds , $cacc,$client,$vehicule);
	       /* $dao = new contrat_DAO;*/
			$reussiteAjout=contrat_DAO::ajouterContrat($contrat);
		
			require_once('../views/back/adminAjouterContrat.php');
			break;
		
		case "pageAjoutContratvide":
			
			$afficheUnContrat[] = new contratLocation('','','','','','','', '', '','');
			require_once('../views/back/adminAjouterContrat.php');
	        break;

		
		case "modificationContrat": 
		$idclient = htmlspecialchars($_GET['idclient']);
		$idcontrat = htmlspecialchars($_GET['idcontrat']);
		$idvehicule = htmlspecialchars($_GET['idvehicule']);
		$cd = htmlspecialchars($_GET['datec']);
			$cl = htmlspecialchars($_GET['lieux']);
			$cdf = htmlspecialchars($_GET['cdf']);
			$cdd = htmlspecialchars($_GET['cdd']);
			$cds = htmlspecialchars($_GET['cds']);
			$cc = htmlspecialchars($_GET['cc']);
			$cacc = htmlspecialchars($_GET['cacc']);
			$cci = htmlspecialchars($_GET['cci']);
			$ccip = htmlspecialchars($_GET['ccip']);
			$cvm = htmlspecialchars($_GET['cvm']);
			

			$client = new Client($idclient,'',$cci,$ccip,'','','','','','','');
			$vehmodele = new Vehmodele('', $cvm, '');
			$vehicule = new Vehicule($idvehicule, '','', '', '', '', '', '', '', '', '', '', '', '',$vehmodele, '', '','');
			$contrat = new contratLocation($idcontrat, $cd, $cl,$cdd , $cdf, $cc,$cds , $cacc,$client,$vehicule);

			$reussiteupdate = contrat_DAO::updateContrat($contrat);
			$listeContrats  =contrat_DAO:: Liste_Contrats();
			require_once('../views/back/adminListeContrats.php');
			break;

		
	case "lireContratModification":
	
		$afficheUnContrat =contrat_DAO::cherche_Contrat($_GET['id']);
		require_once('../views/back/adminModificationContrat.php');
	break;

	

	    default:
			require_once('../views/404.php');
	}