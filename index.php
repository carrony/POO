<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programación orientada a objetos</title>
</head>
<body>
    <?php 
        // Incluimos la definicion de la clase, para poder utilizarla
        include_once("Coche.php");

        // Instanciamos un objeto de la clase con el operador new
        $coche1 = new Coche("BMW","Serie 3");
        // -> es un operador para acceder a un miembro de la clase/objeto
        /*$coche1->marca="BMW";
        $coche1->modelo="Serie 3";*/

       
        $coche1->escribeCoche();

        // Cambio de marca
        /* No se puede modificar las variables privadas desde fuera de la clase
        $coche1->marca="Ferrari";*/

        $coche2 = new Coche();
        $coche2->escribeCoche();

        $coche = new Coche("seat","león");
        $coche->escribeCoche();
        echo "La marca del coche 1 es ". $coche1->marca;

    ?>
</body>
</html>