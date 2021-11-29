<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cliente</title>
</head>
<body>
    <h1> Cadastro de Clientes </h1>
    <p> Sistema para cadastro de clientes.</p>

    <form action="salvarcliente.php" method="get">
    <label for = "nome">Nome do cliente </label>
    <input type="text" name = "nome" id="nome"> <br>
    <label for = "CPF">CPF do cliente </label>
    <input type="text" name = " CPF" id="CPF"> <br>
    <label for = "fone"> Telefone do cliente </label>
    <input type="text" name = "fone" id="fone"> <br>
    <label for = "Email"> Email do cliente </label>
    <input type="text" name = "Email" id="Email">  <br>

    <input type = "submit" name= "salvar" value = "Salvar Cliente">
    </form>
</body>
</html>
