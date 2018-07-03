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
		$faireplaisiranathalie = isset ($faireplaisiranathalie) ? $faireplaisiranathalie : NULL;

		if ($faireplaisiranathalie!=null) {
			echo'
			<table class="table-fill">
			<tr><th>Civilité</th>
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
			<th>Black list</th>


			</tr>';
			$script = '';

			for ($i=0;$i<count($faireplaisiranathalie);$i++) {
				$script .= '<tr>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getCivilite()->getCli_civ_denomination().'</td>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getCli_nom().'</td>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getCli_prenom().'</td>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getCli_date_naissance().'</td>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getCli_permis_numero().'</td>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getCli_mail().'</td>';	
				$script .= '<td>'.$faireplaisiranathalie[$i]->getStatutPersonne()->getCli_stat_libelle().'</td>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getAdresse()->getAdresse_l1().'</td>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getAdresse()->getAdresse_l2().'</td>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getAdresse()->getAdresse_l3().'</td>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getAdresse()->getCpville()->getCp_codepostal().'</td>';
				$script .= '<td>'.$faireplaisiranathalie[$i]->getAdresse()->getCpville()->getCp_ville().'</td>';
				$script.='<td><a href="http://localhost/PowerRenters/controllers/adminControllerPersonne.php?option=lirePersonneModification&id='.$faireplaisiranathalie[$i]->getCli_id().'&stat='.$faireplaisiranathalie[$i]->getStatutPersonne()->getCli_stat_id().'"><img src="/PowerRenters/images/iconeModif.jpg" width=30px /></td>';
				$script.='<td><a href="http://localhost/PowerRenters/controllers/adminControllerPersonne.php?option=pajeAjoutPermis&id='.$faireplaisiranathalie[$i]->getCli_id().'&stat='.$faireplaisiranathalie[$i]->getStatutPersonne()->getCli_stat_id().'"><img src="/PowerRenters/images/iconeVoiture.png" width=30px /></td>';
				$script.='<td>
				<form action="/PowerRenters/controllers/adminControllerPersonne.php" method="GET">
				<input type="hidden" name="option" value="modificationStatutClient">
				<input type="hidden" name="id" value="'.$faireplaisiranathalie[$i]->getCli_id().'"/>
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