<?php
	
	class Civilite {	
		private $cli_civ_denomination;
		private $cli_civ_id;
		private $cli_civ_libelle;

		function __construct ($cli_civ_denomination=''){
		$this->cli_civ_denomination= $cli_civ_denomination;
		}
		
		public function getCli_civ_denomination(){
			return $this->cli_civ_denomination;
		}

		public function setCli_civ_denomination($cli_civ_denomination){
			$this->cli_civ_denomination = $cli_civ_denomination;
		}

		public function getCli_civ_id(){
			return $this->cli_civ_id;
		}

		public function setCli_civ_id($cli_civ_id){
			$this->cli_civ_id = $cli_civ_id;
		}

		public function getCli_civ_libelle(){
			return $this->cli_civ_libelle;
		}

		public function setCli_civ_libelle($cli_civ_libelle){
			$this->cli_civ_libelle = $cli_civ_libelle;
		}
		
	}