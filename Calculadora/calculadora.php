<?php 

class calculadora {
    public function soma($numero1, $numero2){
        return $numero1 + $numero2;
    }
    public function subtracao($numero1, $numero2){
        return $numero1 - $numero2;
    }
    public function divisao($numero1, $numero2){
        return $numero1 / $numero2;
    }
    public function multiplicacao($numero1, $numero2){
        return $numero1 * $numero2;
    }
}
    $calc = new calculadora();
    echo $calc->calculadora(1,2);

?>