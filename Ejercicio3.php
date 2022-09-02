<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - guia 1 | 2022</title>
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
    <h2>&emsp;Ejercicio 3. Solicitar los valores de 3 resistencias eléctricas (en Ohmios, W) y muestre el valor global
    de la resistencia formada por estas tres resistencias si:</h2>
    <form method="POST" action="procesoEjercicio3.php" autocomplete="on" >
        <table style="background-color:#00FF00">
            <tr>
                <td>Ingrese su resistencia 1:</td>
                <td><input type="number" name="R1" placeholder="Ohmios" required autofocus ></td>
            </tr>
            <tr>
                <td>Ingrese su resistencia 2:</td>
                <td><input type="number" name="R2" placeholder="Ohmios" required ></td>
            </tr>
            <tr>
                <td>Ingrese su resistencia 3:</td>
                <td><input type="number" name="R3" placeholder="Ohmios" required ></td>
            </tr>
            <tr>
                <th><input type="submit" value="Enviar"></th>     
                <th><input type="reset" value="Limpiar"></th>         
            </tr>
        </table>
    </form>
    <div class="container text-right">
        <p class="d-inline">
            <strong> &emsp;Derechos reservados - Universidad de Sonsonate &copy; 2022</strong>
        </p>
    </div>   
</body>
</html>