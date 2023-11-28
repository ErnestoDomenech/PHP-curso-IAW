<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
<?php 

/*Defining a Function */

function writeMessage(){
    echo "You are really a nice person, Have a nice time! <br/>";
}

/* Calling a Function */
writeMessage();

echo "<hr/>";

writeMessage();

/* Functions with parameters */

function addFunction($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}

$num1 = 2;
$num2 = 2;
$n = 1;
$n2 = 1;
$addfunc = addFunction($n, $n2);

echo "Resultado suma $addfunc <br>";



/*Pass by Reference - use ampersand in parameter */
function changeNum(&$num){
    $num = $num + 10;
    // $num+= 10;
}

function returnProduct($num1, $num2){
    $prod = $num1 * $num2;
    return $prod;
}

$retprd = returnProduct(2,2);




$num = 500;
addFunction(10, 20);
addFunction(10, $num);
addFunction('10', "50");

changeNum($num);
echo $num . '<br/>';

$return_value = returnProduct(10, 200);
echo $return_value . '<br/>';
?>
</body>
</html>