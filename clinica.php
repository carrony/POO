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
        $david = new Paciente("30000000A", "David", "Casas del Rosal", "C/ La mia 3", "666666666");

        $jesus = new Paciente("44444444L","Jesús", "Hurtado Cebrian", "C/ La tuya 4", "33333333");

    ?>
    <h1>Datos del paciente</h1>
    <h2>Paciente 1</h2>
    <?php
        $david->setAltura(1.82);
        $david->setPeso(89);
        echo $david;
        $jesus->setAltura(1.75);
        $jesus->setPeso(92);
    ?>
    <p>El IMC de <?=$david->getNombre()?> es 
    <?=$david->calculaIMC()?></p>

    <h2>Paciente 2</h2>
    <?=$jesus?>
    <p>El IMC de <?=$jesus->getNombre()?> es 
    <?=$jesus->calculaIMC()?></p>
</body>
</html>