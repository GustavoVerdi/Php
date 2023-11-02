<?php
    namespace app\model;

    class endereco{
        private $logradouro;
        private $bairro;
        private $cidade;
        private $Estado;
        private $cep;


    public function setlogradouro($logradouro) {
        $this->logradouro = $logradouro;
    }
    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }
    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }
    public function setestado($estado) {
        $this->Estado = $estado;
    }
    public function setcep($cep) {
        $this->cep = $cep;
    }
    public function getlogradouro() {
        return $this->logradouro;
    }
    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }
    public function getestado() {
        return $this->Estado;
    }
    public function getCep() {
        return $this->cep;
    }
    }
?>