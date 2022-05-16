<?php 
	include("conexion.php");

	$reg = mysqli_query($conn,"delete from clientes where id=$_REQUEST[id]") or
        die(mysqli_error($conn));    
 
  	if ($reg) {
		echo'<script type="text/javascript">
        alert("Se elimino el cliente");
        window.location.href="../index.php";
        </script>';
	}else{
		echo'<script type="text/javascript">
        alert("Error al eliminar el cliente");
        window.location.href="../index.php";
        </script>';
	}
 ?>