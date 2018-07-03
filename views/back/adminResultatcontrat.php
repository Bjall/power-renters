<!DOCTYPE html>
<html>
	<head>
		<title>Back-office</title>
	</head>

	<body>
		<?php
			include_once('adminNavbar.php');
		?>

		<div>
			<?php
				$ListeContrats = isset ($ListeContrats) ? $ListeContrats : NULL;

				if ($ListeContrats!=null) {
					echo'
						<table class="table-fill">
						<tr><th>Contrat numéro</th>
						<th>Contrat date réservation</th>
						<th>Contrat date début</th>
						<th>Contrat date fin</th>
						<th>Contrat lieu</th>
						<th>Contrat caution</th>
						<th>Contrat accompte</th>
						<th>Nom client</th>
						<th>Prénom client</th>
						<th>Véhicule modèle</th>
						<th>Véhicule id</th>
						</tr>';
					$script = '';
					$script .='<tr>';
					$script .='<td>'.$ListeContrats->getContrat_id().'</td>';
					$script .='<td>'.$ListeContrats->getContrat_date_reservation().'</td>';
					$script .='<td>'.$ListeContrats->getContrat_date_debut().'</td>';
					$script .='<td>'.$ListeContrats->getContrat_date_fin().'</td>';
					$script .='<td>'.$ListeContrats->getContrat_lieux().'</td>';
					$script .='<td>'.$ListeContrats->getContrat_caution().'</td>';
					$script .='<td>'.$ListeContrats->getContrat_acompte().'</td>';
					$script .='<td>'.$ListeContrats->getClient()->getCli_nom().'</td>';
					$script .='<td>'.$ListeContrats->getClient()->getCli_prenom().'</td>';
					
					$script .='<td>'.$ListeContrats->getVehContrat()->getVeh_modele()->getVehmmod_libelle().'</td>';
					$script .='<td>'.$ListeContrats->getVehContrat()->getVeh_id().'</td>';		
					print($script);

					echo'</table>';
				}
			?>
		</div>
	</body>

	<footer>
		<a href="mentionlegales.php">Mentions legales</a>
		<a href="apropos.php"> A propos</a>
		<a href="FAQ">FAQ</a>
	</footer>
</html>