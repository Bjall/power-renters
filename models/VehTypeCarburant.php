<?php

class VehTypeCarburant{
	
	private $vehm_carb_id;
	private $vehm_carb_libelle;

	function __construct ($vehm_carb_id='', $vehm_carb_libelle='') {
		$this->vehm_carb_id= $vehm_carb_id;
		$this->vehm_carb_libelle= $vehm_carb_libelle;
	}

	public function getVehm_carb_id(){
		return $this->vehm_carb_id;
	}

	public function setVehm_carb_id($vehm_carb_id){
		$this->vehm_carb_id = $vehm_carb_id;
	}

	public function getVehm_carb_libelle(){
		return $this->vehm_carb_libelle;
	}

	public function setVehm_carb_libelle($vehm_carb_libelle){
		$this->vehm_carb_libelle = $vehm_carb_libelle;
	}

}


?>