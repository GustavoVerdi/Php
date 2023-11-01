<?php
    namespace app\model;

    class endereco{
        private $logradouro;
        private $bairro;
        private $cidade;
        private $uf;
        private $cep;
    }

    public function setlogradouro($logradouro) {
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
?>