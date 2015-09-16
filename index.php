<?php
	require_once("Imposto.php");
	require_once("Desconto.php");
	require_once("Desconto5Itens.php");
	require_once("Desconto500Reais.php");
	require_once("Desconto300Reais.php");
	require_once("DescontoLapisECaneta.php");
	require_once("SemDesconto.php");
	require_once("Item.php");
	require_once("TemplateDeImpostoCondicional.php");
	require_once("Orcamento.php");
	require_once("CalculadoraDeImpostos.php");
	require_once("ICMS.php");
	require_once("ISS.php");
	require_once("KCV.php");
	require_once("CalculadoraDeDescontos.php");

	

	$reforma = new Orcamento(501);

	$calculadora = new CalculadoraDeImpostos();
	
	echo $calculadora->Calcula($reforma, new ICMS());
	echo '<br />';
	echo $calculadora->Calcula($reforma, new ISS());
	echo '<br />';
	echo $calculadora->Calcula($reforma, new KCV());
	echo '<br />';
	// Descontos

	echo 'testes de descontos';
	echo '<br />';
	$calculadoraDeDescontos = new calculadoraDeDescontos();

	echo "Desconto";
	echo '<br />';
	$reforma->addItem(new Item("Tijolo", 250));
	$reforma->addItem(new Item("lapis", 250));
	$reforma->addItem(new Item("caneta", 250));
	$reforma->addItem(new Item("Cimento", 250));
	

	echo $calculadoraDeDescontos->desconto($reforma);



