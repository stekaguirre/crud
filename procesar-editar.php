<?php

include ('bd.php');


$id=$_POST['txtid'];
$nombre=$_POST['txtnombre'];
$usuario=$_POST['txtusuario'];
$contraseña=$_POST['txtcontraseña'];

mysqli_query($conexion,
"UPDATE `registros` SET 
`nombre` = '$nombre',
`usuario` = '$usuario',
`contraseña` = '$contraseña'
WHERE `id` = '$id'");
mysqli_close($conexion);
header("location:mostrar.php");
?>