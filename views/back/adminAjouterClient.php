<!DOCTYPE html>
<html>
	<head>
		<title>Ajout d'un client</title>
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
					<input type="hidden" name="option" value="ajouterPersonne">
					<legend class= "contenuCenter">Inscription d'un client</legend>


					
					<input type="hidden" name="id" value="<?php echo $afficheUnClient[0]->getCli_id();?>"/>
					<!-- Civilité (combo box) -->
					<label class="contenuformbis">Civilité :</label>
					<div id="civcombo" class="contenuformbis">
						<select name="cbCivilite">
							
							<?php
							$tabStatut = array(1 => 'Madame', 'Monsieur');
							$script = '';
							if ($afficheUnClient[0]->getCivilite()->getCli_civ_denomination()=="Monsieur")
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
					<input class="contenuformbis type="text" name="nom" value="<?php echo $afficheUnClient[0]->getCli_nom();?>" required/>
					<!-- Prénom -->
					<label class="contenuformbis">Prénom :</label>
					<input class="contenuformbis" type="text" name="prenom" value="<?php echo $afficheUnClient[0]->getCli_prenom();?>" required/>
					
					<!-- Date de naissance -->
					<label class="contenuformbis">Date de naissance :</label>
					<input class="contenuformbis" type="date" name="birthdate" value="<?php echo $afficheUnClient[0]->getCli_date_naissance();?>" required>
					
					<!-- E-mail -->
					<label class="contenuformbis">E-mail :</label>
					<input class="contenuformbis" type="email" name="email" value="<?php echo $afficheUnClient[0]->getCli_mail();?>" placeholder="ranger@power.com" required>
					
					<!-- Mot de passe -->
					<label class="contenuformbis">Mot de passe :</label>
					<input class="contenuformbis" type="password" name="password" value="<?php echo $afficheUnClient[0]->getCli_mdp();?>" placeholder="Mot de passe">
					
					<label class="contenuformbis">Saisissez à nouveau votre mot de passe :</label>
					<input class="contenuformbis" type="password" name="password-check" value="<?php echo $afficheUnClient[0]->getCli_mdp();?>" placeholder="Retapez votre mot de passe">
					
					<!-- Statut client (combo box) -->
					<label class="contenuformbis" >Vous êtes :</label>
						<select class="contenuformbis" name="cbStat">
						<?php
							$tabStatutP = array(1 => 'Particulier', 'Professionnel');
							$script = '';
							if ($afficheUnClient[0]->getStatutPersonne()->getCli_stat_libelle()=="Professionnel")
								{$statutP=2;}
							else $statutP=1;
							for ($i=1; $i<=count($tabStatutP); $i++){
								$selected = '';
								if ($i == $statutP){
									$selected = ' selected="selected"';
								}
								$script .= '<option value="'.$i.'"'.$selected.'>'.$tabStatutP[$i].'</option>';
							}
							print($script);

							?>
						</select>
					<div id="form-separateur">
						
						<!-- Adresse -->
						<label class="contenuformbis">Adresse :</label>
						<input  class="contenuformbis" type="text" name="adressel1" value="<?php echo $afficheUnClient[0]->getAdresse()->getAdresse_l1();?>"/>
						
						<label class="contenuformbis">Complément adresse :</label>
						<input  class="contenuformbis" type="text" name="adressel2" value="<?php echo $afficheUnClient[0]->getAdresse()->getAdresse_l2();?>"/>
						
						<label class="contenuformbis">Complément adresse :</label>
						<input  class="contenuformbis" type="text" name="adressel3" value="<?php echo $afficheUnClient[0]->getAdresse()->getAdresse_l3();?>"/>
						
						<label class="contenuformbis">Code postal :</label>
						<input  class="contenuformbis" type="text" name="codepostal" value="<?php echo $afficheUnClient[0]->getAdresse()->getCpville()->getCp_codepostal();?>"/>
						
						<label class="contenuformbis">Ville :</label>
						<input  class="contenuformbis" type="text" name="ville" value="<?php echo $afficheUnClient[0]->getAdresse()->getCpville()->getCp_ville();?>"/>
						
						
						<!-- Checkbox -->
						<div class="contenuformbis" id="checkbox-validation" >
							<label class="contenuformbis">Je m'abonne à la newsletter</label>
							<input type="checkbox" class="contenuformbis">
						</div>
						<div class="contenuformbis" id="checkbox-validation">						
							<label class="contenuformbis">En cochant cette case, j'accepte et je reconnais avoir pris connaissance des Conditions d'annulation et de modification en vigueur</label>
							<input class="contenuformbis" type="checkbox">
						</div>
					</div>
					<!-- Submit -->
					<div class="validation">
                        <input class="contenuformbis" id="leboutondenathalie" type="submit" value="Inscription">
                    </div>
				</form>
			</div>

	</body>
</html>