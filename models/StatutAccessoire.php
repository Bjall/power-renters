<?php

class StatutAccessoire{
	private $accessoire_stat_id;
	private $accessoire_stat_lib;

	public function __construct($accessoire_stat_id = 0, $acc_stat_libelle = ''){
		$this->accessoire_stat_id = $accessoire_stat_id;
		$this->accessoire_stat_lib =$acc_stat_libelle;
	}


	public function getAccessoire_stat_id(){
		return $this->accessoire_stat_id;
	}

	public function setAccessoire_stat_id($accessoire_stat_id){
		$this->accessoire_stat_id = $accessoire_stat_id;
	}

	public function getAccessoire_stat_lib(){
		return $this->accessoire_stat_lib;
	}

	public function setAcc_stat_libelle($acc_stat_libelle){
		$this->accessoire_stat_lib = $acc_stat_libelle;
	}

}

?>
