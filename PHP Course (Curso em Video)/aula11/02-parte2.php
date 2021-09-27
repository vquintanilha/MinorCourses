<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
    $c = 1;
    while ($c <= 5) {
        $valor = $_GET["v$c"];
        echo "Valor $c: $valor<br/>";
        $c++;
    }
    ?>
    <a href="02-parte1.php" class="botao">Voltar</a>
</div>
</body>
</html>
 