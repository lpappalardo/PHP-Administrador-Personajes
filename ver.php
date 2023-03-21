<?php 
session_start();
if(isset($_SESSION['admin'])){

include("header.php")?>

<section>
    <?php include("conexion.php");
    $consulta_db = mysqli_query($conexion_db, "SELECT * 
    FROM personajes WHERE estado = 'proceso'");

    while ($mostrar_datos = mysqli_fetch_assoc($consulta_db)) {
    ?>
        <div class="personaje">
            <h3><?php echo $mostrar_datos['nombre'] . "
            " . $mostrar_datos['apellido']; ?></h3>

            <img src="imagenes/<?php echo $mostrar_datos
            ['imagen'] ?>" alt="<?php echo $mostrar_datos
            ['nombre']; ?>">
            <p>
                <?php echo $mostrar_datos
                ['descripcion']; ?>
            </p>
            <h3>Estado: <?php echo $mostrar_datos['estado'] ?></h3>

            <a class="btn" href="editar_estado.php?id=<?php echo 
            $mostrar_datos['id']; ?>">Finalizar</a>

            <a class="btn" href="eliminar.php?id=<?php echo 
            $mostrar_datos['id']; ?>">Eliminar</a>
    
        </div>
    <?php
    }
    ?>
</section>

<?php

}else{
    header("Location:index.php");
}

?>