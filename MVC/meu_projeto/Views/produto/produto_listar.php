<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Produtos</h1>
  <a href="index.php?modulo=produto&acao=criar">Novo produto</a>

  <ul>
    <?php foreach ($produto as $p): ?>
      <li>
        <?= htmlspecialchars($p['nome']) ?> -
        R$ <?= number_format($p['preco'], 2, ',', '.') ?>
      </li>
    <?php endforeach; ?>
  </ul>
  
</body>
</html>