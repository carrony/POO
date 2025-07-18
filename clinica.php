<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //session_start();
    require_once("Paciente.php");
      //  if (!isset($_SESSION["paciente"])) {
            $david = new Paciente("30000000A", "David", "Casas del Rosal", "C/ La mia 3", "666666666");
           // $_SESSION["paciente"]=serialize($david);
       /* } else {
            $david=unserialize($_SESSION["paciente"]);
        }*/

        if (isset($_POST["altura"])) {
            $david->setAltura($_POST['altura']);
            $david->setPeso($_POST['peso']);
           // $_SESSION["paciente"]=serialize($david);

        }
        
    ?>
    <h1>Datos del paciente</h1>
    <h2>Paciente 1</h2>
    <?php
        echo $david;
    ?>
    <form action="clinica.php" method="post">
        Altura (en metros): <input type="text" name="altura"><br>
        Peso (en Kg): <input type="text" name="peso">
        <input type="submit" value="Calcula IMC">
    </form>




    <p>El IMC de <?=$david->getNombre()?> es 
    <?=$david->calculaIMC()?></p>

</body>
</html>