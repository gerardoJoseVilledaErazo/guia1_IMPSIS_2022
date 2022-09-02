<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - guia1 | 2022</title>
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
    <h2>&emsp;Ejercicio 2. </h2>
    <form method="POST" action="procesoEjercicio2.php" autocomplete="on" >
        <table style="background-color:#00FF00">
            <tr>
                <td>Ingrese su nombre:</td>
                <td><input type="text" name="nombre" placeholder="Johannes" required autofocus ></td>
            </tr>
            <tr>
                <td>Ingrese su apellido:</td>
                <td><input type="text" name="apellido" placeholder="Cruyff" required ></td>
            </tr>
            <tr>
                <td>Sexo:</td>
                <td>    
              <input type="radio" id="masculino" name="sexo" value="Masculino">
              <label for="masculino">Masculino</label><br>
              <input type="radio" id="femenino" name="sexo" value="Femenino" checked>
              <label for="femenino">Femenino</label><br>
                </td>
            </tr>
            <tr>
                <td>      
                <label for="pais">País de origen:</label>
                </td>
                <td>      
                <input list="paises" name="pais" id="pais">
                <datalist id="paises">
                <option value="El Salvador">
                <option value="Guatemala">
                <option value="México">
                <option value="Honduras">
                <option value="Costa Rica">
                <option value="Nicaragua">
                <option value="Panamá">
                <option value="U.S.A">
                <option value="Otro país">
                </datalist>  
                </td>
            </tr>
            <tr>
                <td>Pasatiempos:</td>
                <td>      
                <input type="checkbox" id="pasatiempo1" name="pasatiempo1" value="Internet">
                <label for="pasatiempo1"> Internet</label><br>
                <input type="checkbox" id="pasatiempo2" name="pasatiempo2" value="TV y cine">
                <label for="pasatiempo2"> TV y cine</label><br>
                </td>
            </tr>
            <tr>
                <td><label for="observaciones">Observaciones:</label></td>
                <td><textarea name="observaciones" id="observaciones" cols="30" rows="5"></textarea></td>
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