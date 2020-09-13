<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
         $num1 = $_POST['num1'];
         $num2 = $_POST['num2'];
         $calc = $_POST['calcular'];
         
         if( !empty($calc)){
         
         $res = $num1 + $num2;
         
         echo $res;
         }
        ?>
    </body>
</html>
