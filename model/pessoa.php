<?php 
    namespace app\model;

    require_once "endereco.php";
    require_once "contato.php";
class Pessoa {
    private $nome;
    private $sobrenome;
    private $cpf;
    private $telefone;


    public function __construct() {
        $this->InicializaClasse();
    }
    public function getInicializaClasse() {
        $this->tipo = 1;
    }
    public function toJson() {
        return json_encode(get_object_vars($this));
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
    public function settelefone($telefone) {
        $this->cpf = $telefone;
    }
   
    public function gettelefone() {
        return $this->nome;
    }
}
?>