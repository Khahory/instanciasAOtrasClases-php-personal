<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        include("Vehiculo.php");

        $Kia = new Carro();
        $Patron = new Camion();

        echo "El Kia tiene " . $Kia->ruedas . " ruedas <br>";
        echo "El Patron tiene " . $Patron->ruedas . " ruedas <br>";

    ?>
</body>
</html>