<?php

include ('bd.php');

$id=$_POST['txtid'];



mysqli_query($conexion,"DELETE FROM registros WHERE id='$id'") or die ("error al eliminar");
echo " eliminado correctamente";


mysqli_close($conexion);

header("location:mostrar.php");


?>