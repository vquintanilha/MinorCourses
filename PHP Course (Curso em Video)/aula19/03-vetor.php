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
        array_unsifht($v, 7); // adiciona elemento no começo do array
        print_r($v);
        array_shift($v); // exclui o primeiro elemento do array
    ?>
    </pre>
</div>
</body>
</html>