<?php
include ('bd.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <div>
            <nav>
                <a href="index.html">home</a>
                <a href="mostrar.php">mostrar</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="sectionmostrar">

            <div class="titulomostrar">
                <h2>todos los registros</h2>
            </div>

        
            <?php
            $ID=$_GET["ID"];
            $sql="SELECT * FROM registros WHERE id='$ID'";
            $result=mysqli_query($conexion , $sql);
            while ($mostrar=mysqli_fetch_array($result)){

            
            ?>

            <form action="procesar-editar.php" method="$_POST">
                <input type="hidden" value="<?php echo $mostrar ['id']?>" name="txtid">
                <p>nombre</p>
                <input type="text" value="<?php echo $mostrar ['nombre']?>" name="txtnombre">
                <p>usuario</p>
                <input type="text" value="<?php echo $mostrar ['usuario']?>" name="txtusuario">
                <p>contraseña</p>
                <input type="text" value="<?php echo $mostrar ['contraseña']?>" name="txtcontraseña">

            

                <?php
            }   

                ?>
                <input type="submit"value="actualizar">
               </form>  
        </section>
    </main>
</body>
</html>