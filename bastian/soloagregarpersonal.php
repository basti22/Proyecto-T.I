
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

<h1>AGREGAR PERSONAL</h1>
<form class="form-horizontal" action="http://localhost/bastian/conexionagregarpersonal.php" method = "POST">
  <div class="form-group">
    <label class="control-label col-sm-2" for="rut">Rut:</label>
    <div class="col-sm-10"> 
      <input type="" class="form-control" name="rut" placeholder="Ingrese Rut sin puntos, con guion">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="fname">Primer Nombre:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="fname" placeholder="Ingrese el primer nombre">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="mname">Segundo Nombre:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="mname" placeholder="Ingrese el segundo nombre">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="lname">Apellido Paterno:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="lname" placeholder="Ingrese apellido paterno">
    </div>
  </div>
   <div class="form-group">
    <label class="control-label col-sm-2" for="sname">Apellido Materno:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="sname" placeholder="Ingrese apellido materno">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="especialidad">Especialidad:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="especialidad" placeholder="Ingrese especialidad del empleado">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="salario">Salario:</label>
    <div class="col-sm-10"> 
      <input type="" class="form-control" name="salario" placeholder="Ingrese salario del empleado">
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Agregar</button>
    </div>
  </div>
</form>
</body>
</html>