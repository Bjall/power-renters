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

			$reussitemodif = isset ($reussitemodif) ? $reussitemodif : NULL;
			if ($reussitemodif == true){
				echo'<div class="alert">  <img src="/PowerRenters/images/content.png" width=100px /> Modification réussite! </div>';

			}

			$reussiteAjout=isset ($reussiteAjout) ? $reussiteAjout : NULL;
			if ($reussiteAjout==true){
				echo'<div class="alert">  <img src="/PowerRenters/images/content.png" width=100px /> Ajout réussi! </div>';

			}

			$reussiteModifCliPers=isset ($reussiteModifCliPers) ? $reussiteModifCliPers : NULL;
			if ($reussiteModifCliPers==true){
				echo'<div class="alert">  <img src="/PowerRenters/images/content.png" width=100px /> Votre modification a été faite! </div>';

			}

			$reussiteAjoutPermis=isset ($reussiteAjoutPermis) ? $reussiteAjoutPermis : NULL;
			if ($reussiteAjoutPermis==true){
				echo'<div class="alert">  <img src="/PowerRenters/images/content.png" width=100px /> Ajout fait! </div>';

			}
			?>
			<p class= "contenu">Liste des clients</p>
			<?php
			$listeClient = isset ($listeClient) ? $listeClient : NULL;

			if ($listeClient!=null) {
				echo'
				<table class="table-fill">
				<tr>
				<th>Civilité</th>
				<th>Nom</th>
				<th>Prénom</th>
				<th>Date de naissance</th>
				<th>Numéro de permis</th>
				<th>Email</th>
				<th>Statut</th>
				<th>Adresse</th>
				<th>Adresse complément</th>
				<th>Adresse complément</th>
				<th>Code postal</th>
				<th>Ville</th>
				<th>Modifier</th>
				<th>Ajouter un permis</th>
				<th>Black liste</th>

				</tr>';
				$script = '';

				for ($i=0;$i<count($listeClient);$i++) {
					$script .= '<tr>';
					$script .= '<td>'.$listeClient[$i]->getCivilite()->getCli_civ_denomination().'</td>';
					$script .= '<td>'.$listeClient[$i]->getCli_nom().'</td>';
					$script .= '<td>'.$listeClient[$i]->getCli_prenom().'</td>';
					$script .= '<td>'.$listeClient[$i]->getCli_date_naissance().'</td>';
					if ($listeClient[$i]->getCli_permis_numero()!=null){
						$script.='<td>
						<form action="/PowerRenters/controllers/adminControllerPersonne.php" method="GET">
						<input type="hidden" name="option" value="ListePermis">
						<input type="hidden" name="id" value="'.$listeClient[$i]->getCli_id().'"/>
						<input  type="submit" value="'.$listeClient[$i]->getCli_permis_numero().'">

						</form></td>';
					}else 
							{$script.='<td><a href="http://localhost/PowerRenters/controllers/adminControllerPersonne.php?option=pajeAjoutPermis&id='.$listeClient[$i]->getCli_id().'"><img src="/PowerRenters/images/iconeVoiture.png" width=30px /></td>';
						}			
					$script .= '<td>'.$listeClient[$i]->getCli_mail().'</td>';	
					if($listeClient[$i]->getStatutPersonne()->getCli_stat_id()==5){
						$script .=

						'<td class="inactif">'.$listeClient[$i]->getStatutPersonne()->getCli_stat_libelle().'</td>';}
						else {$script .=

							'<td >'.$listeClient[$i]->getStatutPersonne()->getCli_stat_libelle().'</td>';
						};
						$script .= '<td>'.$listeClient[$i]->getAdresse()->getAdresse_l1().'</td>';
						$script .= '<td>'.$listeClient[$i]->getAdresse()->getAdresse_l2().'</td>';
						$script .= '<td>'.$listeClient[$i]->getAdresse()->getAdresse_l3().'</td>';
						$script .= '<td>'.$listeClient[$i]->getAdresse()->getCpville()->getCp_codepostal().'</td>';
						$script .= '<td>'.$listeClient[$i]->getAdresse()->getCpville()->getCp_ville().'</td>';
						$script.='<td><a href="http://localhost/PowerRenters/controllers/adminControllerPersonne.php?option=lirePersonneModification&id='.$listeClient[$i]->getCli_id().'&stat='.$listeClient[$i]->getStatutPersonne()->getCli_stat_id().'"><img src="/PowerRenters/images/iconeModif.jpg" width=30px /></a></td>';
						$script.='<td><a href="http://localhost/PowerRenters/controllers/adminControllerPersonne.php?option=pajeAjoutPermis&id='.$listeClient[$i]->getCli_id().'"><img src="/PowerRenters/images/iconeVoiture.png" width=30px /></a></td>';
						$script.='<td>
						<form action="/PowerRenters/controllers/adminControllerPersonne.php" method="GET">
							<input type="hidden" name="option" value="modificationStatutPersonne">
							<input type="hidden" name="id" value="'.$listeClient[$i]->getCli_id().'"/>
							<input type="hidden" name="stat" value="'.$listeClient[$i]->getStatutPersonne()->getCli_stat_id().'"/>
							<input  type="submit" value="Black liste">
						</form>
						</td></tr>';

					}

					print($script);

					echo '</table>';
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