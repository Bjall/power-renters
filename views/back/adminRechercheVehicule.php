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
				$paulineestjalouse = isset ($paulineestjalouse) ? $paulineestjalouse : NULL;
				
				if ($paulineestjalouse!=null) {
					echo'
					<table class="table-fill">
					<tr>
					<th>Date d\'achat</th>
						<th>Photo</th>
						<th>Nombre de places</th>
						<th>Assurance</th>
						<th>Date de mise en circulation</th>
						<th>Kilométrage</th>
						<th>Cheveaux fiscaux</th>
						<th>Cheveaux réels</th>
						<th>Cylindrée</th>
						<th>Catégorie</th>
						<th>Type</th>
						<th>Prix de la location /jour</th>
						<th>Type de boite</th>
						<th>Type de carburant</th>
						<th>Couleur</th>
						<th>Marque</th>
						<th>Modèle</th>
						<th>Nombre de portes</th>
						<th>Type de permis</th>

					</tr>';
					$script = '';

					for ($i=0;$i<count($paulineestjalouse);$i++) {
						$script .= '<tr>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_date_achat().'</td>';
						$script .= '<td><img src="/PowerRenters/images/photos/'.$paulineestjalouse[$i]->getVeh_photo().'" width=150px height=100px></td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_nb_place().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_assur().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_date_mec().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_kmage().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_ch_fisc().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_ch_reel().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_cyl().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_type()->getCategorie()->getCat_libelle().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_type()->getType_veh_libelle().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_type()->getType_veh_prix().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_boite()->getVeh_boite_libelle().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_carb()->getVehm_carb_libelle().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_couleur()->getVeh_coul_libelle().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_modele()->getVeh_marque()->getVehmar_libelle().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_modele()->getVehmmod_libelle().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_porte()->getVeh_porte_libelle().'</td>';
						$script .= '<td>'.$paulineestjalouse[$i]->getVeh_typepermis()->getLibelle().'</td>';

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