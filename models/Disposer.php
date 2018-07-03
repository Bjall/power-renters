<?php

	class Disposer {
		private $optionVeh;
		private $veh_id;
	

		function __construct ($optionVeh=0, $veh_id=0) {
			$this->optionVeh = $optionVeh;
			$this->veh_id = $veh_id;
		}

		public function getOptionVeh(){
			return $this->optionVeh;
		}

		public function setOptionVeh($optionVeh){
			$this->optionVeh = $optionVeh;
		}

		public function getVeh_id(){
			return $this->veh_id;
		}

		public function setVeh_id($veh_id){
			$this->veh_id = $veh_id;
		}
		
	}