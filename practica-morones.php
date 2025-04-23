<?php
/**
* Script para la tarea 05 DAW documentación código fuente PHP
*Añado nueva linea para genera un cambio y subirlo a github
*@version 1.0
*@author Rafael Morones Burgos
*@package tarea 05
*@since 2025
*/

/**
*Cálculo del producto de dos números enteros
*
*Esta función recibe dos números enteros y devuelve el producto
*
*@param int $num1 El primer número entero.
*@param int $num2 El segundo número entero.
*@return int El producto de los dos números enteros
*/

function multiplicar($num1, $num2 ){
    return $num1*$num2;
}

/**
* Cálculo de la suma de dos números enteros
*
* Esta función recibe dos números enteros y devuelve la suma
*
* @param int $num1 El primer número entero.
* @param int $num2 El segundo número entero.
* @return int La suma de los dos números enteros
* @internal Comentario solo para desarrolladores. Esta función es de uso interno para la *operación de suma. Fuera de aquí no se recomienda su uso
*/
function sumar($num1, $num2){
    return $num1 + $num2;
}
?>
