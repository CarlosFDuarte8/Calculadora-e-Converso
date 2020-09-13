<?php

include 'form.php';
$v1 = $_POST['valor1'];
$v2 = $_POST['valor2'];
$op = $_POST['op'];
switch ($op) {
    case 'soma':
        $r = $v1 + $v2;
        echo 'O resultado da soma do Valor 1: "', $v1, '" e Valor 2: "', $v2, '" é: "', $r, '"';
        break;
    case 'subt' :
        $r = $v1 - $v2;
        echo 'O resultado da subtração do Valor 1: "', $v1, '" e Valor 2: "', $v2, '" é: "', $r, '"';
        break;
    case 'divi':
        $r = $v1 / $v2;
        echo 'O resultado da divisão do Valor 1: "', $v1, '" e Valor 2: "', $v2, '" é: "', $r, '"';
        break;
    case 'mult':
        $r = $v1 * $v2;
        echo 'O resultado da multiplicação do Valor 1: "', $v1, '"e Valor 2: "', $v2,' é: "',$r, '"';
        break;
    case 'rq':
        $r = $v1 + $v2;
        echo 'O resultado da raiz quadrada da soma do Valor 1: "', $v1, '" e Valor 2: "', $v2, '" é: "', sqrt($r), '"';
        break;
}

echo '<fieldset><legend>Resultado</legend>',$r ,'</fieldset>';
// header('location: form.php');
