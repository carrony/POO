<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("Paciente.php");
        $pac1 = new Paciente("30000000A", "David", "Casas del Rosal", "C/ La mia 3", "666666666");

    ?>
    <h1>Datos del paciente</h1>
    <?php
        echo $pac1;
    ?>
</body>
</html>