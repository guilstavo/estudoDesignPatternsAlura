<?php
	require_once("Item.php");
	class DescontoLapisECaneta implements Desconto{
		private $proximoDesconto;

		private function existe($nomeDoItem, Orcamento $orcamento) {
            foreach ($orcamento->getItens() as $item) {
                if($item->getNome() == $nomeDoItem) return true;
            }
            return false;
        }

        public function desconto(Orcamento $Orcamento){
			if($this->existe('caneta', $Orcamento) && $this->existe('lapis', $Orcamento)){
				return $Orcamento->getValor() * 0.05;
			}else{
				return $this->proximoDesconto->desconto($Orcamento);
			}
		}

		public function setProximo(Desconto $proximo){
			$this->proximoDesconto = $proximo;
		}
	}