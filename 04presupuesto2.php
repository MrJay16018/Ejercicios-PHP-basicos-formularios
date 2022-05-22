<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Departamentos</title>
</head>
    <body>
        <h2>Departamentos</h2>
        <?php
            $dep= isset($_REQUEST['departamentos'])?$_REQUEST['departamentos']:"";
            if (isset($_REQUEST['departamentos'])) {
                switch($dep) {
                    case 'INFORMÁTICA':
                        echo "INFORMÁTICA= 500€";
                        break;
                    case 'MATEMÁTICAS':
                        echo "MATEMÁTICAS= 300€";
                        break;
                    case 'LENGUA':
                        echo "LENGUA= 300€";
                        break;
                    case 'INGLÉS':
                        echo "INGLÉS= 400€";
                        break;
                    }
            }
        ?>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <select name="departamentos" id="departamentos">
                <option value="INFORMÁTICA">INFORMÁTICA</option>
                <option value="MATEMÁTICAS">MATEMÁTICAS</option>
                <option value="LENGUA">LENGUA</option>
                <option value="INGLÉS">INGLÉS</option>
            </select>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>