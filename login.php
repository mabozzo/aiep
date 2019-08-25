
  <!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, user-scalable=no  initial= scale=1, maximun-scale-1, minimum-scale=1">
    <title>Loginformulario</title>
    
    <link rel="stylesheet" href="logintrabajo.css"> 
  
  <script src="validar.js"></script>
  </head>
  

  <body>
 
 <div id="contenedor">
 
 <div id="contenedorlogin">
 <h4>login</h4>
   <FORM method="POST" action="validarusuariologin.php" onsubmit="return validar();"> 
 
 <input type="text" id="usuario" pattern="^[^]+$"  placeholder="usuario" name="usuario"  >
 <input type="password" id="password"  pattern="^[^]+$" placeholder="password" name="clave"  > 
 <input type="submit"  name="enviar" value="Enviar">

 </form>

 </div>
 </div>
 <footer>
     
   
       <p>© 2019 google y colaboradores individuales.</p>
 </footer>



     <?php


             $usuario=$_POST['usuario'];
             $clave=$_POST['clave'];


$conexion=mysqli_connect("localhost","root","","trabajo");  
         $consulta= "SELECT * FROM administrador WHERE username='$usuario' AND password='$clave'"; 
             $resultado=mysqli_query( $conexion,$consulta);
    
$filas=mysqli_num_rows($resultado);



if($filas>0){
        
        
        header("location:alumno.php");
    }
   
         
         else if(!$conexion){
          
    echo"error conexion";
    
    }
      
?>
</body>
</html>





