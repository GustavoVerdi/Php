<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
<form action="main.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    <br>
    <label for="sobrenome">Sobrenome:</label>
    <input type="text" id="sobrenome" name="sobrenome" required>
    <br>
    <label for="cnpj">CPF:</label>
    <input type="number" id="cpf" name="cpf" required>
    <br>
    <label for="endereco">Endereço:</label>
    <input type="text" id="endereco" name="endereco" required>
    <br>
    <label for="bairro">Bairro:</label>
    <input type="text" id="bairro" name="bairro" required>
    <br>
    <label for="cidade">Cidade:</label>
    <input type="text" id="cidade" name="cidade" required>
    <br>
    <label for="uf">UF:</label>
    <input type="text" id="uf" name="uf" required>
    <br>
    <label for="cep">CEP:</label>
    <input type="number" id="cep" name="cep" required>
    <br>
    <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</form>
</body>
</html>
