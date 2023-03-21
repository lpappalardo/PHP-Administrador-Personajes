<?php include("header.php")?>

<?php
    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $texto = "<h3 class='comentario'> Nombre: ". $_POST['nombre'] ." Apellido: ". $_POST['apellido'] ." Mensaje: ". 
        $_POST['mensaje'] ." Fecha y Hora: ".date("l jS \of F Y h:i:s A")."</h3>";

    $archivo = fopen('comentarios.txt', 'a');
    fputs($archivo, $texto);

    echo "<p class='confirmacion'>Comentario guardado</p>"
?>