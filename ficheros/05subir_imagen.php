<?php
if (isset($_POST["subir"])) {
   $archivo= $_FILES["fichero"]["name"];
   $txt= $_REQUEST["texto"];
   if (isset($archivo) && $archivo != "") {
      $tipo= $_FILES["fichero"]["type"];
      $tamaño= $_FILES["fichero"]["size"];
      $temp= $_FILES["fichero"]["tmp_name"];

     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamaño < 2000000))) {
        echo "No es posible subir este tipo de archivo, tiene que ser gif, jpg, jpeg o png. Y con un tamaño máximo de 200kb";
      }
     else {
        if (move_uploaded_file($temp, "imgs/".$archivo)) {
            chmod("imgs/" .$archivo, 0777);
            echo "$txt";
            echo '<p><img src="imgs/'.$archivo.'"></p>';
        }
        else {
           echo "Ha ocurrido algún error. El fichero no ha podido guardarse.";
         }
      }
   }
}
?>
