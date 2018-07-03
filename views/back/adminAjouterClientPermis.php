<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un permis</title>
	</head>

	<body>
		<?php 
			include_once('adminNavbar.php');
		 $afficheUnClient[0] = isset ( $afficheUnClient[0]) ?  $afficheUnClient[0] : NULL;
		//var_dump($afficheUnClient);
		?>

		<!-- Formulaire d'inscription -->
			<div class="formulaire">
				<form  action="/PowerRenters/controllers/adminControllerPersonne.php" method="GET" >
					<input type="hidden" name="option" value="ajouterPermis">
					<legend class= "contenuCenter">Ajout d'un permis</legend>


					
					<input type="hidden" name="id" value="<?php echo $afficheUnClient[0]->getCli_id();?>"/>
				<input type="hidden" name="stat" value="<?php echo $afficheUnClient[0]->getStatutPersonne()->getCli_stat_id();?>"/>
					<!-- Civilité (combo box) -->
					<label class="contenuformbis">Numéro client :</label>
					<input class="contenuformbis" type="text" name="id" value="<?php echo $afficheUnClient[0]->getCli_id();?>"/>
					<!-- Nom -->
					<label class="contenuformbis">Nom :</label>
					<input class="contenuformbis" type="text" name="nom" value="<?php echo $afficheUnClient[0]->getCli_nom();?>" required/>
						<!-- Type de permis -->
						<label class="contenuformbis">Type permis :</label>
						<input class="contenuformbis" type="text" name="typePermis" value="<?php echo $afficheUnClient[0]->getDetenirPermis()->getTypePermis();?>"/>
						<!-- Numéro du permis -->
						<label class="contenuformbis">Numéro de permis :</label>
						<input class="contenuformbis" type="text" name="numPermis" value="<?php echo $afficheUnClient[0]->getCli_permis_numero();?>"/>
						<!-- Date de permis -->
						<label class="contenuformbis">Date de permis :</label>
						<input class="contenuformbis" type="date" name="permisdate" value="<?php echo $afficheUnClient[0]->getDetenirPermis()->getDatePermis();?>" >
				
					<!-- Submit -->
					<div class="validation">
                        <input class="contenuformbis" id="leboutondenathalie" type="submit" value="Ajouter">
                    </div>
				</form>
			</div>
 
	</body>
</html>