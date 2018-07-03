<?php

class Vehmodele{
	private $vehmmod_id;
	private $vehmmod_libelle;
	private $veh_marque; // objet

	function __construct ($vehmmod_id='', $vehmmod_libelle='', $veh_marque='') {
		$this->vehmmod_id= $vehmmod_id;
		$this->vehmmod_libelle= $vehmmod_libelle;
		$this->veh_marque= $veh_marque;
	}
	

	public function getVehmmod_id(){
		return $this->vehmmod_id;
	}

	public function setVehmmod_id($vehmmod_id){
		$this->vehmmod_id = $vehmmod_id;
	}

	public function getVehmmod_libelle(){
		return $this->vehmmod_libelle;
	}

	public function setVehmmod_libelle($vehmmod_libelle){
		$this->vehmmod_libelle = $vehmmod_libelle;
	}

	public function getVeh_marque(){
		return $this->veh_marque;
	}

	public function setVeh_marque($veh_marque){
		$this->veh_marque = $veh_marque;
	}

}
?>