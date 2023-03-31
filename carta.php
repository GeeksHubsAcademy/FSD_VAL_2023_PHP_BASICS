<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ol>
<?php

$platos = [   
    [
        "titulo"=>"Arroz con bogavante",
        "comensales"=>"4",
        "precio"=>18
    ],
    [
        "titulo"=>"Arroz negro",
        "comensales"=>"4",
        "precio"=>15
    ],
    [
        "titulo"=>"Arroz senyoret",
        "comensales"=>"4",
        "precio"=>12
    ]
];

// echo "<ol>";
foreach($platos as $key => $plato) {
    echo "<li>";
    echo "Titulo: ".$plato["titulo"];
    echo "</li>";
}
// echo "</ol>";

?>
</ol>
</body>
</html>