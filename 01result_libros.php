<?php
    $txt= isset($_REQUEST['txt'])?$_REQUEST['txt']:"";
    $buscar= isset($_REQUEST['buscar'])?$_REQUEST['buscar']:"";
    $libros= isset($_REQUEST['libros'])?$_REQUEST['libros']:"";
        
        echo "<h2>Texto: $txt</h2>";
        echo "<h2>Búsqueda: $buscar</h2>";
        echo "<h2>Genéro: $libros</h2>";
?>