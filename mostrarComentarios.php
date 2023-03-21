<?php 
session_start();
if(isset($_SESSION['admin'])){

include("header.php")?>

<?php
        $archivo = fopen('comentarios.txt', 'r');
        echo fread($archivo, 600);

    }else{
        header("Location:index.php");
    }
?>