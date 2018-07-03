<!DOCTYPE html>
<html>
	<head>
		<title>Modification d'un contrat </title>
	</head>

	<body>
		<?php 
			include_once('adminNavbar.php');
		 $afficheUnContrat = isset ( $afficheUnContrat) ?  $afficheUnContrat : NULL;
		
		?>

		<!-- Formulaire d'inscription -->
			<div class="formulaire">
				<form  action="/PowerRenters/controllers/adminControllerContrat.php" method="GET" >
					<input type="hidden" name="option" value="modificationContrat">
				 <input type="hidden" name="idcontrat" value="<?php echo $afficheUnContrat->getContrat_id();?>"/>
				 <input type="hidden" name="idclient" value="<?php echo $afficheUnContrat->getClient()->getCli_id();?>"/>
				 <input type="hidden" name="idvehicule" value="<?php echo $afficheUnContrat->getVehContrat()->getVeh_id();?>"/>
					<legend class= "contenuCenter">Modification d'un contrat</legend>

					<!-- Date -->
					<label class="contenuformbis">Date :</label>
					<input class="contenuformbis"  name="datec" value="<?php echo date("Y-m-d");?>" required/>
					<!-- Contrat lieux -->
					<label class="contenuformbis">Lieu :</label>
					<input class="contenuformbis" type="text" name="lieux" value="<?php echo $afficheUnContrat->getContrat_lieux();?>" required/>
					
					<!-- Date de début -->
					<label class="contenuformbis">Contrat date de début :</label>
					<input class="contenuformbis" type="date" name="cdd" value="<?php echo $afficheUnContrat->getContrat_date_debut();?>" placeholder="" required>
					
					<!-- Date de fin -->
					<label class="contenuformbis">Contrat date de fin:</label>
					<input class="contenuformbis" type="date" name="cdf" value="<?php echo $afficheUnContrat->getContrat_date_fin();?>" required>

					<!-- Date de réservation -->
					<label class="contenuformbis">Date de signature:</label>
					<input class="contenuformbis" type="date" name="cds" value="<?php echo $afficheUnContrat->getContrat_date_reservation();?>" required>
					
					<!-- Caution -->
					<label class="contenuformbis">Caution :</label>
					<input class="contenuformbis" type="text" name="cc" value="<?php echo $afficheUnContrat->getContrat_caution();?>" placeholder="">

					<!-- Accompte -->
					<label class="contenuformbis">Montant accompte :</label>
					<input class="contenuformbis" type="text" name="cacc" value="<?php echo $afficheUnContrat->getContrat_acompte();?>" placeholder="">
					
					<!-- Nom client -->
					<label class="contenuformbis">Nom client :</label>
					<input class="contenuformbis" type="text" name="cci" value="<?php echo $afficheUnContrat->getClient()->getCli_nom();?>" placeholder="">

					<!-- Prénom client -->
					<label class="contenuformbis">Prénom client :</label>
					<input class="contenuformbis" type="text" name="ccip" value="<?php echo $afficheUnContrat->getClient()->getCli_prenom();?>" placeholder="">

					<!-- Véhicule modèle -->
					<label class="contenuformbis">Véhicule modèle :</label>
					<input class="contenuformbis" type="text" name="cvm" value="<?php echo $afficheUnContrat->getVehContrat()->getVeh_modele()->getVehmmod_libelle();?>" placeholder="">

					<!-- Submit -->
					<div class="validation">
                        <input class="contenuformbis" id="leboutondenathalie" type="submit" value="Modifier">
                    </div>
				</form>
			</div>
			
	</body>
</html>