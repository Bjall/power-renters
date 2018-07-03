<!DOCTYPE html>
<html>
	<head>
		<title>Back-office</title>
	</head>

	
		<?php
			include_once('adminNavbar.php');
		?>
<body>
		<div>
			<p class= "contenu">Liste des Contrats</p>
			<?php

			$reussiteupdate=isset ($reussiteupdate) ? $reussiteupdate : NULL;
			if ($reussiteupdate==true){
				echo'<div class="alert">  <img src="/PowerRenters/images/content.png" width=100px /> Modification prise en compte! </div>';

			}
				$listeContrats = isset ($listeContrats) ? $listeContrats : NULL;

				if ($listeContrats!=null) {
					echo'
						<table class="table-fill">
						<tr><th>Contrat numéro</th>
						<th>Contrat date réservation</th>
						<th>Contrat date début</th>
						<th>Contrat date fin</th>
						<th>Lieu contrat</th>
						<th>Nom client</th>
						<th>Prénom client</th>
						<th>Véhicule modèle</th>
						<th>Véhicule id</th>
						<th>Modifier</th>
						</tr>';
					$script = '';
for ($i=0;$i<count($listeContrats);$i++){
					$script .='<tr>';
					$script .='<td>'.$listeContrats[$i]->getContrat_id().'</td>';
					$script .='<td>'.$listeContrats[$i]->getContrat_date_reservation().'</td>';
					$script .='<td>'.$listeContrats[$i]->getContrat_date_debut().'</td>';
					$script .='<td>'.$listeContrats[$i]->getContrat_date_fin().'</td>';
					$script .='<td>'.$listeContrats[$i]->getContrat_lieux().'</td>';
					$script .='<td>'.$listeContrats[$i]->getClient()->getCli_nom().'</td>';
					$script .='<td>'.$listeContrats[$i]->getClient()->getCli_prenom().'</td>';
				    $script .='<td>'.$listeContrats[$i]->getVehContrat()->getVeh_modele()->getVehmmod_libelle().'</td>';
					$script .='<td>'.$listeContrats[$i]->getVehContrat()->getVeh_id().'</td>';
					$script.='<td><a href="http://localhost/PowerRenters/controllers/adminControllerContrat.php?option=lireContratModification&id='.$listeContrats[$i]->getContrat_id().'"><img src="/PowerRenters/images/iconeModif.jpg" width=30px /></td>';
					$script.='</tr>';
						}	


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