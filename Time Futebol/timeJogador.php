<?php 
    class time {
        private $nome;
        private $anoFundacao;
        private $jogadores = array();

        public function getJogadores() {
            return $this->jogadores;
        }
        public function addJogadores($oJogador) {
            $array_push($this->jogadores, $oJogador);
        }
        public function getNome() {
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome; 
        }
    }

    class jogador {
        private $nome;
        private $posicao;
        
        public function getNome(){
            return $this->nome;
        }    
        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function getPosicao() {
            return $this->posicao;
        }
        public function setPosicao($posicao) {
            $this->posicao = $posicao;
        }
    }

    $brasil = new time();
    $brasil->setNome ("Brasil Futsal");

    $jogador = new jogador();
    $jogador->setNome ("João"); 
    $jogador->setPosicao ("Goleiroo");

    $jogador = new jogador();
    $jogador->setNome ("gabriel"); 
    $jogador->setPosicao ("Atacante");

?>