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

        <table class="tablemostrar">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">CONTRASEÑA</th>
                    <th scope="col">ACIONES</th>
                </tr>
            </thead>
            <tbody>

            <?php
            $sql="SELECT * FROM registros";
            $result=mysqli_query($conexion , $sql);
            while ($mostrar=mysqli_fetch_array($result)){

            
            ?>


                <tr>
                    <td><?php echo $mostrar['id']?></td>
                    <td><?php echo $mostrar['nombre']?></td>
                    <td><?php echo $mostrar['usuario']?></td>
                    <td><?php echo $mostrar['contraseña']?></td>

                    
                    

                   
                    <td>
                                <!--editar-->
                        <a href="editar.php?ID=<?php echo $mostrar['id']?>">editar</a>        

                                <!--eliminar-->
                        <form action="eliminar.php" method="post">
                            <input type="hidden" value="<?php echo $mostrar ['id']?>" name="txtid"readonly>
                            <td><input class="btneliminar" type="submit" value="eliminar" name="botoneliminar"></td>
                        </form>
                    </td> 

                </tr>

                <?php
            }   

                ?>
            </tbody>
        </table>
            
        </section>
    </main>
</body>
</html>