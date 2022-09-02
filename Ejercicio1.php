<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 1 - guia1 | 2022</title>
        <style>
        table, th, td {
            border: 1px solid black;
            margin-left: 16px;
        }
        th, td {
            padding: 10px;
        }
        </style>
    </head>
        <h1> &emsp;  Guía 1 - INTRODUCCION A PHP</h1>
        &emsp;<strong>  Alumno: </strong> <p> &emsp;Gerardo José Villeda Erazo</p> <br>
        &emsp;<strong>  Código: </strong> <p> &emsp;VE16I04001</p> <br>
        &emsp;<strong>  Materia: </strong> <P> &emsp;Implantación de Sistemas - 2022</P>  <br>
    <body>
    <h2>&emsp;Ejercicio 1. Realizar los siguientes ejercicios ocupando variables y quedará de la siguiente manera
con los nombres</h2>
        <form method="POST" action="procesoEjercicio1.php" autocomplete="on" >
            <table style="background-color:#00FF00">
                <tr>
                    <td>Ingrese su nombre:</td>
                    <td><input type="text" name="nombre" placeholder="Edson" required autofocus ></td>
                </tr>
                <tr>
                    <td>Ingrese su apellido:</td>
                    <td><input type="text" name="apellido" placeholder="Aranter" required ></td>
                </tr>
                <tr>
                    <td>Ingrese su usuario:</td>
                    <td><input type="text" name="usuario" placeholder="Pele" required ></td>
                </tr>
                <tr>
                    <td><label for="pwd">Ingrese su contraseña:</label></td>
                    <td><input type="password" id="pwd" name="pwd" required ></td>
                </tr>
                <tr>
                    <th><input type="submit" value="Enviar"></th>     
                    <th><input type="reset" value="Limpiar"></th>         
                </tr>
            </table>
        </form>
        <div class="container text-right">
            <p class="d-inline">
            &emsp;<strong> Derechos reservados - Universidad de Sonsonate &copy; 2022</strong>
            </p>
        </div>    
    </body>
</html>
