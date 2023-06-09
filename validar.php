<?php
$usuario=$_POST['txtusuario'];
$contraseña=$_POST['txtcontraseña'];

session_start();

$_SESSION['txtusuario']=$usuario;

include('bd.php');

$consulta="SELECT FROM 'registros' WHERE usuario='$usuario' and contraseña='$contraseña'";

$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if ($filas){
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");
    ?>
    <h1>error en la autentificacion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);