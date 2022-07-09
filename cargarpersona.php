<?php
$conexion=mysqli_connect("localhost","root","","refucan") or
die("Problemas con la conexión");
mysqli_query($conexion,"insert into personas(nombre,apellido,dni,domicilio,telefono,email,animal_id) values
('$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[dni]','$_REQUEST[domicilio]','$_REQUEST[telefono]','$_REQUEST[email]','$_REQUEST[animal_id]')")
or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);
echo "Cargado con exito";
?>