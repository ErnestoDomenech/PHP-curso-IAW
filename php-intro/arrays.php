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
        
        $matriz = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
          
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

        //para recorrer un array podemos usar el bucle for
        
        $longitud = count($frutas);
        $frutas = array("manzana", "naranja", "platano");
        for($i=0; $i<$longitud; $i++){
            echo $frutas[$i]."<br>";
        }
    ?>

    <h2>uso foreach</h2>

    <?php 
    
        // Array numérico
        $numeros = array(1, 2, 3, 4, 5);
        foreach ($numeros as $numero) {
        echo "El número es $numero <br>";
        }

        // Array asociativo
        
        $colores = array("rojo" => "#FF0000", "verde" => "#00FF00", "azul" => "#0000FF");
        foreach ($colores as $color => $codigo) {
        echo "El color $color tiene el código $codigo <br>";
        }

        // Array multidimensional
        $matriz = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );
        foreach ($matriz as $fila) {
            foreach ($fila as $elemento) {
            echo "$elemento ";
            }
            echo "<br>";
        }
  
    ?>

    <h2>Funcion range()</h2>
    
    <?php 
        //Para recorrer un array creado con range usamos foreach
        $numeros =range(0,10);
              
        foreach($numeros as $numero){
            echo $numero."<br>";
        }  
    ?>

    <h2>array_slice - array_splice</h2>

    <?php 
   
        $array = array("a", "b", "c", "d", "e");
        $slice = array_slice($array, 2);
        
        foreach ($slice as $letra) {
            echo "$letra <br>";
        }
    
        //Para determinar el punto final de corte
        $slice = array_slice($array, 2,2);
        
        foreach ($slice as $letra) {
            echo "$letra <br>";
        }

        //para sustituir una parte usamos array_splice
        
        $array = array("a", "b", "c", "d", "e");
        array_splice($array, 2, 2, array("x", "y"));

        foreach ($array as $letra) {
            echo "$letra <br>";
        }
    ?>

    <h2>array_pop - array_push</h2>

    <?php
        //Eliminar el último elemento
        $array = array("a", "b", "c", "d", "e");
        $lastElement = array_pop($array);

        echo "Elemento extraido: $lastElement <br>";
        foreach ($array as $letra) {
            echo "$letra <br>";
        }

        //Insertar dos elementos al final

        $array = array("a", "b", "c");
        array_push($array, "d", "e");
        
        foreach ($array as $letra) {
            echo "$letra <br>";
        }
    ?>

    <h2>array_shift - array_unshift</h2>

    <?php
        //eliminar el primer elemento del array
        $array = array("a", "b", "c", "d", "e");
        $firstElement = array_shift($array);

        echo "Elemento eleminado $firstElement";
        foreach ($array as $letra) {
            echo "$letra <br>";
        }

        //Insertar elemento al inicio del array
        $array = array("b", "c");
        array_unshift($array, "a");

        foreach ($array as $letra) {
            echo "$letra <br>";
        }

    ?>

    <h2>Sort - array_reverse</h2>

    <?php

        //ordena en orden ascendente

        $array = array("d", "b", "a", "e", "c");
        sort($array);

        
        foreach ($array as $letra) {
            echo "$letra <br>";
        }

        //cambia el orden del array
        $reverse = array_reverse($array);
        foreach ($reverse as $letra) {
            echo "$letra <br>";
        }

        //en un array asociativo
        $array = array("a" => "Apple", "b" => "Banana", "c" => "Cherry");
        $reverse = array_reverse($array, true);

        print_r($reverse);
    ?>

    <h2>array_unique</h2>

    <?php
        //elimina los elementos duplicados
        $array = array("a", "b", "a", "c", "b");
        $unique = array_unique($array);

        foreach ($reverse as $letra) {
            echo "$letra <br>";
        }
    ?>

    <h2>array_search</h2>

    <?php
        //busca un elemento y devuelve la clave
        $array = array("a", "b", "c", "d", "e");
        $key = array_search("c", $array);

        echo $key;
    ?>

    <h2>in_array</h2>

    <?php
        //comprueba si existe un valor y devuelve un boleano
        $array = array("a", "b", "c", "d", "e");
        $exists = in_array("c", $array);

        var_dump($exists);
        echo "<br>$exists";
    ?>

    <h2>array_key_exists</h2>

    <?php
        $array = array("a" => "Apple", "b" => "Banana", "c" => "Cherry");
        $exists = array_key_exists("b", $array);

        var_dump($exists);
        echo "<br>$exists";
    ?>

    <h2>array_sum</h2>

    <?php
        //suma de numeros de cada elemento
        $array = array(1, 2, 3, 4, 5);
        $sum = array_sum($array);

        echo $sum;

        //suma en un array asociativo
        $array = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
        $sum = array_sum($array);

        echo $sum;

        //suma en un array multimensional
        $array = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );
        
        $sum = 0;
        foreach($array as $subArray) {
            $sum += array_sum($subArray);
        }
        
        echo $sum;
    ?>

    <h2>array_product</h2>

    <?php
        //multiplica los elementos de una array
        $array = array(1, 2, 3, 4, 5);
        $product = array_product($array);

        echo $product;

        //multiplica en un arraya sociativo
        $array = array("a" => 1, "b" => 2, "c" => 3, "d" => 4, "e" => 5);
        $product = array_product($array);

        echo $product;

        //multiplica en una array multidimensional
        $array = array(
            array(1, 2, 3),
            array(4, 5, 6),
            array(7, 8, 9)
        );
        
        $product = 1;
        foreach($array as $subArray) {
            $product *= array_product($subArray);
        }
        
        echo $product;
    ?>
</body>
</html>