<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    
<?php
include "../clases/empleado.php";
include "../clases/planta.php";
include "../clases/contratista.php";


$tipo_empleado = $_GET["tipo_empleado"];
echo "<center><h2>El tipo empleado es:  $tipo_empleado</center></h2>";
if($tipo_empleado == 1 )
// Planta
{ 
$identificacion = $_GET["identificacion"];
$nombre = $_GET['nombre'];
$cargo = $_GET["cargo"];
$SueldoBasico = $_GET["sueldo_basico"];
$valorExtras = $_GET["horas_extras"];
$deducciones = $_GET["deducciones"];
$objPlanta = new Planta($identificacion,$nombre,$cargo);
//se modifican los atributos del empleado de planta
$objPlanta->setSueldoBasico($SueldoBasico);
$objPlanta->setValorExtras($valorExtras);
$objPlanta->setDeducciones($deducciones);
$objPlanta->calcularSalario();


echo "<center><table border=5 ></center>";
echo "<tr><td>Empleado ID:</td><td>" .
$objPlanta->getIdentificacion() . "</td></tr>";
echo "<tr><td>Nombre Empleado:</td><td> " .
$objPlanta->getNombre(). "</td></tr>";
echo "<tr><td>Cargo Empleado:</td><td> " .
$objPlanta->getCargo(). "</td></tr>";
echo "<tr><td>Sueldo Basico: </td><td>" .
$objPlanta->getSueldoBasico(). "</td></tr>";
echo "<tr><td>Valor Extras: </td><td>" .
$objPlanta->getValorExtras(). "</td></tr>";
echo "<tr><td>Total Deducciones: </td><td>" .
$objPlanta->getDeducciones(). "</td></tr>";
echo "<tr><td>Salario Neto a Recibir: </td><td>" .
$objPlanta->getSalario(). "</td></tr>";
echo "</table><br></br>";
}

if($tipo_empleado == 2 ){ // Contratista
$identificacion = $_GET["identificacion"];
$nombre = $_GET["nombre"];
$cargo = $_GET["cargo"];
$valor_hora = $_GET["valor_hora"];
$horas_trabajadas = $_GET["horas_trabajadas"];
$objContratista = new Contratista($identificacion,
$nombre,$cargo);
$objContratista->setvalorHora($valor_hora);
$objContratista->setTotalHoras($horas_trabajadas);
$objContratista->calcularSalario($valor_hora,
$horas_trabajadas);
echo "<center><table border=5 ></center>";
echo "<tr><td>Empleado ID:</td><td>" .
$objContratista->getIdentificacion() . "</td></tr>";
echo "<tr><td>Nombre Empleado:</td><td> " . $objContratista
->getNombre()."</td></tr>";
echo "<tr><td>Cargo Empleado:</td><td> " . $objContratista
->getCargo(). "</td></tr>";
echo "<tr><td>Valor de la hora </td><td> " .
$objContratista
->getValorHora() . "</td></tr>";
echo "<tr><td>Número de horas </td><td> " . $objContratista
->getTotalHoras() . "</td></tr>";
echo "<tr><td>Salario Neto a recibir en el Mes: </td><td>".
$objContratista->getSalario() . "</td></tr>";
echo "</table><br></br>";
}


?>
</body>

<div class="form-group">
            <a href="../home.html" class="col-sm-4 col-sm-offset-3">
            <input type="button" class="btn btn-info"
            value="INICIO"> 
</html>