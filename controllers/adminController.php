<?php
	$_GET['option'] = isset ($_GET['option']) ? $_GET['option'] : NULL;

	$choix = $_GET['option'];

	switch ($choix) {

	    case "accueil":
	        require_once('../views/back/adminAccueil.php');
	        break;

		default:
			require_once('../views/404.php');
	}