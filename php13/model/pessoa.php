<?php
namespace app\model;
require_once "endereco.php";
require_once "contato.php";

class Pessoa {
    private $nome;
    private $sobrenome;
    private $cpf;
    private $DataNascimento;
    private $telefone;
    private $endereco;
    private $tipo;

    public function __construct() {
        $this->InicializaClasse();
    }
    private function InicializaClasse() {
        $this->tipo = 1;
        $this->telefone = new \app\model\contato;
        $this->endereco = new \app\model\endereco;
    }

    public function toJson() {
        return json_encode(get_object_vars($this));
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setSobrenome($sobrenome) {
        $this->sobrenome = $sobrenome;
    }

    public function getSobrenome() {
        return $this->sobrenome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function setDataNascimento($DataNascimento) {
        $this->DataNascimento = $DataNascimento;
    }

    public function getDataNascimento() {
        return $this->DataNascimento;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
}
?>
