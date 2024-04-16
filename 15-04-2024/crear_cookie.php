<?php
#primero crear variables , nombre, tiempo de expiracion y valor.
$nombre_cookie = "mi_cookie";
$valor_cookie = "Josue ortiz";
$tiempo_cookie = time() + (1*60);
setcookie($nombre_cookie, $valor_cookie, $tiempo_cookie);
if(isset($_COOKIE["mi_cookie"])){
    echo "se creo correctamente";
}else{
    echo "No se puedo crear";
}
?>