<?php
	class Orcamento{
		private $valor;
		private $itens;

		function __construct($novoValor){
			$this->valor = $novoValor;
			$this->itens  = array();
		}
		public function addItem(Item $item){
			$this->itens[] = $novoItem;
		}

		public function getItens(){
			return $this->itens;
		}

		public function getValor(){
			return $this->valor;
		}
	}

?>