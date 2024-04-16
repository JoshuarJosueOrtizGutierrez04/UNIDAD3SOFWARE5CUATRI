<?php   

session_start(); #aki declaro un documento q inicie sesion
$nombre = $_SESSION ["mi_sesion"];
if (isset($nombre)){
    echo "Hola que tal, ". $nombre . "!";
}else{
    echo " No se a creado la sesion"; #echo es para imprimir en pantalla
}


?>