<?php 
session_start();
if(isset($_SESSION['admin'])){

include("header.php");

$nro1 = rand(0,9);
$nro2 = rand(0,9);
$nro3 = rand(0,9);
$letra = array('a', 'h', 'g', 'l', 'd', 'm', 'k');
$simbolo = array('%', '$', '/', '@', '#');
$mezcla_letra = rand(0,6);
$mezcla_simbolo = rand(0,4);

$_SESSION['codigo_capcha'] = $nro1 . $letra[$mezcla_letra] . $nro2 . $simbolo[$mezcla_simbolo] . $nro3;
?>

    <section>
        <h2 class="tituloForm">Carga personaje</h2>
        <form action="cargar_personaje.php" method="post" enctype="multipart/form-data" class="formulario">
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
                    <label for="imagen" class="labelForm">Imagen</label>
                    <input class="inputForm" id="imagen" type="file" name="imagen" placeholder="Imagen">
                </div>
                <div class="elemForm">
                    <label for="descripcion" class="labelForm">Descripcion</label>
                    <textarea class="textareaForm" id="descripcion" name="descripcion" placeholder="Descripcion"></textarea>
                </div>

                <div class="elemForm">
                    <label for="estado" class="labelForm">Estado</label>
                    <select name="estado" class="estado">
                        <option value="proceso">En proceso</option>
                        <option value="finalizado">Finalizado</option>
                    </select>
                </div>

                <div class="elemForm">
                    <label for="captcha" class="labelForm">Capcha</label> 
                    <img src="captcha.php" alt="Captcha" class="captcha"> 
                    <input class="inputForm" id="captcha" type="text" name="captcha" placeholder="Ingresa Captcha">
                </div>
                <div>
                    <input class="inputForm enviar" type="submit" value="Cargar Personaje">
                </div>
            </div>
        </form>
    </section>

    <?php

    if (isset ($_GET['error_codigo'])){
        echo "<h3 class='confirmacion'>Codigo de verificación incorrecto</h3>";
    }

    if (isset ($_GET['ok'])){
        echo "<h3 class='confirmacion'>Personaje cargado con éxito</h3>";
    }
    if (isset ($_GET['error'])){
        echo "<h3 class='confirmacion'>Imagen incorrecta. Verifique formato y tamaño (max 200kb)</h3>";
    }

    }else{
        header("Location:index.php");
    }

    ?>
</body>
</html>