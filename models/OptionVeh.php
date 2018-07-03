<?php  

class OptionVeh {
	
	private $option_veh_id;
	private $option_veh_libelle;

	function __construct ($option_veh_id = '', $option_veh_libelle = '') {
		$this->option_veh_id = $option_veh_id;
		$this->option_veh_libelle = $option_veh_libelle;
	}

	public function getOption_veh_id(){
		return $this->option_veh_id;
	}

	public function setOption_veh_id($option_veh_id){
		$this->option_veh_id = $option_veh_id;
	}

	public function getOption_veh_libelle(){
		return $this->option_veh_libelle;
	}

	public function setOption_veh_libelle($option_veh_libelle){
		$this->option_veh_libelle = $option_veh_libelle;
	}

}