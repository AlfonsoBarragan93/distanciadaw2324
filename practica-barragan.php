<?php
/**
 * Calcula la suma de dos números.
 *
 * @param int $a El primer número a sumar.
 * @param int $b El segundo número a sumar.
 * @return int La suma de ambos números.
 * @author Alfonso Barragan Moreno
 * @version 1.0
 * @internal Solo para desarrolladores: esta función es parte de un tutorial.
 */
function sumar($a, $b) {
    return $a + $b;
}

/**
 * Calcula el factorial de un número entero no negativo.
 *
 * @param int $n El número para calcular el factorial.
 * @return int El factorial del número proporcionado.
 * @author Alfonso Barragan Moreno
 * @version 1.0
 */
function factorial($n) {
    if ($n < 0) {
        throw new InvalidArgumentException("El número debe ser no negativo.");
    }
    if ($n == 0) {
        return 1;
    }
    return $n * factorial($n - 1);
}
?>
