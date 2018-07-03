	<!DOCTYPE html>
	<html>
	<head>
		<title>Ajouter un Modele</title>
	</head>

	<body>
		<?php 
		include_once('adminNavbar.php');
		/*$afficheUnVehicule[0] = isset ( $afficheUnVehicule[0]) ?  $afficheUnVehicule[0] : NULL;*/
		?>

		<div class="formulaire">
			<form  action="/PowerRenters/controllers/adminControllerVehicule.php" method="GET" >
				<input type="hidden" name="option" value="AjouterModele">
				<legend class= "contenuCenter">Ajout de Modèle</legend>

				<label class="contenuformbis"> Selectionnez la marque du véhicule</label>
				<div id="civcombo" class="contenuformbis">
					<select class="contenuformbis" name="marque">
						<?php  
						for ($i=0;$i<count($lalistedesmarques);$i++) {
							$scriptMarque.= '';

							$scriptMarque.= '<option value="'.$lalistedesmarques[$i]->getVehmar_id().'">'.$lalistedesmarques[$i]->getVehmar_libelle().'</option>';
						}
						echo $scriptMarque;
						?>

					</select>
				</div>

				<label class="contenuformbis">Modele</label>
				<input class="contenuformbis type="text" name="modele"/>

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
