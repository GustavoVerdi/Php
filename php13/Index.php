<?php
    require_once "model\\pessoa.php";

    $pessoa = new \app\model\pessoa();
    $pessoa->setNome("Gustavo");
    $pessoa->setSobreNome("Verdi");
    $pessoa->setDataNascimento(new DateTime("2002-01-08"));

    $pessoa->getTelefone()->setTipo(1);
    $pessoa->getTelefone()->setNome("Tel Celular");
    $pessoa->getTelefone()->setValor("(47) 99999-0000");

    $pessoa->getEndereco()->setLogradouro("Estrada Blumenau");
    $pessoa->getEndereco()->setBairro("Brehmer");
    $pessoa->getEndereco()->setCidade("Rio do Sul");
    $pessoa->getEndereco()->setCEP("89160-000");
    $pessoa->getEndereco()->setEstado("SC");

    echo $pessoa->toJson();
?>