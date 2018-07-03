<?php

	class Detenir {
		private $date_permis;
		private $cli_id;
		private $typepermis_id;

		function __construct ($date_permis='', $typepermis_id='') {
			$this->date_permis = $date_permis;
			$this->typepermis_id = $typepermis_id;
		}

		public function getDatePermis(){
			return $this->date_permis;
		}

		public function setDatePermis($date_permis){
			$this->date_permis = $date_permis;
		}

		public function getCliId(){
			return $this->cli_id;
		}

		public function setCliId($cli_id){
			$this->cli_id = $cli_id;
		}

		public function getTypePermis(){
			return $this->typepermis_id;
		}

		public function setTypePermis($typepermis_id){
			$this->typepermis_id = $typepermis_id;
		}
	}