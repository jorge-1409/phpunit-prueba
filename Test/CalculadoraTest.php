<?php
class CalculadoraTest extends PHPUnit_Framework_TestCase
{
	private $calculadora = null;

	public function setUp(){
		$this->calculadora = new Univalle\Calculadora();
	}
	public function tearDown(){
		$this->calculadora = null;
	}
	/**
	* @test
	*/
	public function testInstanciaDe(){
		$this->assertInstanceOf("\Univalle\Calculadora", $this->calculadora);
	}

	/**
	* @expectedException InvalidArgumentException
	*/
	public function testExceptionEsperada(){
		$this->calculadora->suma("no_es_un_numero", 5);
	}

}
?>