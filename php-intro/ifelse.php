<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional If Else</title>
</head>
<body>
    <h2>Condional if - else</h2>
    <?php 
        //El bloque condicional evalua el valor de una variable
        //Realiza una acción tras comparar el valor según el resultado

        $resultado = 5;

        //Sintaxis de comparación: ==; ===; <=; >=; < ; >;
        if($resultado >= 5)
        {
            echo '<h3 style="color:green">Prueba superada</h3>';
        }
        else
        {
            echo '<h3 style="color:red">Prueba no superada</h3>';
        }
    
        // if - elseif - else permite hacer varias comparaciones

        $resultado = 'A';

        if($resultado == 'A')
        {
            echo '<h3 style="color:green">Prueba superada de forma fantástica</h3>';
        }
        elseif($resultado == 'B')
        {
            echo '<h3 style="color:blue">Prueba superada al límite</h3>';
        }
        else 
        {
            echo '<h3 style="color:red">Prueba no superada</h3>';
        }
    ?> 
</body>
</html>