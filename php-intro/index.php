<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer uso php en la web</title>
</head>
<body>
    <ul>
        <li><a href="ifelse.php">Condional if else</a></li>
        <li><a href="switch.php">Switch</a></li>
        <li><a href="forloop.php">For loop</a></li>
        <li><a href="whileloop.php">While loop</a></li>
        <li><a href="arrays.php">Arrays</a></li>
        <li><a href="strings.php">Strings</a></li>
        <li><a href="datetime.php">Date time</a></li>
        <li><a href="functions.php">funciones</a></li>
    </ul>

    <!--Uso de etiquetas html -->
    <h1>Primer uso de PHP en la web</h1>

    <?php //<?php inicia el bloque de código PHP
        //muestra texto en la web
        echo 'Hola Caracola';
        
        //Puedes añadir etiquetas html como texto
        echo '<br>';
        echo 'Primera web en PHP';
        echo '<br>';
    ?>

    <?php //puedes añadir todos los bloques que consideres
    
        //declaración de varibles siempre con $ delante
        $nombre = 'Ernesto';
        $edad = 49;

        //echo resultado variable
        echo $nombre;

        //echo entre etiquetas html y concatenación
        echo '<h2>Mi nombre es: '. $nombre . '</h2>';

        //echo usando comillas dobles e interpolación
        echo "<h2>Mi edad es: $edad </h2>";
    ?>
</body>
</html>


