<?php
require_once('../models/dao/DAO.php');
require_once('../models/Accessoire.php'); 
require_once('../models/StatutAccessoire.php');

class accessoire_DAO extends DAO{

	static function affAccessoire() {
		$accessoiredao = new accessoire_DAO();

		$SQLQuery='SELECT acc_id, acc_libelle, acc_prix_u_ht, acc_stock, statut_acc.acc_stat_libelle
		FROM accessoire INNER JOIN statut_acc ON accessoire.acc_stat_id = statut_acc.acc_stat_id';
		$SQLResult = $accessoiredao->query($SQLQuery);

		if ($SQLResult->rowCount() == 0) {
			print('<tr><td>Aucun Accessoire!</td></tr>');

		} else {
			while ($SQLRow = $SQLResult->fetchObject()) {
				$accessoire[] = new Accessoire($SQLRow->acc_id, $SQLRow->acc_libelle, $SQLRow->acc_prix_u_ht, $SQLRow->acc_stock, $SQLRow->acc_stat_libelle);		
			}
			$SQLResult->closeCursor();
			return  $accessoire;
		}
	}

	
	static function chercherAccessoireNum($id) { 
		$accessoiredao = new accessoire_DAO();
		$SQLQuery ='SELECT acc_id, acc_libelle, acc_prix_u_ht, acc_stock, acc_stat_libelle
		FROM accessoire INNER JOIN statut_acc ON accessoire.acc_stat_id = statut_acc.acc_stat_id WHERE acc_id = :acc_id';
		$SQLResult = $accessoiredao->prepare($SQLQuery);
		$SQLResult->bindValue(':acc_id', $id);
		$SQLResult->execute();	
		$SQLRow = $SQLResult->fetchObject();
		$accessoireStatut= new StatutAccessoire('', $SQLRow->acc_stat_libelle);
		$accessoire[] = new Accessoire($SQLRow->acc_id, $SQLRow->acc_libelle, $SQLRow->acc_prix_u_ht,$SQLRow->acc_stock, $accessoireStatut);
		$SQLResult->closeCursor();
		return $accessoire;


	}

	static function chercherAccessoireLib($libelle) { 
		$accessoiredao = new accessoire_DAO();
		$SQLQuery ='SELECT acc_id, acc_libelle, acc_prix_u_ht, acc_stock, acc_stat_libelle
		FROM accessoire INNER JOIN statut_acc ON accessoire.acc_stat_id = statut_acc.acc_stat_id WHERE acc_libelle Like :acc_libelle';
		$libelle = '%'.$libelle.'%';
		$SQLResult = $accessoiredao->prepare($SQLQuery);
		$SQLResult->bindValue(':acc_libelle',$libelle);
		$SQLResult->execute();	
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while($SQLRow = $SQLResult->fetchObject()){
				$accessoireStatut= new StatutAccessoire('', $SQLRow->acc_stat_libelle);
				$accessoire[] = new Accessoire($SQLRow->acc_id, $SQLRow->acc_libelle, $SQLRow->acc_prix_u_ht,$SQLRow->acc_stock, $accessoireStatut);}
				$SQLResult->closeCursor();
				return $accessoire;
			}
		}

			static function ajouterAccessoire($accessoire){
				$reussite = false;
				$accessoiredao = new accessoire_DAO();
				$SQLQuery = 'INSERT INTO accessoire (acc_libelle, acc_prix_u_ht, acc_stock, acc_stat_id) VALUES(:libelle, :prix, :stock, 1)';
				$SQLResult = $accessoiredao->prepare($SQLQuery);
				$SQLResult->bindValue(':libelle', $accessoire->getAccessoire_libelle()) ;
				$SQLResult->bindValue(':prix', $accessoire->getAccessoire_prix_u_ht());
				$SQLResult->bindValue(':stock', $accessoire->getAccessoire_stock()) ;

				if($SQLResult->execute() == true){
					$reussite=true;
				}return $reussite;

				$SQLResult->closeCursor();
			}

			static function modifierAccessoire($accessoire){
				$reussite = false;
				$accessoiredao = new accessoire_DAO();
				$SQLQuery = 'UPDATE accessoire SET acc_libelle = :libelle, acc_prix_u_ht = :prix, acc_stock = :stock, acc_stat_id = :statut WHERE acc_id = :id';
				$SQLResult = $accessoiredao->prepare($SQLQuery);
				$SQLResult->bindValue(':id', $accessoire->getAccessoire_id());
				$SQLResult->bindValue(':libelle', $accessoire->getAccessoire_libelle());
				$SQLResult->bindValue(':prix', $accessoire->getAccessoire_prix_u_ht());
				$SQLResult->bindValue(':stock', $accessoire->getAccessoire_stock());
				$SQLResult->bindValue(':statut', $accessoire->getAccessoire_statut()->getAccessoire_stat_id());

				if($SQLResult->execute() == true){
					$reussite=true;
				}return $reussite;

				$SQLResult->closeCursor();
			}

			static function desactiverAccessoire($accessoire){
				$accessoiredao = new accessoire_DAO();
				$SQLQuery = 'DELETE FROM accessoire WHERE acc_id = :id';
				$SQLResult = $accessoiredao->prepare($SQLQuery);
				$SQLResult->bindValue(':id', $accessoire->getAccessoire_id());
				$SQLResult->execute();

				if($SQLResult->execute() == true){
					$reussite=true;
				}return $reussite;

				$SQLResult->closeCursor();

			}
		}