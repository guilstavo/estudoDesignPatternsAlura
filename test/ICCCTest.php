<?php
	require_once("../Imposto.php");
	require_once("../Orcamento.php");
	require_once("../CalculadoraDeImpostos.php");
	require_once("../ICCC.php");

	class ICCCTest extends PHPUnit_Framework_TestCase{
		private $calculadora;

		public function SetUp(){
			$this->calculadora = new CalculadoraDeImpostos();
		}
		/** @test */
		public function testValorAbaixoDeMilReais(){
			$reforma = new Orcamento(500);
	
			$this->assertEquals(25, $this->calculadora->Calcula($reforma, new ICCC()));
		}

		public function testValorEntreMilETresMilReais(){
			$reforma = new Orcamento(1500);
	
			$this->assertEquals(105, $this->calculadora->Calcula($reforma, new ICCC()));
		}

		public function testValorAcimaDeTresMilReais(){
			$reforma = new Orcamento(3500);
	
			$this->assertEquals(310, $this->calculadora->Calcula($reforma, new ICCC()));
		}

	}