<?php

	class Arrojado implements Investimento{
		private $random;

		public function calcula(Conta $conta){
			$this->random = mt_rand(1,100);
			if($this->random <= 20){
				return $conta->getSaldo() * 0.5;
			}elseif($this->random > 20 && $this->random <= 50){
				return $conta->getSaldo() * 0.3;
			}else{
				return $conta->getSaldo() * 0.06;
			}
		}
	}