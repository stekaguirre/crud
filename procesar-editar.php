<?php

include ('bd.php');


$ID=$_POST['txtid'];
$NOMBRE=$_POST['txtnombre'];
$USUARIO=$_POST['txtusuario'];
$CONTRASEÑA=$_POST['txtcontraseña'];

mysqli_query($conexion,"UPDATE `registros` SET `nombre` = '$NOMBRE',
`usuario` = '$USUARIO', `contraseña` = '$CONTRASEÑA' WHERE `ID` = '$id'");
mysqli_close($conexion);
header("location:mostrar.php");
?>