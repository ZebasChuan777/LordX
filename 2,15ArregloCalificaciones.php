<!DOCTYPE html>
<html>
<head>
	<title>Arreglo de Calificaciones</title>
</head>
<?php
$alumnos = array("Juan" => "10", "Pedro" => "9", "Antonio" => "7", "Carlos" => "6", "Luis"=> "8");
foreach ($alumnos as $alumno => $calificacion) {
	echo "La calificacion de $alumno es de: $calificacion";
	echo "<br>";
}
echo "<p>";
arsort($alumnos);
foreach ($alumnos as $alumno => $calificacion) {
	echo "La calificacion de $alumno es de: $calificacion";
	echo "<br>";
}

?>
</body>
</html>