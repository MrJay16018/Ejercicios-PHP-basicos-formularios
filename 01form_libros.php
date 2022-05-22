<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario libros</title>
</head>
    <body>
        <h2>Buscador de libros</h2>
        <form method="POST" action="01result_libros.php">
            <label for="txt">Texto de búsqueda: </label> <input type="text" name="txt" id="txt" size="20" placeholder="Escribe..."><br>

            <label for="buscar">Buscar en: </label>
            <input type="radio" name="buscar" value="Título del libro">
                <label for="buscar">Título del libro </label>
            <input type="radio" name="buscar" value="Autor del libro">
                <label for="buscar">Autor del libro </label>
            <input type="radio" name="buscar" value="Editorial">
                <label for="buscar">Editorial </label>

            <br><label for="genero">Tipos de libro: </label>
            <select name="libros" id="libros">
                <option checked>Elige tipo</option>
                <option value="Narrativa">Narrativa</option>
                <option value="Libros de texto">Libros de texto</option>
                <option value="Guías">Guías</option>
                <option value="Mapas">Mapas</option>
            </select>
            <br><input type="submit" name="enviar" value="Enviar"/>
        </form> 
    
    </body>
</html>