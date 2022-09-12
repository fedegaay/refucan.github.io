<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>

    <header>
        <h1>RefuCan</h1>
        <h3>Busqueda de animales</h3>
    </header>

    <body>
        <form action="buscar.php" method="POST">
            <fieldset>
                <legend>Seleccione Criterio de busqueda</legend>
                <input type="text" name="nombre" placeholder="Nombre" />
                <input type="text" name="raza" placeholder="Raza" />
                <input type="text" name="dni" placeholder="DNI" />
                <input type="text" name="porte" placeholder="Tamaño" />
                <button type="submit" name="buscar">Buscar</button>
            </fieldset>
            <button class="botones"><a href="index.html">Volver</a></button>
            
        </form>

<?php
    $con = mysqli_connect('localhost', 'root', '', 'refucan') or die('Error al conectarse');
    
    if(isset($_POST['buscar'])) {

        $consulta = "SELECT * FROM animales WHERE nombre like '%{$_POST['nombre']}%' and raza like '%{$_POST['raza']}%' and porte like '%{$_POST['porte']}%'
        
        ";
    
    
    $resultado = mysqli_query($con, $consulta);
?>
    <table style="color:white; border: 1px solid white; padding: 2px">
        <thead>
            <td>Nombre</td>
            <td>Raza</td>
            <td>DNI</td>
            <td>Porte</td>
        </thead><br>
        <tbody style="border: 1px solid white; padding: 2px">
        <?php while($row = mysqli_fetch_assoc($resultado)) { 
            echo '
            <tr>
            <td>'.$row['nombre'].'</td>
            <td>'.$row['raza'].'</td>
            <td>'.$row['dni'].'</td>
            <td>'.$row['porte'].'</td>
            </tr>
            ';
            
        } }
        ?>
        </tbody>
    </table>
      

    </body>

</html>
