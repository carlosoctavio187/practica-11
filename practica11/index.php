<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 11 - variables </title>
</head>
<body bgcolor="gray"> 
<h1>VARIABLES</h1>
<?php
$nombre='Nombre del alumno';
$edad=21; //escribe tu edad
$beca=3500.50;
$estatus=true;
echo "Tipos de variables <br>";
echo $nombre.'<br/>';
echo $edad.'<br/>';
echo $beca.'<br/>';
echo $estatus.'<br/>';
echo $nombre.'tiene';
echo $edad.'años de edad y gana';
echo $beca.'<br/>';

?>
<h1>operadores aritmeticos</h1>
<?php
$numero1=10;
$numero2=5;
$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplica=$numero1*$numero2;
$division=$numero1/$numero2;
echo 'La suma es='.$suma.'<br/>';
echo 'La suma es='.($numero1+$numero2).'<br/>';
echo 'La resta es='.$resta.'<br/>';
echo 'La multiplicacion es='.$multiplica.'<br/>';
echo 'La division es='.$division.'<br/>';
echo 'incremento de suma'.$suma++.'<br/>';
echo 'decremento de suma'.$suma--.'<br/>';
echo 'residuo es='.$numero1%$numero2;
?>


</body>
</html>