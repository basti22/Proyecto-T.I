<!DOCTYPE html>
<html>
<head>
<title>Binimell's</title>
<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">SALON DE BELLEZA BINIMELLI'S</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://localhost/bastian/paginaprincipal.php">PRINCIPAL</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PERSONAL
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/bastian/buscarpersonal.php">BUSCAR PERSONAL</a></li>
          <li><a href="http://localhost/bastian/soloagregarpersonal.php">AGREGAR PERSONAL</a></li>
          <li><a href="http://localhost/bastian/eliminarpersonal.php">ELIMINAR PERSONAL</a></li>
          <li><a href="http://localhost/bastian/verregistro.php">VER REGISTRO COMPLETO</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">CLIENTES
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/bastian/buscarcliente.php">BUSCAR CLIENTE</a></li>
          <li><a href="http://localhost/bastian/agregarcliente.php">AGREGAR NUEVO CLIENTE</a></li>
          <li><a href="http://localhost/bastian/eliminarcliente.php">ELIMINAR CLIENTE</a></li>
          <li><a href="http://localhost/bastian/registroclientes.php">VER REGISTRO COMPLETO</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PRODUCTOS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">AGREGAR NUEVO PRODUCTO</a></li>
          <li><a href="#">REVISAR STOCK</a></li>
          <li><a href="#">STOCK COMPLETO</a></li>
          <li><a href="#">ACTUALIZAR STOCK</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PROVEEDORES
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="http://localhost/bastian/agregarnuevacompra.php">AGREGAR NUEVA COMPRA</a></li>
          <li><a href="http://localhost/bastian/buscarproveedor.php">BUSCAR PROVEEDOR</a></li>
          <li><a href="http://localhost/bastian/eliminarproveedor.php">ELIMINAR PROVEEDOR</a></li>
          <li><a href="http://localhost/bastian/registroproveedor.php">VER REGISTRO COMPLETO</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

</body>
<html/>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$database= "prueba";

$Nombre = $_POST['fname'];
$Apellido = $_POST['lname'];
$conn = mysqli_connect($servername, $username, $password,$database);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$buscar = "SELECT * FROM empleado WHERE Nombre1 = '$Nombre' && Apellido1 = '$Apellido'";
$resultado = mysqli_query($conn, $buscar);
while ($datos=mysqli_fetch_row($resultado)){
	echo "Rut : ".$datos[0],'<br>';
	echo "Nombre1 : ".$datos[1],'<br>';
	echo "Nombre2 : ".$datos[2],'<br>';
	echo "Apellido1 : ".$datos[3],'<br>';
	echo "Apellido2 : ".$datos[4],'<br>';
	echo "Especialidad : ".$datos[5],'<br>';
	echo "Salario : ".$datos[6],'<br><br><br>';

}


?>