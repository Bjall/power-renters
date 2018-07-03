<!DOCTYPE html>
<html>
	<head>
		<title>Back-office</title>
	</head>

	<body>
		<?php 
			include_once('adminNavbar.php');
		?>

		<!-- Formulaire d'inscription -->
		<div class="formulaire">
			<form  action="/PowerRenters/controllers/adminControllerVehicule.php" method="GET" >
				<input type="hidden" name="option" value="Ajouterunvehicule">
				<legend class= "contenuCenter">Ajout de véhicule</legend>

				<label class="contenuformbis"> Selectionnez le modèle</label>
				<div id="civcombo" class="contenuformbis">
					<select class="contenuformbis" name="modele">
						<?php  
						for ($i=0;$i<count($lalistedesmodeles);$i++) {
							$scriptModele .= '';

							$scriptModele.= '<option value="'.$lalistedesmodeles[$i]->getVehmmod_id().'">'.$lalistedesmodeles[$i]->getVehmmod_libelle().'</option>';
						}
						echo $scriptModele;
						?>
					</select>
				</div>

				<label class="contenuformbis"> Selectionnez la couleur</label>
				<div id="civcombo" class="contenuformbis">
					<select class="contenuformbis" name="couleur">
						<?php  
						for ($i=0;$i<count($tampondenathalie);$i++) {
							$scriptCouleur .= '';

							$scriptCouleur.= '<option value="'.$tampondenathalie[$i]->getVeh_coul_id().'">'.$tampondenathalie[$i]->getVeh_coul_libelle().'</option>';
						}
						echo $scriptCouleur;
						?>
					</select>
				</div>

				<label class="contenuformbis"> Selectionnez le type du véhicule</label>
				<div id="civcombo" class="contenuformbis">
					<select class="contenuformbis" name="typevehicule">
						<?php  
						for ($i=0;$i<count($lalistedestypes);$i++) {
							$scriptType .= '';

							$scriptType.= '<option value="'.$lalistedestypes[$i]->getType_veh_id().'">'.$lalistedestypes[$i]->getType_veh_libelle().'</option>';
						}
						echo $scriptType;
						?>

					</select>
				</div>


				<label class="contenuformbis"> Selectionnez le nombre de portes</label>
				<div id="civcombo" class="contenuformbis">
					<select class="contenuformbis" name="porte">
						<?php  
						for ($i=0;$i<count($lalistedesportes);$i++) {
							$scriptPorte.= '';

							$scriptPorte.= '<option value="'.$lalistedesportes[$i]->getVeh_porte_id().'">'.$lalistedesportes[$i]->getVeh_porte_libelle().'</option>';
						}
						echo $scriptPorte;
						?>

					</select>
				</div>
				<label class="contenuformbis"> Selectionnez le type de boîte</label>
				<div id="civcombo" class="contenuformbis">
					<select class="contenuformbis" name="boite">
						<?php  
						for ($i=0;$i<count($lalistedesboites);$i++) {
							$scriptBoite.= '';

							$scriptBoite.= '<option value="'.$lalistedesboites[$i]->getVeh_boite_id().'">'.$lalistedesboites[$i]->getVeh_boite_libelle().'</option>';
						}
						echo $scriptBoite;
						?>

					</select>
				</div>
				<label class="contenuformbis"> Selectionnez le type de carburant</label>
				<div id="civcombo" class="contenuformbis">
					<select class="contenuformbis" name="carburant">
						<?php  
						for ($i=0;$i<count($lalistedescarburant);$i++) {
							$scriptCarburant.= '';

							$scriptCarburant.= '<option value="'.$lalistedescarburant[$i]->getVehm_carb_id().'">'.$lalistedescarburant[$i]->getVehm_carb_libelle().'</option>';
						}
						echo $scriptCarburant;
						?>

					</select>
				</div>
				<label class="contenuformbis"> Selectionnez le type de permis</label>
				<div id="civcombo" class="contenuformbis">
					<select class="contenuformbis" name="typepermis">
						<?php  
						for ($i=0;$i<count($lalistedespermis);$i++) {
							$scriptPermis.= '';

							$scriptPermis.= '<option value="'.$lalistedespermis[$i]->getTypePermis().'">'.$lalistedespermis[$i]->getDenomination().'</option>';
						}
						echo $scriptPermis;
						?>

					</select>
				</div>

				<label class="contenuformbis">Date d'achat</label>
				<input class="contenuformbis type="text" name="vehdateachat"/>

				<label class="contenuformbis">Photo</label>
				<input class="contenuformbis type="text" name="vehphoto"/>

				<label class="contenuformbis">Nombre de places</label>
				<input class="contenuformbis type="text" name="place"/>

				<label class="contenuformbis">Numéro d'assurance</label>
				<input class="contenuformbis type="text" name="assurance"/>

				<label class="contenuformbis">Date de mise en circulation</label>
				<input class="contenuformbis type="text" name="mec"/>

				<label class="contenuformbis">Kilométrage</label>
				<input class="contenuformbis type="text" name="kmage"/>

				<label class="contenuformbis">Chevaux fiscaux</label>
				<input class="contenuformbis type="text" name="chfsc"/>

				<label class="contenuformbis">Chevaux réels</label>
				<input class="contenuformbis type="text" name="chreel"/>

				<label class="contenuformbis">Cylindrée</label>
				<input class="contenuformbis type="text" name="cylindre"/>

			</div>
			<!-- Submit -->
			<div class="validation">
				<input class="contenuformbis" id="leboutondenathalie" type="submit" value="Inscription">
			</div>
		</form>
	</div>

	<footer>
		<a href="mentionlegales.php">Mentions legales</a>
		<a href="apropos.php"> A propos</a>
		<a href="faq.php">FAQ</a>
	</footer>
</html>