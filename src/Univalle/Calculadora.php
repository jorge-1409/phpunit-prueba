<?php
namespace Univalle;
class Calculadora {
 	public function suma($a, $b){
 		if(! is_int($a) || ! is_int($b)){
 			throw new \InvalidArgumentException("los argumentos tienen que ser numéricos");
 		}
 		return $a + $b;
 	}
}