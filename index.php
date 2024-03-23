<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portafoli profesional</title>
    <link rel="stylesheet" href="portafolio2.css">
</head>
<body>
    <nav>
        <ul id="menu">
            <li><a href="?PHPjosuei=inicio">Inicio</a></li>
            <li><a href="?PHPjosuei=sobre">Sobre mí</a></li>
            <li><a href="?PHPjosuei=servicios">Servicios</a></li>
            <li><a href="?PHPjosuei=portafolio">Portafolio</a></li>
            <li><a href="?PHPjosuei=contacto">Contacto</a></li>
        </ul>
    </nav>
    <div class="container">
        <section class="info">
            <div class="info-personal">
                <center>
                <img src="img/elguapo.jpeg" alt="" class="foto">
                <span>Joshuar Josue Ortiz Gutierrez</span>
                <p>Ingeniero en Software</p>
            </div>
        </center>
        </section>
        <section class="portada" id="portadaContenido">
        <?php
            $seccioni = $_GET["PHPjosuei"] ?? "inicio";

            switch($seccioni){
                case "inicio":
                    include "PHPjosue/inicio.php";
                    break;
                case "sobre":
                    include "PHPjosue/sobre.php";
                    break;  
                case "servicios":
                    include "PHPjosue/servicios.php";
                    break;
                case "portafolio":
                    include "PHPjosue/portafolio.php";
                    break;
                case "contacto":
                    include "PHPjosue/contacto.php";
                    break;        
                default:
                    "<h1>No existe la seccion</h1>";
            }
        ?>
        </section>
    </div>
</body>
</html>
