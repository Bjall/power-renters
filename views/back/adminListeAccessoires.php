<!DOCTYPE html>
<html>
<head>
	<title>Accessoires</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
	<?php
	include_once('adminNavbar.php');


	?>

	<div>
		<p class= "contenu">Liste des Acccessoires</p>
		<?php
		$ajoutOK = isset ($ajoutOK) ? $ajoutOK : NULL;
		if ($ajoutOK == true){
			echo' <div class="alert"> Ajout réussi ! <img src="/PowerRenters/images/tenor.gif" class="gif"></div>';
			echo'<script>	
			$("img").click(function(){
				$(this).hide();
			});
			</script>';
		}

		$desactivationOK = isset ($desactivationOK) ? $desactivationOK : NULL;
		if ($desactivationOK == true){
			echo'<div class="alert"> Désactivation réussie ! <img src="/PowerRenters/images/suppression.gif" class="gif"></div>';
			echo'<script>	
			$("img").click(function(){
				$(this).hide();
			});
			</script>';
		}

		$modificationOK = isset ($modificationOK) ? $modificationOK : NULL;
		if ($modificationOK == true){
			echo'<div class="alert"> Modification réussie ! <img src="/PowerRenters/images/giphy.webp" class="gif"> </div>';
			echo'<script>	
			$("img").click(function(){
				$(this).hide();
			});
			</script>';
		}

		$listeAcc = isset ($listeAcc) ? $listeAcc : NULL;

		if($listeAcc != NULL){
			echo'
			<table class="table-fill">
			<tr>

			<th>Nom</th>
			<th>Prix</th>
			<th>Stock</th>
			<th>Statut</th>
			<th>Modifier</th>
			<th>Changement Statut</th>

			</tr>';

			$script = '';
			foreach ($listeAcc as $acc) {
				$script .= '<tr>';
				$script .= '<td>'.$acc->getAccessoire_libelle(). '</td>';
				$script .= '<td>'.$acc->getAccessoire_prix_u_ht(). '</td>';
				$script .= '<td>' .$acc->getAccessoire_stock(). '</td>';
				$script .= '<td>' .$acc->getAccessoire_statut(). '</td>';

				$script .= '<td><a href="http://localhost/PowerRenters/controllers/adminControllerAccessoire.php?option=lireAccessoireModification&id='.$acc->getAccessoire_id().'">
				<img src="/PowerRenters/images/iconeModif.jpg" width=30px /></td>';
				if ($acc->getAccessoire_statut() == "Disponible")
				{
					$script .= '<td>
					<a href="http://localhost/PowerRenters/controllers/adminControllerAccessoire.php?option=lireAccessoireModification&id='.$acc->getAccessoire_id().'">	<img src="/PowerRenters/images/supprimer.png" width=30px /></td>';
				}else{
					$script .= '<td>
					<a href="http://localhost/PowerRenters/controllers/adminControllerAccessoire.php?option=lireAccessoireModification&id='.$acc->getAccessoire_id().'">	<img src="/PowerRenters/images/disponible.png" width=30px /> </td>';
				}
				
				$script .= '</tr>';
			}
			print($script);

			echo'</table>';
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