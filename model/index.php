<?php
    require_once "model\pessoa.php";
    //require_once "lib\export.php";

    $pessoa = new \app\model\Pessoa();
    $pessoa->setNome("Gustavo");
    $pessoa->setSobrenome("Verdi");
    $pessoa->setDataNascimento(new DateTime("2002-01-08"));

    $pessoa->gettelefone()->setTipo(1);
    $pessoa->getTelefone()->setNome("Tel Celular");
    $pessoa->getTelefone()->setValor("(47) 99999-9999");

    $pessoa->getEndereco()->setLogradouro("Rua 7 de Novembro");
    $pessoa->getEndereco()->setBairro("Centro");
    $pessoa->getEndereco()->setCidade("Rio do Sul");
    $pessoa->getEndereco()->setEstado("Santa Catarina");
    $pessoa->getEndereco()->setCep("89000-000");

    echo $pessoa->toJson();

?>