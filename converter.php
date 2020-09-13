<?php

include 'form.php';
$v = $_POST['valor'];
$op = $_POST['op'];
switch ($op) {
    case 'rq':
        echo 'A raiz quadrada do Valor : "', $v, '" é: "', sqrt($v), '"';
        break;
    case 'oc':
        echo 'O Valor: "', $v, '" Octal para decimal é: ', octdec($v);
        echo '<br/>Veja o video para saber como Converter a Octal para decimal no link a baixo. <br/>'
        . '<a href="https://www.youtube.com/watch?v=xfI1rs0RWw0">Converter Octal para Decimal</a>';
        break;
    case 'dc':
        echo 'O Valor: "', $v, '" Decimal para Octal é: ', decoct($v);

        break;
    case 'dolar':
        
        echo '';
        break;
}




