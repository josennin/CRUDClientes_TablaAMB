<!doctype html>
<html>
<head>
  <title>Modificación de cliente.</title>
</head>  
<body>
 
  <?php
    include("conexion.php");
 
    $registro=mysqli_query($conn,"select * from clientes where id=$_REQUEST[id]") or
      die(mysqli_error($conn));
 
    if ($reg=mysqli_fetch_array($registro))
    {
  ?>
    <form method="POST" action="modificarCliente.php">
      Nombre:
      <input type="text" name="nombre" size="50" value="<?php echo $reg['nombre_apellido']; ?>">
      <br>
      Direccion:
      <input type="text" name="direccion" size="10" value="<?php echo $reg['direccion']; ?>">      
      <br>      
      Email:
      <input type="text" name="email" size="10" value="<?php echo $reg['email']; ?>"> 
      <br> 
      Telefono:
      <input type="text" name="tel" size="10" value="<?php echo $reg['telefono']; ?>"> 
      <br> 
      Estado Civil:
      <input type="text" name="estado" size="10" value="<?php echo $reg['estado_civil']; ?>"> 
      <input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>">     
      <br> 
      <input type="submit" value="Confirmar">
    </form>
  <?php
    }      
    else
	  echo 'No existe un artículo con dicho código';
 
    mysqli_close($conn);
 
  ?>  
</body>
</html>