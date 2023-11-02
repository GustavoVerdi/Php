<?php

    class calculadora {
    
        public function ($valor1, $valor2) {
            return $valor1 + $valor2;;
        }


        
    }

    $calc = new calculadora();
    echo $calc->calculadora(1,2);

?>