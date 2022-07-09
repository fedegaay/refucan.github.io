<?php
    $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
    $sql = "INSERT INTO animal
    VALUES(null, 
    '".$_POST["nombre"]."', 
    '".$_POST["raza"]."', 
    '".$_POST["porte"]."', 
    '".$_POST["manto"]."', 
    '".$_POST["rasgos"]."', 
    '".$_POST["foto"]."', 
    '".$_POST["dni"]."',
    )";
    $resultado = mysqli_query($con, $sql) or die('Error de consulta');
    mysqli_close($con);
    echo 'El registro se guardo exitosamente';
    header('location:index.html');
?>