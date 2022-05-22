<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Imagen</title>
</head>
    <body>
        <form action="05subir_imagen.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="80000" />
            <input type="file" name="fichero" />
            <br><br>Título de la imagen: <input type="textbox" name="texto" />
            <input type="submit" name="subir" value="Guardar cambios" />
        </form>
    
    </body>
</html>