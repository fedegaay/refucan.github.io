<?php
    $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
    $sql = "INSERT INTO personas
    VALUES(
        null,
        '".$_POST["nombre"]."', 
        '".$_POST["apellido"]."', 
        '".$_POST["dni"]."', 
        '".$_POST["domicilio"]."', 
        '".$_POST["telefono"]."',
        '".$_POST["email"]."'
        )";
    $resultado = mysqli_query($con, $sql) or die('Error de consulta');
    mysqli_close($con);
    echo 'El registro se guardo exitosamente';
    header('location:index.html');
?>