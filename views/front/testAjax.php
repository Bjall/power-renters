<?php
	require_once('dbConn.php');
	connexion();
	global $dbConn;

	$cp = $_POST['cp'];

	$SQLQuery = 'SELECT cp_ville FROM cpville WHERE cp_codepostal = :cp';
	$SQLResult = $dbConn->prepare($SQLQuery);
	$SQLResult->bindValue(':cp', $cp);
	$SQLResult->execute();

	$option = '';
	
	while($SQLResult->fetch()) {
		if(empty($option)) {
		            $option = ucfirst(strtolower($query['Ville']));
		        } else {
		            $option = $option.'/'.ucfirst(strtolower($query['Ville']));
		        }
	}
	echo $option;


/*	$select = mysql_query("SELECT Ville FROM cp WHERE CP = '".$_POST['cp']."'")or die(mysql_error());
	$option = '';
	    while($query = mysql_fetch_assoc($select)){
	        if(empty($option)){
	            $option = ucfirst(strtolower($query['Ville']));
	        }
	        else{
	            $option = $option.'/'.ucfirst(strtolower($query['Ville']));
	        }
	    }
	    echo $option;*/
	    //echo ucfirst(strtolower($query['Ville']));
	//}







/*	$SQLResult = $dbConn->prepare($SQLQuery);
	$SQLResult->bindValue(':mail', $email);
	$SQLResult->bindValue(':pass', $password);
	$SQLResult->execute();
	$user = $SQLResult->fetch();


	$tableau = file('cpvilles.csv');

	$code = $_REQUEST["code"];

	$json = "";
	foreach ($tableau as $ligne) {
		$cpville = explode(';', $ligne);

		if($code == $cpville[0]) {
			$json .= $cpville[1];
		}
	}
	print json_encode($json);*/