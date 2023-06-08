<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include ('bd.php');

$nombre=$_POST['txtnombre'];
$usuario=$_POST['txtusuario'];
$contraseña=$_POST['txtcontraseña'];

$consulta="INSERT INTO `registros` (`nombre`, `usuario`, `contraseña`) VALUES ('$nombre', '$usuario', '$contraseña');
";


$resultado=mysqli_query($conexion,$consulta) or die ("error de registro");
echo "    registro exitoso";


mysqli_close($conexion);


?>