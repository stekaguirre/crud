<?php

include ('bd.php');



?>

<!--

CARPETA EN HTDOCS ....... PRUEBA
BASE DE DATOS............DATOS
TABLA DE LA BASE DE DATOS..REGISTROS
ID
NOMBRE
USUARIO
CONTRASEÑA
-->







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles.css/style.css">
</head>
<body>
    <header>
        <div>
            <nav>
                <a href="index.php">home</a>
                <a href="mostrar.php">mostrar</a>
            </nav>
        </div>
    </header>
    <main>

        <section class="sectionregistro">
            <form class="formulario" action="registro.php" method="POST">
                
                    <div class="tituloform">
                        <h2>REGISTRARSE</h2>
                    </div>
                    
                    <div class="nombrediv">
                        <label for="formnombre" class="labelnombre" >nombre completo</label>
                        <input type="text" class="inputnombre" name="txtnombre"placeholder="&#129333;nombre">
                    </div>
                    <div class="usuariodiv">
                        <label for="formusuario" class="labelusuario" >elige tu usuario </label>
                        <input type="text" class="inputusuario" name="txtusuario"placeholder="&#128273;usuario">
                    </div>
                    <div class="contraseñadiv">
                        <label for="formcontraseña" class="labelcontraseña" >contraseña    </label>
                        <input type="number" class="inputcontraseña" name="txtcontraseña" placeholder="&#128274;contraseña">
                    </div>
                    <button class="buttonform" type="submit" >enviar</button>
                
            </form>
            
        </section>
        
        <section class="sectionlogin">
            <form class="formulariologin" action="validar.php" method="post">
                
                    <div class="tituloformlogin">
                        <h2>INGRESAR</h2>
                    </div>
                    
                    <div class="usuariodivlogin">
                        <input type="text" class="inputusuariologin" name="txtusuario" placeholder="&#128273;  usuario">
                    </div>
                    <div class="contraseñadivlogin">
                        <input type="number" class="inputcontraseñalogin" name="txtcontraseña" placeholder="&#128274;  contraseña">
                    </div>
                    <div class="divbutton">
                         <button class="buttonformlogin" name="btnlogin" type="submit" >enviar</button>
                    </div>
                    
                
            </form>
            
        </section>

    </main>
    <footer>y este es el footer</footer>
    
</body>
</html>

