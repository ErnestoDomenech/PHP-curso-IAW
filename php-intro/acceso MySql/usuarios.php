<?php 
include_once 'conexion.php';

$sql_read ='SELECT * FROM usuario';

$gsent = $pdo->prepare($sql_read);
$gsent->execute();

$resultado = $gsent->fetchAll();

//var_dump($resultado);


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <?php foreach($resultado as $dato): ?>
                    <div class="alert alert-primary text-uppercase" role="alert">
                        <?php echo $dato['user']; ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <div class="btn btn-primary">
            <a href="../index.php" style="color:#fff; text-decoration:none">Volver</a>
        </div>
        <div class="btn btn-primary">
            <a href="registro.php" style="color:#fff; text-decoration:none">Agregar</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

