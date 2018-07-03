<?php

	class CPVille {	

		private $cp_codepostal;
		private $cp_id;
		private $cp_ville;
		private $pays_id;

		function __construct ($cp_codepostal, $cp_ville)
		{
			$this->cp_codepostal = $cp_codepostal;
			$this->cp_ville = $cp_ville;
		}
		
		public function getCp_codepostal(){
			return $this->cp_codepostal;
		}

		public function setCp_codepostal($cp_codepostal){
			$this->cp_codepostal = $cp_codepostal;
		}

		public function getCp_id(){
			return $this->cp_id;
		}

		public function setCp_id($cp_id){
			$this->cp_id = $cp_id;
		}

		public function getCp_ville(){
			return $this->cp_ville;
		}

		public function setCp_ville($cp_ville){
			$this->cp_ville = $cp_ville;
		}

		public function getPays_id(){
			return $this->pays_id;
		}

		public function setPays_id($pays_id){
			$this->pays_id = $pays_id;
		}
		
	}