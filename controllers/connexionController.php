<?php
	session_start();
	include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/dao/clientDAO.php');

	$email = htmlspecialchars($_POST['email']);
	$password = htmlspecialchars($_POST['password']);

	// Vérification du couple login / mot de passe
	$dao = new DAO();
	$SQLQuery = 'SELECT * FROM client WHERE cli_mail = :mail AND cli_mdp = :pass';
	$SQLResult = $dao->prepare($SQLQuery);
	$SQLResult->bindValue(':mail', $email);
	$SQLResult->bindValue(':pass', $password);
	$SQLResult->execute();
	$user = $SQLResult->fetch();

	// Si $user n'est pas vide (= mail / mdp sont ok)
	if(!empty($user)) {
		$_SESSION['prenom'] = $user['cli_prenom'];

		// Si le visiteur est un admin
		if ($user['cli_stat_id'] == '3') {
			// Redirection vers la page d'accueil back
			header('Location: http://localhost/PowerRenters/views/back/adminAccueil.php');
		
		} elseif ($user['cli_stat_id'] == '1' || $user['cli_stat_id'] == '2')  {
			// Redirection vers la page d'accueil front
			header('Location: http://localhost/PowerRenters/controllers/accueilController.php');
		}

	} else {
		$_SESSION['info'] = 'Mauvais identifiants';
		if(isset($_SESSION['info'])) {
			$message = '<div class="message_info"><p>'.$_SESSION['info'].'</p></div>';
			print($message);
			$_SESSION['info'] = null;
		}
		include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/connexion.php');
	}