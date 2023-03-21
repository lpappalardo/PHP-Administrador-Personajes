<?php
session_start();
header("Content-type:image/jpeg");

$imagen_captcha = imagecreate(70, 30);

$fondo = imagecolorallocate($imagen_captcha, 7, 16, 45);
$texto = imagecolorallocate($imagen_captcha, 255, 255, 255);


imagestring($imagen_captcha, 5, 15, 5, $_SESSION['codigo_capcha'], $texto);

imagejpeg($imagen_captcha);