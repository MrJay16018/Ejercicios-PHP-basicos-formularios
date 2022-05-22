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