<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/dao/DAO.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehCategorie.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehType.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehBoite.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehMar.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehPorte.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehModele.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/VehTypeCarburant.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/Vehicule.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/ContratLocation.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/StatutEntretien.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/OptionVeh.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/Entretien.php');
	require_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/Disposer.php');
	


class location_DAO extends DAO {
	static function Liste_Vehicules_Dispo($categorie,$date) {
			$locationdao = new location_DAO();
			$SQLQuery ='call SP_Liste_Vehicule_Dispo(:categorie,:date)';
			$SQLResult =  $locationdao->prepare($SQLQuery);
			$SQLResult->bindValue(':date', $date);
			$SQLResult->bindValue(':categorie', $categorie);
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
					$boite = new VehBoite('', $SQLRow->veh_boite_libelle);
					$optionVeh= new OptionVeh('',$SQLRow->option_veh_libelle);
					$disposer= new Disposer($optionVeh,'');
					$vehiculeDispo[] = new vehicule($SQLRow->veh_id,'', $SQLRow->veh_photo, $SQLRow->veh_nb_place, '', '', '', '', '', '', $type, $boite, $carburant, '', $modele, $porte, '',$disposer);
				}
				var_dump($vehiculeDispo);
				$SQLResult->closeCursor();
				return $vehiculeDispo;
				;
			}
		}

	//requête pour que les accessoires par type s'affiche de veh s'affiche à mettre dans DAO accessoire
	//select * from accessoire where acc_veh_cat=$numero;

	

	
}