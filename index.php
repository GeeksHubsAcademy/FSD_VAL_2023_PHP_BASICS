<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once './header.php';
    ?>

<h1>Mi primera clase PHP</h1>
<?php
// Comentarios multilinea
/*
    echo "<h1>hola mundo</h1>";

    print_r(["<h1>hola mundo</h1>"]);
*/

// Comentar linea
// var_dump(["hola mundo", 2, [true]]);

// print_r(["hola mundo", 2, [true]]);
    echo "hola"; #esto tb es un comentario
?>

<h1>Esto es otro script php</h1>

<?php 
    echo"<h2>Esto es otra prueba</h2>";
?>

<?php 
    echo"<h2>prueba2</h2>";
?>
<?php
        include './header.php';
?>
</body>
</html>