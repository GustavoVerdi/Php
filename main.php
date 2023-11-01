<?php
require_once "model/pessoa.php";

$pessoa = new \app\model\Pessoa();
$pessoa->setNome("Gustavo");
$pessoa->setSobrenome("Verdi");
$pessoa->setCpf("12345678900"); // Adicione o CPF desejado
$pessoa->setDataNascimento(new DateTime("2002-01-08"));

$telefone = new \app\model\contato(); // Crie uma instância de contato
$telefone->setTipo(1);
$telefone->setNome("Tel Celular");
$telefone->setValor("(47) 99999-9999");
$pessoa->setTelefone($telefone);

$endereco = new \app\model\endereco(); // Crie uma instância de endereco
$endereco->setlogradouro("Rua 7 de Novembro");
$endereco->setBairro("Centro");
$endereco->setCidade("Rio do Sul");
$endereco->setEstado("Santa Catarina");
$endereco->setCep("89000-000");
$pessoa->setEndereco($endereco);
echo $pessoa->toJson();
?>
