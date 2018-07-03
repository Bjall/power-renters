<?php
	require_once('../models/dao/DAO.php');
	require_once ('../models/Client.php');  
	require_once ('../models/ContratLocation.php');
	require_once ('../models/Vehicule.php');
	require_once ('../models/VehModele.php');

	class contrat_DAO extends DAO{

	static function Liste_Contrats() { 
		$contratdao = new contrat_DAO();
		$SQLQuery ='SELECT contrat_id, contrat_date_reservation, contrat_date_debut, contrat_date_fin, contrat_lieu, cli_nom, cli_prenom, vehmmod_libelle, veh.veh_id
		FROM contratdelocation co 
		INNER JOIN client cl ON cl.cli_id=co.cli_id 
		INNER JOIN vehicule veh ON veh.veh_id=co.veh_id 
		INNER JOIN vehm_modele vm ON veh.vehmmod_id=vm.vehmmod_id;';
		$SQLResult = $contratdao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			$SQLRow = $SQLResult->fetchObject();
			while($SQLRow = $SQLResult->fetchObject()) {
				$monModvehicule = new Vehmodele('', $SQLRow->vehmmod_libelle, '');
				$monvehicule = new vehicule($SQLRow->veh_id, "", "", "", "", "", "", "", "", "", "", "", "", "", $monModvehicule, "", "","");
				$monClient = new client("", "", $SQLRow->cli_nom, $SQLRow->cli_prenom);
				$monContrat[] = new contratLocation($SQLRow->contrat_id, "", $SQLRow->contrat_lieu, $SQLRow->contrat_date_debut, $SQLRow->contrat_date_fin, "", $SQLRow->contrat_date_reservation, "", $monClient, $monvehicule);
			}
		$SQLResult->closeCursor();
		return  $monContrat;
		}
	}


		static function  cherche_Contrat($id) { 
			
			$contratdao= new contrat_DAO();
			$SQLQuery ='SELECT contrat_id, contrat_date_reservation, contrat_date_debut, contrat_date_fin, contrat_lieu, contrat_caution, contrat_accompte,cl.cli_id, cli_nom, cli_prenom, vehmmod_libelle, veh.veh_id from contratdelocation co inner join client cl on cl.cli_id=co.cli_id inner join vehicule veh on veh.veh_id=co.veh_id inner join vehm_modele vm on veh.vehmmod_id = vm.vehmmod_id where contrat_id=:contratnumero';
			$SQLResult = $contratdao->prepare($SQLQuery);
			$SQLResult->bindValue(':contratnumero', $id);
			$SQLResult->execute();	
			$SQLRow = $SQLResult->fetchObject();
			$monModvehicule = new Vehmodele("",$SQLRow->vehmmod_libelle,"");
			$monvehicule = new vehicule($SQLRow->veh_id,"","","","","","","","","","","","","",$monModvehicule,"","","");
			$monClient = new client($SQLRow->cli_id,"",$SQLRow->cli_nom, $SQLRow->cli_prenom);
            $ContratLocation = new ContratLocation($SQLRow->contrat_id,"",$SQLRow->contrat_lieu,$SQLRow->contrat_date_fin,$SQLRow->contrat_date_debut,$SQLRow->contrat_caution,$SQLRow->contrat_date_reservation,$SQLRow->contrat_accompte,$monClient,$monvehicule);	
			$SQLResult->closeCursor();
			
			return $ContratLocation;	
		}
			
		static function ajouterContrat($contrat) {
			$reussiteAjout=false;
			$contratdao= new contrat_DAO();
			try{
				$SQLQuery = 'INSERT INTO contratdelocation (contrat_date, contrat_lieu, contrat_date_debut, contrat_date_fin, contrat_date_reservation, contrat_caution, contrat_accompte,tva_id,cli_id,veh_id,forfait_id,statut_cont_id) VALUES (:cd, :cl, :cdd, :cdf, :cds, :cc, :cacc,1, (select cli_id from client where cli_nom=:cci and cli_prenom=:ccip),:cvm,1,1)';

			
				$SQLResult = $contratdao->prepare($SQLQuery);
			
				$SQLResult->bindValue(':cd', $contrat->getContrat_date());
				$SQLResult->bindValue(':cl', $contrat->getContrat_lieux());
				$SQLResult->bindValue(':cdd', $contrat->getContrat_date_debut());
				$SQLResult->bindValue(':cdf', $contrat->getContrat_date_fin());
				$SQLResult->bindValue(':cds', $contrat->getContrat_date_reservation());
				$SQLResult->bindValue(':cc', $contrat->getContrat_caution());
			    $SQLResult->bindValue(':cacc', $contrat->getContrat_acompte());
				$SQLResult->bindValue(':cci', $contrat->getClient()->getCli_nom());
				$SQLResult->bindValue(':ccip', $contrat->getClient()->getCli_prenom());
				$SQLResult->bindValue(':cvm', $contrat->getVehContrat()->getVeh_id()); 
				$req = $SQLResult->execute();
				$SQLResult->closeCursor();
				if ($req==true) {
					$reussiteAjout=true;
				}
				return $reussiteAjout;

			} catch (Exception $e){
				echo '<p>oups </p>';
			
			}
		}	




		static function updateContrat($contrat) {
		$reussite=false;
			try{
		$contratdao= new contrat_DAO();
		$SQLStmt = $contratdao->prepare("
			UPDATE contratdelocation SET contrat_date=:v_contrat_date,contrat_lieu=:v_contrat_lieu, contrat_date_debut=:v_contrat_date_debut, contrat_date_fin=:v_contrat_date_fin, contrat_date_reservation=:v_contrat_date_reservation, contrat_caution=:v_contrat_caution, contrat_accompte=:v_contrat_accompte,cli_id=:v_cli_id,veh_id=:v_veh_id where contrat_id=:v_contrat_id;");
		$SQLStmt->bindValue(':v_contrat_id', $contrat->getContrat_id());
		$SQLStmt->bindValue(':v_contrat_date', $contrat->getContrat_date());
		$SQLStmt->bindValue(':v_contrat_lieu', $contrat->getContrat_lieux());
		$SQLStmt->bindValue(':v_contrat_date_debut', $contrat->getContrat_date_debut());
		$SQLStmt->bindValue(':v_contrat_date_fin', $contrat->getContrat_date_fin());
		$SQLStmt->bindValue(':v_contrat_date_reservation', $contrat->getContrat_date_reservation());
		$SQLStmt->bindValue(':v_contrat_caution', $contrat->getContrat_caution());
		$SQLStmt->bindValue(':v_contrat_accompte', $contrat->getContrat_acompte());
		$SQLStmt->bindValue(':v_cli_id', $contrat->getClient()->getCli_id());
		$SQLStmt->bindValue(':v_veh_id', $contrat->getVehContrat()->getVeh_id());
			
		$req=$SQLStmt->execute();

		$SQLStmt->closeCursor();
		if ($req==true) {
					$reussite=true;
					
				}return $reussite;

			} 
			catch (Exception $e){
				echo '<p>oups </p>';
			} 
		 }		

	}

