<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Premier - For loop</title>
</head>
<body>
    <h1>For loops</h1>
    
    <?php 
    //el bucle for permite repetir una acción un número concreto de veces
    //para ello definimos un iterador que permite alcanzar la condición de finalización del bucle

    //estructura básica. Inicia en el valor de iterador 0 hasta que alcanza 10.
    for($i =0; $i <10; $i++){
        echo '<p>Hola caracola</p>';
    }

    //puedes también mostrar el valor de variables dentro del bucle
    for($i = 0; $i <10; $i++){
        echo "<p>número de iteración: $i </p>";
    }
    
    ?>
</body>
</html>