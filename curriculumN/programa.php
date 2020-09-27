<?php
$operando1=$_GET['operando1'];
$operador=$_GET['operador'];

if($operador=="Dolares"){
    $solucion=$operando1/20;
} else if($operador=="Euros"){
    $solucion=$operando1/21.63;
echo "<!DOCTYPE html>
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Conversion de Pesos</title>
</head>
<body>;
if ($operador=="Dolares"){
echo"<h1>Dolares: ".$solucion."</h1>";
}else if($operador=="Euros"){
    echo"<h1>Euros: ".$solucion."</h1>";
}
</body>;
?>
