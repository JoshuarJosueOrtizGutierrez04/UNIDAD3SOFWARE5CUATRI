<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi galería de imágenes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        h1 {
            margin-top: 30px;
            color: #343a40;
        }

        .gallery {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 30px;
        }

        .gallery img {
            max-width: 250px;
            height: auto;
            margin: 10px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>

    <h1>Mi galería de imágenes</h1>

    <div class="gallery">
        <?php
        $ruta_imagenes = "archivos/";
        $imagenes = opendir($ruta_imagenes);
        while($imagen = readdir($imagenes)){
            if(is_file($ruta_imagenes . $imagen) && getimagesize($ruta_imagenes . $imagen)){
                echo "<img src='$ruta_imagenes$imagen'>";
            } 
        }
        closedir($imagenes);
        ?>
    </div>

</body>
</html>
