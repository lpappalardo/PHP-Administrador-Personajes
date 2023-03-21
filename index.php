<?php include("header.php");?>

    <section>
        <h2 class="tituloForm">Ingreso</h2>
        <form action="validar.php" method="post" class="formulario">
            <div class="contenedor">
                <div class="elemForm">
                    <label for="usuario" class="labelForm">Usuario</label>
                    <input class="inputForm" id="usuario" type="text" name="usuario" required placeholder="Usuario">
                </div>
                <div class="elemForm">
                    <label for="clave" class="labelForm">Clave</label>
                    <input class="inputForm" id="clave" type="password" name="clave" required placeholder="Clave">
                </div>
                <div>
                    <input class="inputForm enviar" type="submit" value="Ingresar">
                </div>
            </div>
        </form>
    </section>

    <?php
    if (isset ($_GET['error'])){
        echo "<h3 class='confirmacion'>Datos incorrectos</h3>";
    }
    ?>
</body>
</html>