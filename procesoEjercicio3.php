<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso Ejercicio 3</title>
</head>
        <h1> &emsp;  Guía 1 - INTRODUCCION A PHP</h1>
        &emsp;<strong>  Alumno: </strong> <p> &emsp;Gerardo José Villeda Erazo</p> <br>
        &emsp;<strong>  Código: </strong> <p> &emsp;VE16I04001</p> <br>
        &emsp;<strong>  Materia: </strong> <P> &emsp;Implantación de Sistemas - 2022</P>  <br>
<body>
    <?php
        //Captura de datos del form
        $R1 = $_REQUEST['R1'];
        $R2 = $_REQUEST['R2'];
        $R3 = $_REQUEST['R3'];
        $RP = 1/((1/$R1)+(1/$R2)+(1/$R3));
        $RS = $R1+$R2+$R3;
        echo "El valor global de la resistencia formada por estas tres resistencias si están conectadas en paralelo: R = 1/(1/R1)+(1/R2)+(1/R3) es:";
        echo "<br>";
        echo $RP;
        echo "&nbsp";
        echo "Ohmios";
        echo "<br>";
        echo "El valor global de la resistencia formada por estas tres resistencias si están conectadas en serie: R = R1+R2+R3 es:";
        echo "<br>";
        echo $RS;
        echo "&nbsp";
        echo "Ohmios";
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