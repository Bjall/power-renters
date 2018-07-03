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
		<?php
		$listePermis = isset ($listePermis) ? $listePermis : NULL;
		echo'<p class= "contenu">Liste des permis de '.$listePermis[0]->getCli_prenom().'     ' .$listePermis[0]->getCli_nom().' </p>';
		if ($listePermis!=null) {
			echo'
			<table class="table-fill">
			<tr><th>Numéro de permis</th>
			<th>Type de permis</th>
			<th>Date de permis</th>
			<th>Modification</th>
			</tr>';
			$script = '';

			for ($i=0;$i<count($listePermis);$i++) {
				
					//$script .= '<tr><td>'.$listeClient[$i]->getCivilite()->getCli_civ_denomination().'</td>';			
				$script .= '<td>'.$listePermis[$i]->getCli_permis_numero().'</td>';
				$script .= '<td>'.$listePermis[$i]->getDetenirPermis()->getTypePermis().'</td>';
				$script .= '<td>'.$listePermis[$i]->getDetenirPermis()->getDatePermis().'</td>';
				$script .= '<td><img src="/PowerRenters/images/iconeModif.jpg" width=30px /></td></tr>';

			}

			print($script);

			echo '</table>';
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