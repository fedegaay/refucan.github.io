<?php
    $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
    
    
    $sql = "INSERT INTO animales
    VALUES(
        null,
        '".$_POST["nombre"]."', 
        '".$_POST["sexo"]."', 
        '".$_POST["dni"]."',
        '".$_POST["raza"]."', 
        '".$_POST["porte"]."', 
        '".$_POST["manto"]."', 
        '".$_POST["rasgos"]."',
        '".$_POST["foto"]."',
        '".$_POST["protectora_id"]."'
        )";

    $resultado = mysqli_query($con, $sql) or die('Error de consulta');
        
        $sql2 = "INSERT INTO historia_clinica
    VALUES(
        null, 
        null, 
        null, 
        null, 
        null,
        null
        )";

    $resultado = mysqli_query($con, $sql2) or die('Error de consulta');
    mysqli_close($con);
    
        
    

    echo 'El registro se guardo exitosamente';
    header('location:index.html');
?>