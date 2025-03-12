<?php
/**
 * Clase para realizar operaciones matemáticas.
 * @package echarteFonseca.DEAW06
 */
class Operaciones {
    /**
     * Suma dos números.
     * @param float $a Primer número.
     * @param float $b Segundo número.
     * @return float Resultado de la suma.
     */
    public function suma($a, $b) {
        return $a + $b;
    }

    /**
     * Resta dos números.
     * @param float $a Primer número.
     * @param float $b Segundo número.
     * @return float Resultado de la resta.
     */
    public function resta($a, $b) {
        return $a - $b;
    }

    /**
     * Multiplica dos números.
     * @param float $a Primer número.
     * @param float $b Segundo número.
     * @return float Resultado de la multiplicación.
     */
    public function multiplicacion($a, $b) {
        return $a * $b;
    }
    
}
?>
