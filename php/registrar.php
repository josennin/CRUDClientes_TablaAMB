<?php 
	include("conexion.php");

	$nom=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$email=$_POST['email'];
	$tel=$_POST['tel'];
	$estado=$_POST['estado'];

	$reg = mysqli_query($conn,"INSERT INTO clientes (nombre_apellido, direccion, email, telefono,estado_civil) VALUES ('$nom','$direccion','$email','$tel','$estado')");

	if ($reg) {
		echo'<script type="text/javascript">
        alert("Se registro el cliente");
        window.location.href="../index.php";
        </script>';
	}else{
		echo'<script type="text/javascript">
        alert("Error al registrar el cliente");
        window.location.href="../index.php";
        </script>';
	}
 ?>