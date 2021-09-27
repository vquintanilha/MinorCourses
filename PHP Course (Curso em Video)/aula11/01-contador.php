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
        while ($c <= 15) {
            echo $c . "<br/>";
            $c++;
        }
        echo "<br/>";
        $i = 15;
        while ($i >= 1) {
            echo $i . "<br/>";
            $i--;
        }
        echo "<br/>";
        $j = 10;
        while ($j >= 0) {
        echo $j . "<br/>";
        $j -= 2;
    }
    ?>
</div>
</body>
</html>
 