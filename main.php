<?php 
// main.php

require_once "Pessoa.php";


$nome = $_POST['nome']; 
$sobrenome = $_POST['sobrenome']; 
$cnpj = $_POST['cnpj']; 
$endereco = $_POST['endereco']; 
$bairro = $_POST['bairro']; 
$cidade = $_POST['cidade']; 
$uf = $_POST['uf']; 
$cep = $_POST['cep']; 

$oPessoa = new Pessoa();
$oPessoa->setNome($nome);
$oPessoa->setSobrenome($sobrenome);
$oPessoa->setCpf($cpf);
$oPessoa->setEndereco($endereco);
$oPessoa->setBairro($bairro);
$oPessoa->setCidade($cidade);
$oPessoa->setUf($uf);
$oPessoa->setCep($cep);

echo "Nome Completo: " . $oPessoa->getNome() . " " . $oPessoa->getSobrenome() . "\n <br>";
echo "CNPJ: " . $oPessoa->getCpf() . "\n <br>";  
echo "Endereço: " . $oPessoa->getEndereco() . "\n <br>";
echo "Bairro: " . $oPessoa->getBairro() . "\n <br>";
echo "Cidade: " . $oPessoa->getCidade() . "\n <br>";
echo "UF: " . $oPessoa->getUf() . "\n <br>";
echo "CEP: " . $oPessoa->getCep() . "\n <br>";
?>
