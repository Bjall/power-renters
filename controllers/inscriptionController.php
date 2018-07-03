<?php
	session_start();
	include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/models/dao/clientDAO.php');

	// Stockage des données dans des variables sécurisées
	// Utilisation de $_SESSION pour réutilisation sur d'autres pages
	$_SESSION['civ'] = htmlspecialchars($_POST['radCivilite']);
	$_SESSION['nom'] = htmlspecialchars($_POST['nom']);
	$_SESSION['prenom'] = htmlspecialchars($_POST['prenom']);
	$_SESSION['birthdate'] = htmlspecialchars($_POST['birthdate']);
	$_SESSION['email'] = htmlspecialchars($_POST['email']);
	$passwd = htmlspecialchars($_POST['password']);
	$passwdcheck = htmlspecialchars($_POST['password-check']);
	$_SESSION['stat'] = htmlspecialchars($_POST['cbStat']);
	$_SESSION['adresse1'] = htmlspecialchars($_POST['adresse1']);
	$_SESSION['adresse2'] = htmlspecialchars($_POST['adresse2']);
	$_SESSION['adresse3'] = htmlspecialchars($_POST['adresse3']);
	$_SESSION['codepostal'] = htmlspecialchars($_POST['codepostal']);
	$_SESSION['ville'] = htmlspecialchars($_POST['ville']);

	// Vérification que les champs obligatoires ne sont pas vides
	if(!empty($_SESSION['nom']) && !empty($_SESSION['prenom']) && !empty($_SESSION['birthdate']) && !empty($_SESSION['email']) && !empty($passwd) && !empty($passwdcheck)) {

		// Vérification que l'email n'est pas déjà enregistré
		$dao = new DAO();
		$SQLQuery = 'SELECT * FROM client WHERE cli_mail = ?';
		$verif_email = $dao->prepare($SQLQuery);
		$verif_email->bindValue(1, $_SESSION['email']);
		$verif_email->execute();

		$email_unique = $verif_email->fetch();

		if(empty($email_unique)) {

			// Vérification double du mot de passe
			if($passwd == $passwdcheck) {

				// Vérification que les CGU ont été acceptées (checkbox cochée)
				if(isset($_POST['checkboxCGU'])) {

					// Vérification si le client s'inscrit au minimum ou complètement
					if(!empty($_SESSION['adresse1']) && !empty($_SESSION['codepostal']) && !empty($_SESSION['ville'])) {

						// Inscription complète du client dans la BDD
						$cpville = new CPVille($_SESSION['codepostal'], $_SESSION['ville']);
						$adresse = new Adresse($_SESSION['adresse1'], $_SESSION['adresse2'], $_SESSION['adresse3'], $cpville);
						$statutPersonne = new StatutPersonne($_SESSION['stat'],'','');
						$client = new Client('', $_SESSION['civ'], $_SESSION['nom'], $_SESSION['prenom'], $_SESSION['birthdate'], $_SESSION['email'], $passwd, $statutPersonne, '', $adresse, '');
						client_DAO::ajouterClientComplet($client);

					} else {

						// Inscription minimale du client dans la BDD
						// TODO : A optimiser
						$client = new Client('', $_SESSION['civ'], $_SESSION['nom'], $_SESSION['prenom'], $_SESSION['birthdate'], $_SESSION['email'], $passwd, $_SESSION['stat']);
						$dao = new client_DAO;
						$dao->ajouterClient($client);
					}

					$_SESSION['info'] = 'Inscription effectuée';

					// Redirection vers la page d'accueil
					header('Location: http://localhost/PowerRenters/');

				// Si la checkbox n'a pas été cochée
				} else {
					$_SESSION['info'] = 'Vous devez accepter les conditions générales d\'utilisation';
				}

			// Si le mot de passe n'est pas identique dans les deux champs
			} else {
				$_SESSION['info'] = 'Problème lors de la vérification du mot de passe';
			}

		// Si l'email existe déjà dans la BDD
		} else {
			$_SESSION['info'] = 'Cet e-mail est déjà utilisé';
		}

	// Si un des champs obligatoire est vide
	} else {
		$_SESSION['info'] = 'Merci de remplir tous les champs obligatoires';
	}

	// Affichage à l'écran du problème rencontré
	if(isset($_SESSION['info'])) {
			$message = '<div class="message_info"><p>'.$_SESSION['info'].'</p></div>';
			print($message);
			$_SESSION['info'] = null;
		}
	include_once(realpath($_SERVER["DOCUMENT_ROOT"]).'/PowerRenters/views/front/inscription.php');