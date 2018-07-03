<!DOCTYPE html>
<html>
	<head>
		<title>Modification d'un Accessoire</title>
	</head>

	<body>
		<?php
			include_once('adminNavbar.php');

		?>

		<!-- Formulaire ajout accessoire-->
		<div class="formulaire">
				<form  action="/PowerRenters/controllers/adminControllerAccessoire.php" method="GET" >
					<input type="hidden" name="option" value="AccessoireModification">
					<legend class= "contenuCenter">Modification d'un accessoire</legend>

					<input type="hidden" name="id" value="<?php echo $_SESSION['id_acc']; ?>">

					<label class="contenuformbis">Nom de l'accessoire :</label>
					<!-- Libelle/Nom -->
					<input class="contenuformbis" type="text" name="libelle" value="<?php if(isset($afficheUnAcc[0])) {echo $afficheUnAcc[0]->getAccessoire_libelle();} ?>" required/>

					<label class="contenuformbis">Prix de l'accessoire :</label>
					<!-- Libelle/Nom -->
					<input class="contenuformbis" type="number" step="0.01" name="prix" value="<?php if(isset($afficheUnAcc[0])) {echo $afficheUnAcc[0]->getAccessoire_prix_u_ht();} ?>" required/>

 					<label class="contenuformbis">Stock :</label>
					<input class="contenuformbis" type="number" step="1" name="stock" value="<?php if(isset($afficheUnAcc[0])) {echo $afficheUnAcc[0]->getAccessoire_stock();} ?>" required/>

					<label class="contenuformbis">Statut :</label>
					
					<select class="contenuformbis" name="statutAcc">
                        <?php
                            $tabStatutAcc = array(1 => 'Disponible', 'Indisponible');
                            $script = '';
                            if ($afficheUnAcc[0]->getAccessoire_statut()->getAccessoire_stat_lib()=="Disponible")
                                {$statutAcc=1;}
                            else $statutAcc=2;
                            for ($i=1; $i<=count($tabStatutAcc); $i++){
                                $selected = '';
                                if ($i == $statutAcc){
                                    $selected = ' selected="selected"';
                                }
                                $script .= '<option value="'.$i.'"'.$selected.'>'.$tabStatutAcc[$i].'</option>';
                            }
                            print($script);

                            ?>
                       </select>
					
					<div class="validation">
                        <input class="contenuformbis" id="leboutondenathalie" type="submit" value="Modifier">
				</form>
		</div>

	</body>

	<footer>
		<a href="mentionlegales.php">Mentions legales</a>
		<a href="apropos.php"> A propos</a>
		<a href="faq.php">FAQ</a>
	</footer>
</html>