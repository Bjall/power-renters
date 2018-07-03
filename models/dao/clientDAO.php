<?php
include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/dao/DAO.php');
include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/Client.php');
include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/Civilite.php');
include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/StatutPersonne.php');
include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/Adresse.php');
include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/CPVille.php');
include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/Detenir.php');

class client_DAO extends DAO {

	static function Liste_Client() { 
		$clientdao = new client_DAO(); 	
		$SQLQuery ='call SP_Liste_Client()';
		$SQLResult =  $clientdao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()) {
				$civilite = new Civilite($SQLRow->cli_civ_denomination);
				$cpville = new CPVille($SQLRow->cp_codepostal, $SQLRow->cp_ville);
				$adresse = new Adresse($SQLRow->adresse_l1, $SQLRow->adresse_l2, $SQLRow->adresse_l3, $cpville);
				$statutPersonne = new StatutPersonne($SQLRow->cli_stat_id, $SQLRow->cli_stat_libelle, '');
				$detenir = new Detenir($SQLRow->date_permis, $SQLRow->typepermis_id);
				$client[] = new client($SQLRow->cli_id, $civilite, $SQLRow->cli_nom, $SQLRow->cli_prenom, $SQLRow->cli_date_naissance, $SQLRow->cli_mail, $SQLRow->cli_mdp, $statutPersonne, $SQLRow->cli_permis_numero, $adresse, $detenir);
			}
			$SQLResult->closeCursor();
			return $client;
		}	
	}
	
	static	function Liste_Personnel() { 
		$clientdao = new client_DAO();
		$SQLQuery ='SELECT cli_civ_denomination, cli_date_naissance, cl.cli_id, cli_mail, cli_mdp,cli_nom, cli_permis_numero, typepermis_id, date_permis, cli_prenom, sc.cli_stat_id, cli_stat_libelle, adresse_l1, adresse_l2, adresse_l3, cp_codepostal, cp_ville 
		FROM civilite ci RIGHT join client cl ON cl.cli_civ_id = ci.cli_civ_id 
		LEFT JOIN statut_client sc ON cl.cli_stat_id = sc.cli_stat_id 
		LEFT JOIN adresse a ON cl.cli_id = a.cli_id 			
		LEFT JOIN cpville cp ON cp.cp_id = a.cp_id
		LEFT JOIN detenir d ON cl.cli_id = d.cli_id
		WHERE sc.cli_stat_id = 3 OR sc.cli_stat_id = 4 OR sc.cli_stat_id = 6';
		$SQLResult = $clientdao->query($SQLQuery);
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()) {
				$civilite = new Civilite($SQLRow->cli_civ_denomination);
				$cpville = new CPVille($SQLRow->cp_codepostal, $SQLRow->cp_ville);
				$adresse = new Adresse($SQLRow->adresse_l1, $SQLRow->adresse_l2, $SQLRow->adresse_l3, $cpville);
				$statutPersonne = new StatutPersonne($SQLRow->cli_stat_id, $SQLRow->cli_stat_libelle, '');
				$detenir = new Detenir($SQLRow->date_permis, $SQLRow->typepermis_id);
				$personnel[] = new client($SQLRow->cli_id, $civilite, $SQLRow->cli_nom, $SQLRow->cli_prenom, $SQLRow->cli_date_naissance, $SQLRow->cli_mail, $SQLRow->cli_mdp, $statutPersonne, $SQLRow->cli_permis_numero, $adresse, $detenir);
			}
			$SQLResult->closeCursor();
			return $personnel;
		}
	}

	static function cherche_Client($id) {
		$clientdao = new client_DAO();
		$SQLQuery ='SELECT cli_civ_denomination, cli_date_naissance, cl.cli_id, cli_mail, cli_mdp, cli_nom, cli_permis_numero, cli_prenom, sc.cli_stat_id, cli_stat_libelle, adresse_l1, adresse_l2, adresse_l3, cp_codepostal, cp_ville, date_permis, typepermis_id 
		FROM civilite ci RIGHT OUTER JOIN client cl ON cl.cli_civ_id = ci.cli_civ_id 
		LEFT OUTER JOIN statut_client sc ON cl.cli_stat_id = sc.cli_stat_id 
		LEFT OUTER JOIN adresse a ON cl.cli_id = a.cli_id 
		LEFT OUTER JOIN cpville cp ON cp.cp_id = a.cp_id 
		LEFT OUTER JOIN detenir d ON d.cli_id = cl.cli_id
		WHERE cl.cli_id = :idpers GROUP BY cli_id';
		$SQLResult = $clientdao->prepare($SQLQuery);
		$SQLResult->bindValue(':idpers', $id);
		$SQLResult->execute();	
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()) {
				$civilite = new Civilite($SQLRow->cli_civ_denomination);
				$cpville = new CPVille($SQLRow->cp_codepostal, $SQLRow->cp_ville);
				$adresse = new Adresse($SQLRow->adresse_l1, $SQLRow->adresse_l2, $SQLRow->adresse_l3, $cpville);
				$statutPersonne = new StatutPersonne($SQLRow->cli_stat_id,$SQLRow->cli_stat_libelle,'');
				$detenir = new Detenir($SQLRow->date_permis, $SQLRow->typepermis_id);
				$client[] = new Client($SQLRow->cli_id, $civilite, $SQLRow->cli_nom, $SQLRow->cli_prenom, $SQLRow->cli_date_naissance, $SQLRow->cli_mail, $SQLRow->cli_mdp, $statutPersonne, $SQLRow->cli_permis_numero, $adresse, $detenir);
			}
			$SQLResult->closeCursor();
			return $client;
		}
	}	

	static function cherche_Client_nom($nom) { 
		$clientdao = new client_DAO();	
		$SQLQuery ='SELECT cli_civ_denomination, cli_date_naissance, cl.cli_id, cli_mail, cli_mdp,cli_nom, cli_permis_numero, cli_prenom,cli_stat_libelle, adresse_l1, adresse_l2, adresse_l3, cp_codepostal, cp_ville 
		FROM civilite ci RIGHT OUTER JOIN client cl ON cl.cli_civ_id = ci.cli_civ_id 
		LEFT OUTER JOIN statut_client sc ON cl.cli_stat_id = sc.cli_stat_id 
		LEFT OUTER JOIN adresse a ON cl.cli_id = a.cli_id 
		LEFT OUTER JOIN cpville cp ON cp.cp_id = a.cp_id WHERE cl.cli_nom LIKE :nompers';
		$nom='%'.$nom.'%';
		$SQLResult = $clientdao->prepare($SQLQuery);
		$SQLResult->bindValue(':nompers', $nom);
		$SQLResult->execute();	
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()) {
				$civilite = new Civilite($SQLRow->cli_civ_denomination);
				$cpville = new CPVille($SQLRow->cp_codepostal, $SQLRow->cp_ville);
				$adresse = new Adresse($SQLRow->adresse_l1, $SQLRow->adresse_l2, $SQLRow->adresse_l3, $cpville);
				$statutPersonne = new StatutPersonne('', $SQLRow->cli_stat_libelle, '');
				$client[] = new client($SQLRow->cli_id, $civilite, $SQLRow->cli_nom, $SQLRow->cli_prenom, $SQLRow->cli_date_naissance, $SQLRow->cli_mail, $SQLRow->cli_mdp, $statutPersonne, $SQLRow->cli_permis_numero, $adresse, '');
			}
			$SQLResult->closeCursor();	
			return $client;
		}
	}

	static function ajouterClient($client) {
		$clientdao = new client_DAO();
		$SQLQuery = 'INSERT INTO client (cli_civ_id, cli_nom, cli_prenom, cli_date_naissance, cli_mail, cli_mdp, cli_stat_id) 
		VALUES (:civ, :nom, :prenom, :ddn, :mail, :passwd, :stat)';
		$SQLResult = $clientdao->prepare($SQLQuery);
		$SQLResult->bindValue(':civ', $client->getCivilite());
		$SQLResult->bindValue(':nom', $client->getCli_nom());
		$SQLResult->bindValue(':prenom', $client->getCli_prenom());
		$SQLResult->bindValue(':ddn', $client->getCli_date_naissance());
		$SQLResult->bindValue(':mail', $client->getCli_mail());
		$SQLResult->bindValue(':passwd', $client->getCli_mdp());
		$SQLResult->bindValue(':stat', $client->getStatutPersonne());
		$SQLResult->execute();
		$SQLResult->closeCursor();
	}

	static function ajouterClientComplet($client) {
		$reussite = false;
		try {
			$clientdao = new client_DAO();
			$SQLQuery ='call SP_Ajout_Client(:civ, :nom, :prenom, :ddn, :mail, :passwd, :stat, :adr_l1, :adr_l2, :adr_l3, :cp_ville, :cp_code)';
			$SQLResult = $clientdao->prepare($SQLQuery);
			$SQLResult->bindValue(':civ', $client->getCivilite());
			$SQLResult->bindValue(':nom', $client->getCli_nom());
			$SQLResult->bindValue(':prenom', $client->getCli_prenom());
			$SQLResult->bindValue(':ddn', $client->getCli_date_naissance());
			$SQLResult->bindValue(':mail', $client->getCli_mail());
			$SQLResult->bindValue(':passwd', $client->getCli_mdp());
			$SQLResult->bindValue(':stat', $client->getStatutPersonne()->getCli_stat_id());
			$SQLResult->bindValue(':adr_l1', $client->getAdresse()->getAdresse_l1());
			$SQLResult->bindValue(':adr_l2', $client->getAdresse()->getAdresse_l2());
			$SQLResult->bindValue(':adr_l3', $client->getAdresse()->getAdresse_l3());
			$SQLResult->bindValue(':cp_ville', $client->getAdresse()->getCpville()->getCp_ville());
			$SQLResult->bindValue(':cp_code', $client->getAdresse()->getCpville()->getCp_codepostal());
			$req = $SQLResult->execute();
			$SQLResult->closeCursor();
			if ($req == true) {
				$reussite=true;
			}
			return $reussite;
		} catch (Exception $e) {
			echo '<p>oups </p>';
		}
	}

	static function listePermis($id) {
		$clientdao = new client_DAO();
		$SQLQuery ='SELECT date_permis, typepermis_id, cli_nom, cli_prenom, cli_permis_numero 
		FROM detenir
		RIGHT JOIN client ON detenir.cli_id = client.cli_id 
		WHERE client.cli_id = :v_cli_id';
		$SQLResult = $clientdao->prepare($SQLQuery);
		$SQLResult->bindValue(':v_cli_id', $id);
		$SQLResult->execute();	
		if ($SQLResult->rowCount() == 0) {
			print('<tr><td colspan="6">Aucun enregistrement ne correspond à la demande</td></tr>');
		} else {
			while ($SQLRow = $SQLResult->fetchObject()) {
				$detenir = new Detenir($SQLRow->date_permis, $SQLRow->typepermis_id);
				$client[] = new Client('', '', $SQLRow->cli_nom, $SQLRow->cli_prenom, '', '', '', '', $SQLRow->cli_permis_numero, '', $detenir);
			}
			$SQLResult->closeCursor();	
			return $client;
		}
	}

	static function updateClientTest($client) {
		$reussite = false;
		try {
			$clientdao = new client_DAO();
			$SQLStmt = $clientdao->prepare("
				UPDATE client SET cli_civ_id = :v_cli_civ_id, cli_date_naissance = :v_cli_date_naissance, cli_mail = :v_cli_mail, cli_mdp = :v_cli_mdp, cli_nom = :v_cli_nom, cli_permis_numero = :v_cli_permis_numero, cli_prenom = :v_cli_prenom, cli_stat_id = :v_cli_stat_id WHERE cli_id = :v_cli_id;
				UPDATE adresse SET adresse_l1 = :v_adresse_l1, adresse_l2 = :v_adresse_l2, adresse_l3 = :v_adresse_l3, cp_id = (SELECT cp_id FROM cpville WHERE cp_codepostal = :v_cp_codepostal AND cp_ville = :v_cp_ville), type_adr_id = 1 WHERE cli_id = :v_cli_id;
				");
			$SQLStmt->bindValue(':v_cli_mail', $client->getCli_mail());
			$SQLStmt->bindValue(':v_cli_civ_id', $client->getCivilite());
			$SQLStmt->bindValue(':v_cli_nom', $client->getCli_nom());
			$SQLStmt->bindValue(':v_cli_prenom', $client->getCli_prenom());
			$SQLStmt->bindValue(':v_cli_id', $client->getCli_id());
			$SQLStmt->bindValue(':v_cli_date_naissance', $client->getCli_date_naissance());
			$SQLStmt->bindValue(':v_cli_mdp', $client->getCli_mdp());
			$SQLStmt->bindValue(':v_cli_permis_numero', $client->getCli_permis_numero());
			$SQLStmt->bindValue(':v_cli_stat_id', $client->getStatutPersonne()->getCli_stat_id());
			$SQLStmt->bindValue(':v_adresse_l1', $client->getAdresse()->getAdresse_l1());
			$SQLStmt->bindValue(':v_adresse_l2', $client->getAdresse()->getAdresse_l2());
			$SQLStmt->bindValue(':v_adresse_l3', $client->getAdresse()->getAdresse_l3());
			$SQLStmt->bindValue(':v_cp_codepostal', $client->getAdresse()->getCpville()->getCp_codepostal());
			$SQLStmt->bindValue(':v_cp_ville', $client->getAdresse()->getCpville()->getCp_ville());;	
			$req = $SQLStmt->execute();	
			$SQLStmt->closeCursor();
			if ($req == true) {
				$reussite = true;
			}
			return $reussite;
		} catch (Exception $e) {
			echo '<p>oups </p>';
		} 
	}

	static  function updateClientStatut($client) {
		$reussite = false;
		try {
			$clientdao = new client_DAO();
			$SQLStmt = $clientdao->prepare("
				UPDATE client SET cli_stat_id = 5 WHERE cli_id = :v_cli_id;");
			$SQLStmt->bindValue(':v_cli_id', $client->getCli_id());
			$req = $SQLStmt->execute();
			$SQLStmt->closeCursor();
			if ($req == true) {
				$reussite = true;
			}
			return $reussite;
		} catch (Exception $e) {
			echo '<p>oups </p>';
		}
	}

	static function updatePersonnelStatut($client) {
		$reussite = false;
		try {
			$clientdao = new client_DAO();
			$SQLStmt = $clientdao->prepare("
				UPDATE client SET cli_stat_id = 6 WHERE cli_id = :v_cli_id;");
			$SQLStmt->bindValue(':v_cli_id', $client->getCli_id());
			$req = $SQLStmt->execute();
			$SQLStmt->closeCursor();
			if ($req == true) {
				$reussite = true;
			}
			return $reussite;
		} catch (Exception $e) {
			echo '<p>oups </p>';
		}
	}
	

	static function ajoutPermis($client) {
		$reussite = false;
		try {	
			$clientdao = new client_DAO();			
			$SQLStmt = $clientdao->prepare("
				INSERT INTO detenir(date_permis, cli_id, typepermis_id)
				VALUES (:v_date_permis, :v_cli_id, :v_typepermis_id);
				UPDATE client SET cli_permis_numero = :v_cli_permis_numero WHERE cli_id = :v_cli_id");
			$SQLStmt->bindValue(':v_date_permis', $client->getDetenirPermis()->getDatePermis());
			$SQLStmt->bindValue(':v_cli_id', $client->getCli_id());			
			$SQLStmt->bindValue('v_typepermis_id', $client->getDetenirPermis()->getTypePermis());
			$SQLStmt->bindValue('v_cli_permis_numero', $client->getCli_permis_numero());
			$req = $SQLStmt->execute();					
			$SQLStmt->closeCursor();
			if ($req == true) {
				$reussite = true;
			}
			return $reussite;
		} catch (Exception $e) {
			echo '<p>oups </p>';
		} 
	}
	
}