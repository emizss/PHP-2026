<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
    <br>
    <br>
    <form action="insertCliente.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Insert Cliente</legend>
        <h3>Cliente</h3>
        <label>
            Nome: <input type="text" name=":nome">
        </label>
        <label>
            CPF: <input type="text" name=":cpf">
        </label>
        <label>
            Celular: <input type="text" name=":celular">
        </label>
        <label>
            Data de nascimento: <input type="date" name=":dataNasc">
        </label>
        <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</html>