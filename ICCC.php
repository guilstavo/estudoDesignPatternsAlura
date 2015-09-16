<?php

	class ICCC implements Imposto{
		public function calcula(Orcamento $Orcamento){
			if($Orcamento->getValor() < 1000){
				return $Orcamento->getValor() * 0.05;
			}elseif($Orcamento->getValor() >= 1000 && $Orcamento->getValor() <= 3000){
				return $Orcamento->getValor() * 0.07;
			}elseif($Orcamento->getValor() > 3000){
				return ($Orcamento->getValor() * 0.08) + 30;
			}
			
		}
	}