<?php
//Recibe los valores
$mililitros = strip_tags($_POST['mililitros']);
$metros = strip_tags($_POST['metros']);
$gramos = strip_tags($_POST['gramos']);
$kilometros = strip_tags($_POST['kilometros']);

echo "<h1>Resultados:</h1>";

echo $mililitros, "Mililitros a Onzas=", $mililitros*0.033814, " \n";
echo "<br>";
echo $metros, "Metros a Yardas=", $metros*1.09361, " \n";
echo "<br>";
echo $gramos, "Gramos a libras=", $gramos*0.00220462, " \n";
echo "<br>";
echo $kilometros, "Kilometros a millas=", $kilometros*0.621371, " \n";
echo "<br>";

?>
<html>
<br />
<a href="/index.php">Inicio</a>
<br />
<a href="/Formulario.php">Convertidor de unidades</a>
</html>
