<?php 

class Pessoa {
    private $nome;
    private $sobrenome;
    private $cpf;


    public function __construct() {
        $this->InicializaClasse();
    }
    public function getInicializaClasse() {
        $this->tipo = 1;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }
    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }
   
    public function getNome() {
        return $this->nome;
    }
    public function getSobrenome() {
        return $this->sobrenome;
    }
    public function getCpf() {
        return $this->cpf;
    }
}
?>