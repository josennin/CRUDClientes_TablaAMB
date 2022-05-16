<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Clientes</title>
</head>
<body>
	<div style="font-family: cursive; color: blue;">
	<h1>CRUD Cliente</h1>
	<form id="formulario" method="POST" action="php/registrar.php">
		<label>Nombre:</label>
		<input type="text" name="nombre" placeholder="Su nombre"><br>
		<label>Direccion</label>
		<input type="textarea" name="direccion" placeholder="Su direccion"><br>
		<label>Email</label>
		<input type="text" name="email" placeholder="Su email"><br>
		<label>Telefono</label>
		<input type="text" name="tel" placeholder="Su telefono"><br>
		<label>Estado Civil</label>
		<input type="text" name="estado" placeholder="Su estado civil"><br>
		<button>Registrar</button>
	</form>
	</div>
<br>
	<div>
		<?php 
			$conexion = mysqli_connect('localhost', 'root', '', 'crudclientes') or
    			die('Problemas con la conexión');

  			$registros = mysqli_query($conexion, 'select * from clientes') or
    			die('Problemas en el select:' . mysqli_error($conexion));
			echo "<table border='1' style='font-family: cursive; color: green;'>
    		<tr>
				<td>Nombre</td>
				<td>Direccion</td>
				<td>Email</td>
				<td>Telefono</td>
				<td>Estado Civil</td>
				<td></td>
				<td></td>
			</tr>";

			while ($reg = mysqli_fetch_array($registros)) {
    			echo "<tr><td>" . $reg['nombre_apellido'] . "</td>";
    			echo "<td>" . $reg['direccion'] . "</td>";
    			echo "<td>" . $reg['email'] . "</td>";
    			echo "<td>" . $reg['telefono'] . "</td>";
    			echo "<td>" . $reg['estado_civil'] . "</td>";
    			echo "<td>";
    			echo '<a href="php/eliminar.php?id='.$reg['id'].'">Eliminar</a>';
    			echo "</td>";
    			echo "<td>";
    			echo '<a href="php/modificar.php?id='.$reg['id'].'">Modificar</a>';
    			echo "</td></tr>";
    		
  			}
  			mysqli_close($conexion);
		?>
		
	</div>
</body>
</html>