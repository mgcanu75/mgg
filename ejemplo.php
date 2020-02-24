<?php

/**
* Ejemplo.php
* En esta clase se dfine el metodo sumarDosNumeros y una clase llamada Ejemplo.
*
*/

/**
* Sumar dos numeros
*
* Funcion que permite calcular la suma de dos numeros.
*

*/

/**
* Funcion que permite calcular la multiplicacion de tres numeros
* 
* @autor Miguel
*/

function multiplicarTresNumeros ($v1, $v2, $v3)
{
	return $v1*$v2*$v3;
}

class Ejemplo {

	var $a;
	var $b;	
  var $c;

	function multiplicar ()
	{
		return multiplicarTresNumeros($this->a, $this->b, $this->c);
	}

}

