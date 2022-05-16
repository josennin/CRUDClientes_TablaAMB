<?php
    include("conexion.php");

	$id=$_POST["id"];
    $nom=$_POST["nombre"];
	$direccion=$_POST["direccion"];
	$email=$_POST["email"];
	$tel=$_POST["tel"];
	$estado=$_POST["estado"];
 
    $reg = mysqli_query($conn,"UPDATE clientes SET nombre_apellido='$nom',direccion='$direccion',email='$email',telefono='$tel',estado_civil='$estado' WHERE id='$id'");
 
    if ($reg) {
		echo'<script type="text/javascript">
        alert("Se modifico el cliente");
        window.location.href="../index.php";
        </script>';
	}else{
		echo'<script type="text/javascript">
        alert("Error al modificar el cliente");
        window.location.href="../index.php";
        </script>';
	}
?>  