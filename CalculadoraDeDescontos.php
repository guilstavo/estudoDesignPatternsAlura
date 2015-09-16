<?php

require_once("Desconto5Itens.php");
require_once("Desconto300Reais.php");
require_once("Desconto500Reais.php");
require_once("DescontoLapisECaneta.php");
require_once("SemDesconto.php");



	class CalculadoraDeDescontos{
		public function desconto(Orcamento $Orcamento){
			$desconto5Itens = new Desconto5Itens();
			$desconto300Reais = new Desconto300Reais();
			$descontoLapisECaneta = new DescontoLapisECaneta();
			$desconto500Reais = new Desconto500Reais();
			$semDesconto = new SemDesconto();

			$desconto5Itens->setProximo($desconto500Reais);
			$desconto500Reais->setProximo($desconto300Reais);
			$desconto500Reais->setProximo($descontoLapisECaneta);
			$descontoLapisECaneta->setProximo($semDesconto);

			$valorDoDesconto = $desconto5Itens->desconto($Orcamento);

			return $valorDoDesconto;
		}
	}