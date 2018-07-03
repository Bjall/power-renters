<?php if (!isset ($_SESSION)){
	session_start();
}
?>
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

		<p class= "contenu">Résultat recherche Accessoire(s)</p>

		<?php
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

		for ($i=0;$i<count($listeResultAcc);$i++) {
			$script .= '<tr>';
			$script .= '<td>'.$listeResultAcc[$i]->getAccessoire_libelle().'</td>';
			$script .= '<td>'.$listeResultAcc[$i]->getAccessoire_prix_u_ht().'</td>';
			$script .= '<td>'.$listeResultAcc[$i]->getAccessoire_stock(). '</td>';
			$script .= '<td>'.$listeResultAcc[$i]->getAccessoire_statut()->getAccessoire_stat_lib(). '</td>';

			$script .= '<td><a href="http://localhost/PowerRenters/controllers/adminControllerAccessoire.php?option=lireAccessoireModification&id='.$listeResultAcc[$i]->getAccessoire_id().'">
			<img src="/PowerRenters/images/iconeModif.jpg" width=30px /></td>';
			if ($listeResultAcc[$i]->getAccessoire_statut() == "Disponible")
			{
				$script .= '<td>
				<a href="http://localhost/PowerRenters/controllers/adminControllerAccessoire.php?option=lireAccessoireModification&id='.$listeResultAcc[$i]->getAccessoire_id().'">	<img src="/PowerRenters/images/supprimer.png" width=30px /></td>';
			}else{
				$script .= '<td>
				<a href="http://localhost/PowerRenters/controllers/adminControllerAccessoire.php?option=lireAccessoireModification&id='.$listeResultAcc[$i]->getAccessoire_id().'">	<img src="/PowerRenters/images/disponible.png" width=30px /> </td>';
			}

			$script .= '</tr>';
		}
		print($script);

		echo '</table>';
		?>
	</div>
</body>

<footer>
	<a href="mentionlegales.php">Mentions legales</a>
	<a href="apropos.php"> A propos</a>
	<a href="FAQ">FAQ</a>
</footer>
</html>