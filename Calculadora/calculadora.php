<?php 
    class calculadora {
        public function soma($numero1, $numero2){
            return $numero1 + $numero2;
        }
        public function subtrai($numero1, $numero2){
            return $numero1 - $numero2;
        }
        public function divide($numero1, $numero2){
            return $numero1 / $numero2;
        }
        public function multiplica($numero1, $numero2){
            return $numero1 * $numero2;
        }
    }
        $calc = new calculadora();
        echo $calc->soma(1,2);
        echo $calc->subtrai(5,1);
        echo $calc->divide(10,2);
        echo $calc->multiplica(5,3);


?>