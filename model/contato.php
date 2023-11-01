<?php
    namespace app\model;

    class contato {
       private $tipo;
       private $nome;
       private $valor;

    public function settipo($tipo) {
        $this->tipo = $tipo;
    }
    public function gettipo() {
        return $this->tipo;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setvalor($valor) {
        $this->valor = $valor;
    }
    public function getvalor() {
        return $this->valor;
    }
    }



?>