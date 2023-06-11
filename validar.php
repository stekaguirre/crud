<?php

include ('bd.php');

$usuario=$_POST['txtusuario'];
$contraseña=$_POST['txtcontraseña'];


if (isset($_POST ["btnlogin"]))

$query =mysqli_query($conexion,"SELECT * FROM registros WHERE usuario='$usuario' AND contraseña='$contraseña'");
$nr =mysqli_num_rows($query);

if ($nr==1)
{
    echo "<script> alert ('bienvenido $usuario');</script>"; 
    header("location:home.php");
}else
{
    echo "<script> alert ('usuario no existe');</script>"; 
    header("location:index.php");
}

?>