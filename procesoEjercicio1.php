<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso Ejercicio 1</title>
        <style>
        body {
            margin-left: 16px;
        }
        </style>
</head>
        <h1> &emsp;  Guía 1 - INTRODUCCION A PHP</h1>
        &emsp;<strong>  Alumno: </strong> <p> &emsp;Gerardo José Villeda Erazo</p> <br>
        &emsp;<strong>  Código: </strong> <p> &emsp;VE16I04001</p> <br>
        &emsp;<strong>  Materia: </strong> <P> &emsp;Implantación de Sistemas - 2022</P>  <br>
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
        echo "<br>";
    ?>
    &emsp;<input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
    <div class="container text-right">
        <p class="d-inline">
        &emsp;<strong> Derechos reservados - Universidad de Sonsonate &copy; 2022</strong>
        </p>
    </div> 
</body>
</html>



