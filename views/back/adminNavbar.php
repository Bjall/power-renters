<!DOCTYPE html>
<html>
	<header>
		<link rel="stylesheet" type="text/css" href="/PowerRenters/css/styleback.css"> 
		<meta charset="UTF-8">
	</header>

	<body>
		<nav class="bandeauadmin"> 
			<img src="/PowerRenters/images/logopower.png" class="logopower">
			<ul>
				<li>
					<a href="/PowerRenters/controllers/adminController.php?option=accueil">Accueil administrateur</a>
				</li>
				
				<li>
					<a href="#">Clientèle</a>
					<ul>
						<li>
							<a href="/PowerRenters/controllers/adminControllerPersonne.php?option=listeClient">Afficher la liste des clients</a>					
						</li>
						<li>
							<a href="/PowerRenters/controllers/adminControllerPersonne.php?option=pageAjoutClient">Ajouter un client</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#">Contrat</a>
					<ul>
						<li>
							<a href="/PowerRenters/views/back/adminRechercheContrat.php">Rechercher un contrat par numéro</a>						
						</li>
						
						<li>
							<a href="/PowerRenters/controllers/adminControllerContrat.php?option=AfficherContrat">Afficher la liste des contrats/modification</a>						
						</li>
						
						<li>
							<a href="/PowerRenters/controllers/adminControllerContrat.php?option=pageAjoutContratvide">Créer un contrat</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#">Véhicules</a>
					<ul>
						<li>
							<a href="/PowerRenters/controllers/adminControllerVehicule.php?option=rechercheVehMar">Rechercher un véhicule par marque</a>
						</li>
					
						<li>
							<a href="/PowerRenters/controllers/adminControllerVehicule.php?option=ListeVehicule">Afficher la liste des véhicules</a>
						</li>
						<li>
							<a href="/PowerRenters/controllers/adminControllerVehicule.php?option=Toutcon">Ajouter un véhicule</a>				
						</li>
						<li>
							<a href="/PowerRenters/controllers/adminControllerVehicule.php?option=Presquetoutcon">Ajouter un Modèle</a>				
						</li>
					</ul>
				</li>

				<li>
					<a href="#">Personnel</a>
					<ul>
						<li>
							<a href="/PowerRenters/controllers/adminControllerPersonne.php?option=listePersonnel">Afficher la liste du personnel</a>
						</li>
						<li>
							<a href="/PowerRenters/controllers/adminControllerPersonne.php?option=pageAjoutPersonnel">Ajouter un membre du personnel</a>
						</li>
					</ul>
				</li>

				<li>
					<a href="#">Accessoire</a>
					<ul>
						 <li>
						 	<a href="/PowerRenters/controllers/adminControllerAccessoire.php?option=accueilAccessoire">Rechercher un accessoire</a>
						 </li>
	                    
	                    <li>
	                    	<a href="/PowerRenters/controllers/adminControllerAccessoire.php?option=AfficheAccessoire">Afficher la liste des accessoires</a>
	                    </li>
	                    <li>
	                    	<a href="/PowerRenters/controllers/adminControllerAccessoire.php?option=accueilAjoutAcc">Ajouter un accessoire</a>                	
	                    </li>
					</ul>
				</li>

				<li>
					<a href="/PowerRenters/controllers/adminController.php?option=Statistiques">Statistiques</a>
				</li>
				<li>
					<a href="/PowerRenters/controllers/deconnexionController.php">Déconnexion</a>
				</li>
			</ul>
		</nav>
	</body>
</html>