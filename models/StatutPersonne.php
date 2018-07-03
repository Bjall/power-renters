<?php

	class StatutPersonne {	
		private $cli_stat_id;
		private $cli_stat_libelle;
		private $cli_stat_taux;
				
		function __construct ($cli_stat_id = 0, $cli_stat_libelle = "", $cli_stat_taux = 0){
			$this->cli_stat_id = $cli_stat_id;
			$this->cli_stat_libelle = $cli_stat_libelle;
			$this->cli_stat_taux = $cli_stat_taux;
		}

		public function getCli_stat_id(){
			return $this->cli_stat_id;
		}

		public function setCli_stat_id($cli_stat_id){
			$this->cli_stat_id = $cli_stat_id;
		}

		public function getCli_stat_libelle(){
			return $this->cli_stat_libelle;
		}

		public function setCli_stat_libelle($cli_stat_libelle){
			$this->cli_stat_libelle = $cli_stat_libelle;
		}

		public function getCli_stat_taux(){
			return $this->cli_stat_taux;
		}

		public function setCli_stat_taux($cli_stat_taux){
			$this->cli_stat_taux = $cli_stat_taux;
		}
	}