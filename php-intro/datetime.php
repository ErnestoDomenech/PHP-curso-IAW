<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $datenow = getdate();
        echo "Today's Date: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon']. "<br/>";
        echo $datenow['year']. "<br/>";
        
        echo "Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/'. $datenow['year']. '<br/>';

        echo time() . '<br/>';


        print date("m/d/y G:i:s<br>", time());
       
       
       
        print "Today is ";
        print date("j of F Y, \a\\t g.i a", time());
    ?>
</body>
</html>