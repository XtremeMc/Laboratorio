<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/
bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<?php
include "../clases/empleado.php";
include "../clases/planta.php";
include "../clases/formularioPlanta.php";
$formulario = new FormularioPlanta ;
$formulario->mostrar();
?>
</body>
</html>