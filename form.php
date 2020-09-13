<!DOCTYPE html>
<!--
Carlos F. Duarte 
-->
<?php
//include 'calc.php';
//$r = $_GET['calc.php'];
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="calc" action="calc.php" method="POST">
            <fieldset><legend>Calculadora</legend>
                <label>Valor 1: </label>
                <input type="text" id="valor1" name="valor1" value=""/><br/>
                <label>Valor 2: </label>
                <input type="text" id="valor2" name="valor2" value=""/><br/>
                <table>
                    <tr>
                        <td>||<input type="radio" name="op" value="soma" id="op"/> Soma  </td>
                        <td>||<input type="radio" name="op" value="subt" id="op"/> Subtrair</td>
                    </tr>
                    <tr>
                        <td>||<input type="radio" name="op" value="divi" id="op"/> Dividir </td>
                        <td>||<input type="radio" name="op" value="mult" id="op"/> Multiplicar </td>
                    </tr>
                    <tr>
                        <td>||<input type="radio" name="op" value="rq" id="op"/> Raiz Quadrada </td>
                    </tr>
                </table>
                <br/>
                <input type="submit" value="Calcular"/>
                <br/><br/>


            </fieldset>
        </form>
        <form name="calc" action="converter.php" method="POST">
            <fieldset><legend>Converter</legend>
                <label>Valor: </label>
                <input type="text" id="valor" name="valor" value=""/><br/>
<table>
                    <tr>
                        <td>||<input type="radio" name="op" value="dc" id="op"/> Decimal p/ Octal  </td>
                        <td>||<input type="radio" name="op" value="oc" id="op"/> Octal p/ Decimal</td>
                    </tr>
                    <tr>
                        <td>||<input type="submit" name="op" value="dc" id="op"> Octal </td>
                        <td>||<input type="submit" name="op" value="oc" id="op"/> Decimal </td>
                    </tr>
                    <tr>
                        <td>||<input type="radio" name="op" value="rq" id="op"/> Raiz Quadrada </td>
                    </tr>
                </table>
                <br/><br/>
                <input type="submit" value="Converter"/>
                <br/><br/>
            </fieldset>
        </form>
        <br/>
        <button ><a href="form.php">Limpar</a></button>
        <br/><br/>
        <?php
        // put your code here
        // include 'calc.php';
        ?>
    </body>
</html>
