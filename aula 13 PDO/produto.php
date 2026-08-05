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
    <form action="insertProd.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Insert Produto</legend>
        <h3>Produto</h3>
        <label>
            Nome: <input type="text" name=":nome">
        </label>
        <label>
            Categoria: <input type="text" name=":categoria">
        </label>
        <label>
            Descrição: <input type="text" name=":descricao">
        </label>
        <label>
            Preço <input type="text" name=":preco">
        </label>
        <label>
            Quantidade: <input type="text" name=":qtd">
        </label>
        <label>
            Código de barras: <input type="text" name=":codB">
        </label>
        <input type="submit" value="Enviar">
        </fieldset>
    </form>
</body>
</html>