
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, user-scalable=no  initial= scale=1, maximun-scale-1, minimum-scale=1">
    </head>

<body>

        <td><input type="text" id="rut"  placeholder="" name="rut" >
     <input type="submit" name="consultar" value="consultar"  class="btn btn-primary">    
</body>
</html>
<?php


if(isset($_POST['consultar']))
       
           
 $rut = $_POST['rut']; 

         

$conexion=mysqli_connect("localhost","root","","trabajo"); 
   $resulta= mysqli_query($conexion," SELECT * FROM alumno WHERE rut_alu = $rut");
    while($consulta=mysqli_fetch_array($resulta))

{
        
        echo $consulta['rut'];    
        echo $consulta['nombre'];
        echo $consulta['apellidos'];
        echo $consulta['direccion'];
        echo $consulta['ciudad'];
        echo $consulta['sexo'];
        echo $consulta['fechanaci'];
        echo $consulta['edad'];
        echo $consulta['nacionalidad'];
        echo $consulta['provincia'];
        echo $consulta['telefono'];
        
    
}
       
?>
