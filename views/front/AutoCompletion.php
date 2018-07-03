<?php
    require_once('./AutoCompletionCPVille.class.php');

    // Initialisation de la liste
    $list = array();

    // Connexion MySQL
    try {
        	$db = new PDO('mysql:host=localhost;dbname=powerrenters', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } catch (Exception $ex) {
        echo $ex->getMessage();
    }

    // Construction de la requête
    $strQuery = "SELECT cp_codepostal CodePostal, cp_ville Ville FROM cpville WHERE ";
    if (isset($_POST["codePostal"])) {
        $strQuery .= "cp_codepostal LIKE :codePostal ";
    } else {
        $strQuery .= "cp_ville LIKE :ville ";
    }
    $strQuery .= "AND pays_id = 1 ";

    // Limite
    if (isset($_POST["maxRows"])) {
        $strQuery .= "LIMIT 0, :maxRows";
    }
    $query = $db->prepare($strQuery);

    if (isset($_POST["codePostal"])) {
        $value = $_POST["codePostal"]."%";
        $query->bindParam(":codePostal", $value, PDO::PARAM_STR);
    } else {
        $value = $_POST["ville"]."%";
        $query->bindParam(":ville", $value, PDO::PARAM_STR);
    }

    // Limite
    if (isset($_POST["maxRows"])) {
        $valueRows = intval($_POST["maxRows"]);
        $query->bindParam(":maxRows", $valueRows, PDO::PARAM_INT);
    }

    $query->execute();

    $list = $query->fetchAll(PDO::FETCH_CLASS, "AutoCompletionCPVille");;

    echo json_encode($list);