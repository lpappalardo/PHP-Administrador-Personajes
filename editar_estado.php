<?php
include("conexion.php");

$id_personaje = $_GET['id'];

mysqli_query($conexion_db, "UPDATE personajes SET estado = 'finalizado' WHERE id = $id_personaje");

header("Location:ver.php");

?>