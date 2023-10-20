<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While loop</title>
</head>
<body>
    <h1>while loop</h1>

    <?php
    //Ejecuta un bloque de código mientras una condición sea verdadera
    //Si no hay cambios en la condición, el buble será infinito
    //Una vez cambie la condición, el bucle finaliza

    $variable = 0;
    While($variable < 10){
        echo '<p>Hola caracola</p>';
        $variable ++;
    }

    echo '<p>Estoy fuera de while</p>';
    ?>

    <h2>If como cambio de estado</h2>

    <?php
    //puedes crear condiciones con variables boleanas conbinadas con if
    $variable = TRUE;
    $i = 0;
    while($variable==TRUE){
        echo '<p>Hola caracola</p>';
        $i++;
        if($i >= 10){
            $variable = FALSE;
        }
    }
    echo '<p>Estoy fuera de while</p>';
    
    ?>

    <h2>Do While loop</h2>

    <?php 
    //el funcionamiento es similar a while, con la diferencia que la condición se evalua después de la acción
    //garantiza que se puede ejecutar al menos una vez
    $variable = 0;
    do{
        echo '<p>Hola caracola</p>';
        $variable ++;
    }while($variable < 10);
    echo '<p>Estoy fuera de while</p>';
    ?>
    
</body>
</html>