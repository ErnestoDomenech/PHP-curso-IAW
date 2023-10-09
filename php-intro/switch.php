<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h2>Switch</h2>

    <?php 
        $resultado = 'F';

        //El bloque switch evalua el valor de la variable con cada una de las opciones del bloque
        //Añadimos siempre un bloque default como última acción en caso no encontrar valores coincidentes
        //break determina que deje de seguir evaluando
        switch($resultado)
        {
            case 'A':
                echo '<h3 style="color:green">Prueba superada de forma fantástica</h3>';
                break;
            case 'B':
                echo '<h3 style="color:blue">Prueba superada al límite</h3>';
                break;
            default:
                //podemos anidar condicionales if - elseif -else dentro del switch
                echo '<h3 style="color:red">Prueba no superada</h3>';
                if($resultado =='C')
                {
                    echo '<h3>Puedes volver a realizar la prueba pulsando <a href="index.php">Aquí</a></h3>';
                }
                else
                {
                    echo '<h3>No es posible volver a realizar la pueba en este momento</h3>';
                }
                break;
        }
    ?>
</body>
</html>