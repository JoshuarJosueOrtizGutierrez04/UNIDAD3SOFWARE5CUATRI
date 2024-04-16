<?php
if (isset($_COOKIE["mi_cookie"])){
    echo "Hola,  ". $_COOKIE ["mi_cookie"]; #si existe sale esto

}else {
    echo "No se a creado la cookie"; #si no existe , sale esto
}


?>