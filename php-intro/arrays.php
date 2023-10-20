<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays</title>
</head>
<body>
    <h1>Arrays</h1>
    <?php
        //Array indexado
        $colores = array("rojo", "verde", "azul");
        echo $colores[0]; // imprime "rojo"
        echo $colores[1]; // imprime "verde"
        echo $colores[2]; // imprime "azul"

        //Array asociativo
        $edades = array("Ana" => 25, "Luis" => 30, "Pedro" => 35);
        echo $edades["Ana"]; // imprime 25
        echo $edades["Luis"]; // imprime 30
        echo $edades["Pedro"]; // imprime 35

        //Array multidimensional
        $matriz = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
          );
          echo $matriz[0][0]; // imprime 1
          echo $matriz[1][1]; // imprime 5
          echo $matriz[2][2]; // imprime 9
    ?>

    <h2>Funcion count()</h2>

    <?php
    
        // Array simple
        $frutas = array("manzana", "naranja", "platano");
        echo count($frutas); // Devuelve 3

        // Array multidimensional asociativo

        //contar elementos
        $animales = array(
        "mamiferos" => array("perro", "gato", "vaca"),
        "reptiles" => array("serpiente", "lagarto", "tortuga")
        );
        echo count($animales); // Devuelve 2
        echo count($animales, 1); // Devuelve 8

         //mostrar un elemento
         $animal = $animales['mamiferos'][1];
         echo "<h3>$animal</h3>";
?>

</body>
</html>