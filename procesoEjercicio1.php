<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso Ejercicio 1</title>
</head>
<body>
    <?php
        //Captura de datos del form
        echo "El nombre ingresado es: ";
        echo "<br>";
        echo $_REQUEST['nombre'];
        echo "<br>";
        echo "El apellido ingresado es: ";
        echo "<br>";
        echo $_REQUEST['apellido'];
        echo "<br>";
        echo "El usuario ingresado es: ";
        echo "<br>";
        echo $_REQUEST['usuario'];
        echo "<br>";
        echo "La contraseña no se mostrará por seguridad";
        echo "<br>";
    ?>
    <input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
</body>
</html>



