<?php 
session_start();
if(isset($_SESSION['admin'])){

include("header.php")?>

<section>
    <h2 class="tituloForm">Comentar</h2>
    <form action="comentariosAlmacenados.php" method="post" class="formulario">
        <div class="contenedor">
            <div class="elemForm">
                <label for="nombre" class="labelForm">Nombre</label>
                <input class="inputForm" id="nombre" type="text" name="nombre" placeholder="Nombre">
            </div>
            <div class="elemForm">
                <label for="apellido" class="labelForm">Apellido</label>
                <input class="inputForm" id="apellido" type="text" name="apellido" placeholder="Apellido">
            </div>
            <div class="elemForm">
                <label for="mensaje" class="labelForm">Mensaje</label>
                <textarea class="textareaForm" id="mensaje" name="mensaje" placeholder="Deje su mensaje aquí"></textarea>
            </div>
            <div>
                <input class="inputForm enviar" type="submit" value="Enviar Comentario">
            </div>
        </div>
    </form>
</section>

<?php

    }else{
        header("Location:index.php");
    }

?>