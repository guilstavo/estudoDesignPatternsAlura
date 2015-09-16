<?php
	require_once("Conta.php");
	require_once("Investimento.php");
	require_once("RealizadorDeInvestimentos.php");
	require_once("Moderado.php");
	require_once("Arrojado.php");
	require_once("Conservador.php");

	$conta1 = new Conta();
	$conta1->deposita(500);
	$conta2 = new Conta();
	$conta2->deposita(500);
	$conta3 = new Conta();
	$conta3->deposita(500);

	$investe = new RealizadorDeInvestimentos();

	$investe->realiza($conta1, new Conservador());
	echo $conta1->getSaldo();
	echo '<br />';
	$investe->realiza($conta2, new Moderado());
	echo $conta2->getSaldo();
	echo '<br />';
	$investe->realiza($conta3, new Arrojado());
	echo $conta3->getSaldo();