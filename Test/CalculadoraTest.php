<?php

/**
 * Pruebas unitarias para la clase Univalle\Calculadora;
 */
class CalculadoraTest extends PHPUnit_Framework_TestCase {

    private $calculadora = null;

    /**
     * configuración del entorno de prueba
     */
    public function setUp() {
        $this->calculadora = new Univalle\Calculadora();
    }

    /**
     * Al terminar la prueba
     */
    public function tearDown() {
        $this->calculadora = null;
    }

    /**
     * Se verifica si $this->calculadora es instancia de \Univalle\Calculadora
     * @test
     */
    public function testInstanciaDe() {
        $this->assertInstanceOf("\Univalle\Calculadora", $this->calculadora);
    }

    /**
     * Se comprueba si el método suma arroja error cuando uno de los argumentos no es un número
     * @expectedException InvalidArgumentException
     */
    public function testExceptionEsperada() {
        $this->calculadora->suma("no_es_un_numero", 5);
    }
    
    /**
     * Comprueba si lo arrojado por el método suma, es válido
     * @test
     */
    public function testResultadoValido() {
        $this->assertEquals(5, $this->calculadora->suma(3, 2));
    }   

}

