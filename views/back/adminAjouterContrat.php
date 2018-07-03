<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un client</title>
	</head>

	<body>
		<?php 
			include_once('adminNavbar.php');
		 	
		//var_dump($afficheUnClient);
		 	$reussiteAjout=isset ($reussiteAjout) ? $reussiteAjout : NULL;
		if ($reussiteAjout==true){
			echo'<div class="alert">  <img src="/PowerRenters/images/content.png" width=100px /> Ajout réussi! </div>';

		}
		
		?>

		<!-- Formulaire d'inscription -->
			<div class="formulaire">
				<form  action="/PowerRenters/controllers/adminControllerContrat.php" method="GET" >
					<input type="hidden" name="option" value="ajoutContrat">
					<legend class= "contenuCenter">Ajout d'un contrat</legend>


						

					<!-- Date -->
					<label class="contenuformbis">Date :</label>
					<input class="contenuformbis"  name="datec" value="<?php echo date("Y-m-d");?>" required/>
					<!-- Contrat lieux -->
					<label class="contenuformbis">Lieu :</label>
					<input class="contenuformbis" type="text" name="lieux" value="" required/>
					
					<!-- Date de début -->
					<label class="contenuformbis">Contrat date de début :</label>
					<input class="contenuformbis" type="date" name="cdd" value="" placeholder="" required>
					
					<!-- Date de fin -->
					<label class="contenuformbis">Contrat date de fin:</label>
					<input class="contenuformbis" type="date" name="cdf" value="" required>

					<!-- Date de réservation -->
					<label class="contenuformbis">Date de signature:</label>
					<input class="contenuformbis" type="date" name="cds" value="" required>
					
					<!-- Caution -->
					<label class="contenuformbis">Caution :</label>
					<input class="contenuformbis" type="text" name="cc" value="" placeholder="">

					<!-- Accompte -->
					<label class="contenuformbis">Montant accompte :</label>
					<input class="contenuformbis" type="text" name="cacc" value="" placeholder="">
					
					<!-- Nom client -->
					<label class="contenuformbis">Nom client :</label>
					<input class="contenuformbis" type="text" name="cci" value="" placeholder="">

					<!-- Prénom client -->
					<label class="contenuformbis">Prénom client :</label>
					<input class="contenuformbis" type="text" name="ccip" value="" placeholder="">

					<!-- Véhicule modèle -->
					<label class="contenuformbis">Véhicule numéro :</label>
					<input class="contenuformbis" type="text" name="cvm" value="" placeholder="">

					


						</select>
										<!-- Submit -->
					<div class="validation">
                        <input class="contenuformbis" id="leboutondenathalie" type="submit" value="ajout">
                    </div>
				</form>
			</div>
 
	</body>
</html>