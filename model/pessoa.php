<?php 

class Pessoa {
    private $nome;
    private $sobrenome;
    private $cpf;
    private $endereco;
    private $bairro;
    private $cidade;
    private $uf;
    private $cep;

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
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    public function setUf($uf) {
        $this->uf = $uf;
    }
    public function setcep($cep) {
        $this->cep = $cep;
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
    public function getEndereco() {
        return $this->endereco;
    }
    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }
    public function getuf() {
        return $this->uf;
    }
    public function getCep() {
        return $this->cep;
    }
}
?>