<!DOCTYPE html>
<?php
//variables
$n1=0; $n2=0; $s=0; 
//
if(isset($_POST["btncalcular"])){
$n1 = (double)$_POST["txtn1"];
$n2 = (double)$_POST["txtn2"];
//salida
$s = $n1 + $n2;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="sumar.php" method="post">
    <table width="240" border="2" > 
        <tr>
            <td>calculo de sumas de dos numeros</td>
        </tr>
        <tr>
            <td>numero 1</td>
            <td><input name="txtn1" type="text" id="txtn1" value="<?=$n1?>"></td>
        </tr>
        <tr>
            <td>numero 2</td>
            <td><input  name="txtn2" type="text" id="txtn2" value="<?=$n2?>"></td>
        </tr>
        <tr>
            <td>suma</td>
            <td>
                <input name="texts" type="text" id="txts" value="<?=$s?>">
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input name="btncalcular" type="submit" id="btncalcular" value="calcular">
            </td>
        </tr>
    </table>
    </form>
</body>
</html>