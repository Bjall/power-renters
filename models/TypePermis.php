<?php

	class TypePermis {
		private $typepermis_id;
		private $denomination;
		private $libelle;

		function __construct ($typepermis_id = '', $denomination = '', $libelle = ''){
			$this->typepermis_id = $typepermis_id;
			$this->denomination = $denomination;
			$this->libelle = $libelle;
		}

		public function getTypePermis(){
			return $this->typepermis_id;
		}

		public function setTypePermis($date_permis){
			$this->typepermis_id = $typepermis_id;
		}

		public function getDenomination(){
			return $this->denomination;
		}

		public function setDenomination($denomination){
			$this->denomination = $denomination;
		}

		public function getLibelle(){
			return $this->libelle;
		}

		public function setLibelle($libelle){
			$this->libelle = $libelle;
		}
		
	}