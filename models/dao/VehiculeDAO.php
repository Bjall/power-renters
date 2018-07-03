<?php 
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/dao/DAO.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehCategorie.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehType.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/TypePermis.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehBoite.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehMar.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehPorte.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehModele.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehTypeCarburant.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehCouleur.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/Vehicule.php');

class Vehicule_DAO extends DAO {

	static function Liste_Vehicules() {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery ='call SP_Liste_Vehicule';
		$SQLResult =  $vehiculedao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$marque = new VehMarque('', $SQLRow->vehmar_libelle);
				$modele = new Vehmodele('', $SQLRow->vehmmod_libelle, $marque);
				$categorie = new VehCategorie('', $SQLRow->cat_libelle);
				$type = new VehType('',$SQLRow->type_veh_libelle,$SQLRow->type_veh_prix, $categorie);
				$carburant = new VehTypeCarburant('', $SQLRow->vehm_carb_libelle);
				$porte = new VehPorte('', $SQLRow->veh_porte_libelle);
				$couleur = new VehCouleur('', $SQLRow->veh_coul_libelle);
				$boite = new VehBoite('', $SQLRow->veh_boite_libelle);
				$type_permis = new TypePermis('', '', $SQLRow->typepermis_libelle);
				$vehicule[] = new vehicule($SQLRow->veh_id, $SQLRow->veh_date_achat, $SQLRow->veh_photo, $SQLRow->veh_nb_place, $SQLRow->veh_assur, $SQLRow->veh_date_mec, $SQLRow->veh_kmage, $SQLRow->veh_ch_fisc, $SQLRow->veh_ch_reel, $SQLRow->veh_cyl, $type, $boite, $carburant, $couleur, $modele, $porte, $type_permis,'');
			}
			$SQLResult->closeCursor();
			return $vehicule;
		}
	}

	static function cherche_Vehicule_marque($lamarque) {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery ='call SP_Recherche_Veh_Marque(:marque)';
		$SQLResult = $vehiculedao->prepare($SQLQuery);
		$SQLResult->bindValue(':marque', $lamarque);
		$SQLResult->execute();	
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$marque = new VehMarque('', $SQLRow->vehmar_libelle);
				$modele = new Vehmodele('', $SQLRow->vehmmod_libelle, $marque);
				$categorie = new VehCategorie('', $SQLRow->cat_libelle);
				$type = new VehType('',$SQLRow->type_veh_libelle,$SQLRow->type_veh_prix, $categorie);
				$carburant = new VehTypeCarburant('', $SQLRow->vehm_carb_libelle);
				$porte = new VehPorte('', $SQLRow->veh_porte_libelle);
				$couleur = new VehCouleur('', $SQLRow->veh_coul_libelle);
				$boite = new VehBoite('', $SQLRow->veh_boite_libelle);
				$type_permis = new TypePermis('', '', $SQLRow->typepermis_libelle);
				$paulineestjalouse[] = new vehicule($SQLRow->veh_id, $SQLRow->veh_date_achat, $SQLRow->veh_photo, $SQLRow->veh_nb_place, $SQLRow->veh_assur, $SQLRow->veh_date_mec, $SQLRow->veh_kmage, $SQLRow->veh_ch_fisc, $SQLRow->veh_ch_reel, $SQLRow->veh_cyl, $type, $boite, $carburant, $couleur, $modele, $porte, $type_permis,'');
			}
			$SQLResult->closeCursor();
			return $paulineestjalouse;
		}
	}

	static function cherche_Vehicule_ID($id) {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery ='call SP_Recherche_Veh_ID (:idveh)';
		$SQLResult = $vehiculedao->prepare($SQLQuery);
		$SQLResult->bindValue(':idveh', $id);
		$SQLResult->execute();	
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$marque = new VehMarque('', $SQLRow->vehmar_libelle);
				$modele = new Vehmodele('', $SQLRow->vehmmod_libelle, $marque);
				$categorie = new VehCategorie('', $SQLRow->cat_libelle);
				$type = new VehType('',$SQLRow->type_veh_libelle,$SQLRow->type_veh_prix, $categorie);
				$carburant = new VehTypeCarburant('', $SQLRow->vehm_carb_libelle);
				$porte = new VehPorte('', $SQLRow->veh_porte_libelle);
				$couleur = new VehCouleur('', $SQLRow->veh_coul_libelle);
				$boite = new VehBoite('', $SQLRow->veh_boite_libelle);
				$type_permis = new TypePermis('', '', $SQLRow->typepermis_libelle);
				$paulineestjalouse[] = new vehicule($SQLRow->veh_id, $SQLRow->veh_date_achat, $SQLRow->veh_photo, $SQLRow->veh_nb_place, $SQLRow->veh_assur, $SQLRow->veh_date_mec, $SQLRow->veh_kmage, $SQLRow->veh_ch_fisc, $SQLRow->veh_ch_reel, $SQLRow->veh_cyl, $type, $boite, $carburant, $couleur, $modele, $porte, $type_permis,'');
			}
			$SQLResult->closeCursor();
			return $paulineestjalouse;
		}
	}

	static function ListeModele() {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery = 'SELECT vehmmod_id, vehmmod_libelle FROM vehm_modele';
		$SQLResult =  $vehiculedao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$modele[] = new VehModele($SQLRow->vehmmod_id, $SQLRow->vehmmod_libelle);
			}
			$SQLResult->closeCursor();
			return $modele;
		}
	}

	static function ajoutModele($modele){
		$vehiculedao= new Vehicule_DAO();
		$SQLQuery = 'call SP_Ajout_Modele ( :modelLibelle, :idMarque)';
		$SQLResult = $vehiculedao->prepare($SQLQuery);
		$SQLResult->bindValue(':modelLibelle', $modele->getVehmmod_libelle());
		$SQLResult->bindValue(':idMarque', $modele->getVeh_marque());
		$SQLResult->execute();
		$SQLResult->closeCursor();
	}

	static function listeCouleur() {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery = 'SELECT veh_coul_id, veh_coul_libelle FROM veh_couleur';
		$SQLResult =  $vehiculedao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$couleur[] = new VehCouleur($SQLRow->veh_coul_id, $SQLRow->veh_coul_libelle);
			}
			$SQLResult->closeCursor();
			return $couleur;
		}
	}

	static function listeTypeVehicule(){
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery = 'SELECT type_veh_id, type_veh_libelle FROM type_veh';
		$SQLResult =  $vehiculedao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$type[] = new VehType($SQLRow->type_veh_id, $SQLRow->type_veh_libelle);
			}
			$SQLResult->closeCursor();
			return $type;
		}
	}

	static function listeNbPorte() {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery = 'SELECT veh_porte_id, veh_porte_libelle FROM veh_porte';
		$SQLResult =  $vehiculedao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$porte[] = new VehPorte ($SQLRow->veh_porte_id, $SQLRow->veh_porte_libelle);
			}
			$SQLResult->closeCursor();
			return $porte;
		}
	}

	static function listeTypeDeBoite() {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery = 'SELECT veh_boite_id, veh_boite_libelle FROM veh_boite';
		$SQLResult =  $vehiculedao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$boite[] = new VehBoite($SQLRow->veh_boite_id, $SQLRow->veh_boite_libelle);
			}
			$SQLResult->closeCursor();
			return $boite;
		}
	}

	static function listeTypeCarburant() {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery = 'SELECT vehm_carb_id, vehm_carb_libelle FROM veh_type_carburant';
		$SQLResult =  $vehiculedao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$carburant[] = new VehTypeCarburant($SQLRow->vehm_carb_id, $SQLRow->vehm_carb_libelle);
			}
			$SQLResult->closeCursor();
			return $carburant;
		}
	}

	static function listeTypePermis() {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery = 'SELECT typepermis_id, typepermis_libelle FROM type_permis';
		$SQLResult =  $vehiculedao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$typepermis[] = new TypePermis($SQLRow->typepermis_id, $SQLRow->typepermis_libelle);
			}
			$SQLResult->closeCursor();
			return $typepermis;
		}
	}

	static function listeMarque() {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery = 'SELECT vehmar_id, vehmar_libelle FROM vehm_marque';
		$SQLResult =  $vehiculedao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()){
				$marque[] = new VehMarque($SQLRow->vehmar_id, $SQLRow->vehmar_libelle);
			}
			$SQLResult->closeCursor();
			return $marque;
		}
	}

	static	function ajouterVehicule($vehicule) {
		$vehiculedao = new Vehicule_DAO();
		$SQLQuery = 'call SP_Ajout_Vehicule(:modele, :typevehicule, :couleur, :porte, :boite, :carburant, :typepermis, :vehdatachat, :vehphoto, :place, :assurance, :mec, :kmage, :chfsc, :chreel, :cyl)';
		$SQLResult = $vehiculedao->prepare($SQLQuery);
		$SQLResult->bindValue(':modele', $vehicule->getVeh_modele()->getVehmmod_id());
		$SQLResult->bindValue(':typevehicule', $vehicule->getVeh_type()->getType_veh_id());
		$SQLResult->bindValue(':couleur', $vehicule->getVeh_couleur()->getVeh_coul_id());
		$SQLResult->bindValue(':porte', $vehicule->getVeh_porte()->getVeh_porte_id());
		$SQLResult->bindValue(':boite', $vehicule->getVeh_boite()->getVeh_boite_id());
		$SQLResult->bindValue(':carburant', $vehicule->getVeh_carb()->getVehm_carb_id());
		$SQLResult->bindValue(':typepermis', $vehicule->getVeh_typepermis()->getTypePermis());	
		$SQLResult->bindValue(':vehdatachat', $vehicule->getVeh_date_achat());
		$SQLResult->bindValue(':vehphoto', $vehicule->getVeh_photo());
		$SQLResult->bindValue(':place', $vehicule->getVeh_nb_place());
		$SQLResult->bindValue(':assurance', $vehicule->getVeh_assur());
		$SQLResult->bindValue(':mec', $vehicule->getVeh_date_mec());
		$SQLResult->bindValue(':kmage', $vehicule->getVeh_kmage());
		$SQLResult->bindValue(':chfsc', $vehicule->getVeh_ch_fisc());
		$SQLResult->bindValue(':chreel', $vehicule->getVeh_ch_reel());
		$SQLResult->bindValue(':cyl', $vehicule->getVeh_cyl());
		$SQLResult->execute();
		$SQLResult->closeCursor();
	}

}