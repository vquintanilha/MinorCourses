<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
    <?php
        $v = array("A", "J", "M", "X", "K");
        print_r($v);
        sort($v); // Ordenação de Vetores

        /* rsort(); -- Ordem Reversa
           asort() -- Ordenação Associativa
           arsort() -- Ordem Associativa Reversa
           ksort() -- Ordenação dos Índices/Chaves
           krsort() -- Ordem Reversa por Chaves */

        print_r($v);
    ?>
    </pre>
</div>
</body>
</html>