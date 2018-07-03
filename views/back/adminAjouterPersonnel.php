<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un membre du personnel</title>
	</head>

	<body>
		<?php 
			include_once('adminNavbar.php');
		 $afficheUnMembre[0] = isset ( $afficheUnMembre[0]) ?  $afficheUnMembre[0] : NULL;
		//var_dump($afficheUnMembre);
		?>

		<!-- Formulaire d'inscription -->
			<div class="formulaire">
				<form  action="/PowerRenters/controllers/adminControllerPersonne.php" method="GET" >
					<input type="hidden" name="option" value="ajouterPersonne">
					<legend class= "contenuCenter">Ajout d'un membre du personnel</legend>
					<input type="hidden" name="id" value="<?php echo $afficheUnMembre[0]->getCli_id();?>"/>
					<!-- Civilité (combo box) -->
					<label class="contenuformbis">Civilité :</label>
					<div id="civcombo" class="contenuformbis">
						<select name="cbCivilite">
							
							<?php
							$tabStatut = array(1 => 'Madame', 'Monsieur');
							$script = '';
							if ($afficheUnMembre[0]->getCivilite()->getCli_civ_denomination()=="Monsieur")
								{$statut=2;}
							else $statut=1;
							for ($i=1; $i<=count($tabStatut); $i++){
								$selected = '';
								if ($i == $statut){
									$selected = ' selected="selected"';
								}
								$script .= '<option value="'.$i.'"'.$selected.'>'.$tabStatut[$i].'</option>';
							}
							print($script);
						

							?>
						</select>
					</div>
					<!-- Nom -->
					<label class="contenuformbis">Nom :</label>
					<input class="contenuformbis type="text" name="nom" value="<?php echo $afficheUnMembre[0]->getCli_nom();?>" required/>
					<!-- Prénom -->
					<label class="contenuformbis">Prénom :</label>
					<input class="contenuformbis" type="text" name="prenom" value="<?php echo $afficheUnMembre[0]->getCli_prenom();?>" required/>
					
					<!-- Date de naissance -->
					<label class="contenuformbis">Date de naissance :</label>
					<input class="contenuformbis" type="date" name="birthdate" value="<?php echo $afficheUnMembre[0]->getCli_date_naissance();?>" required>
					
					<!-- E-mail -->
					<label class="contenuformbis">E-mail :</label>
					<input class="contenuformbis" type="email" name="email" value="<?php echo $afficheUnMembre[0]->getCli_mail();?>" placeholder="ranger@power.com" required>
					
					<!-- Mot de passe -->
					<label class="contenuformbis">Mot de passe :</label>
					<input class="contenuformbis" type="password" name="password" value="<?php echo $afficheUnMembre[0]->getCli_mdp();?>" placeholder="Mot de passe">
					
					<label class="contenuformbis">Saisissez à nouveau votre mot de passe :</label>
					<input class="contenuformbis" type="password" name="password-check" value="<?php echo $afficheUnMembre[0]->getCli_mdp();?>" placeholder="Retapez votre mot de passe">
					
					<!-- Statut client (combo box) -->
					<label class="contenuformbis" >Vous êtes :</label>
						<select class="contenuformbis" name="cbStat">
						<option value="3">Administrateur</option>;
						<option value="4">Employé</option>;	
						</select>
					<div id="form-separateur">
						
						<!-- Adresse -->
						<label class="contenuformbis">Adresse :</label>
						<input  class="contenuformbis" type="text" name="adressel1" value="<?php echo $afficheUnMembre[0]->getAdresse()->getAdresse_l1();?>"/>
						
						<label class="contenuformbis">Complément adresse :</label>
						<input  class="contenuformbis" type="text" name="adressel2" value="<?php echo $afficheUnMembre[0]->getAdresse()->getAdresse_l2();?>"/>
						
						<label class="contenuformbis">Complément adresse :</label>
						<input  class="contenuformbis" type="text" name="adressel3" value="<?php echo $afficheUnMembre[0]->getAdresse()->getAdresse_l3();?>"/>
						
						<label class="contenuformbis">Code postal :</label>
						<input  class="contenuformbis" type="text" name="codepostal" value="<?php echo $afficheUnMembre[0]->getAdresse()->getCpville()->getCp_codepostal();?>"/>
						
						<label class="contenuformbis">Ville :</label>
						<input  class="contenuformbis" type="text" name="ville" value="<?php echo $afficheUnMembre[0]->getAdresse()->getCpville()->getCp_ville();?>"/>
						
						
					</div>
					<!-- Submit -->
					<div class="validation">
                        <input class="contenuformbis" id="leboutondenathalie" type="submit" value="Inscription">
                    </div>
				</form>
			</div>
 }
	</body>
</html>