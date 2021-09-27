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
        array_push($v, 7); // adiciona elemento no final do array
        print_r($v);
        array_pop($v); // exclui o último elemento do array
    ?>
    </pre>
</div>
</body>
</html>
 