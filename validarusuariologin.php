

     <?php


             $usuario=$_POST['usuario'];
             $clave=$_POST['clave'];


$conexion=mysqli_connect("localhost","root","","trabajo");  
         $consulta= "SELECT * FROM administrador WHERE username='$usuario' AND password='$clave'"; 
             $resultado=mysqli_query( $conexion,$consulta);
    
$filas=mysqli_num_rows($resultado);

if($filas>0)

{
  header("location:alumno.php");
    }
       
else {
          
    echo'<script>alert("usuario o clave incorrectos");window.history.go(-1);</script>';
  
    }

?>