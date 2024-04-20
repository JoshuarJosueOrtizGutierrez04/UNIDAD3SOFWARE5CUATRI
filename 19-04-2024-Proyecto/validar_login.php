<?php
session_start();
$usuario = $_POST["user"];
$contraseña = $_POST["pass"];

$usuarios = array(
    "Josue" => "123"
    
);

if(isset($usuarios[$usuario]) && $usuarios[$usuario] == $contraseña){
    $_SESSION["usuario"] = $usuario; // Asignar el nombre de usuario a la sesión
    header("Location: upload.php");
    exit; // Importante: detener la ejecución del script después de redirigir
} else {
    echo "Error: usuario y/o contraseña son incorrectos";
}
?>
